const DEFAULT_MODEL = 'gemini-3.5-flash';
const REQUEST_TIMEOUT_MS = 30000;
const SYSTEM_INSTRUCTION = [
  'You are Lake Sebu AI, a friendly tourism assistant for Lake Sebu, South Cotabato, Philippines.',
  'Only answer questions directly related to Lake Sebu travel, directions, transport, attractions, culture, stays, food, safety, budgets, and itineraries.',
  'Keep answers concise, factual, and helpful. If rates or schedules vary, say they are indicative.',
  'Use plain text only, without Markdown formatting.'
].join(' ');

function jsonResponse(res, status, payload) {
  res.statusCode = status;
  res.setHeader('Content-Type', 'application/json; charset=utf-8');
  res.end(JSON.stringify(payload));
}

function redactSecrets(value) {
  return String(value || '')
    .replace(/AIza[0-9A-Za-z\-_]{10,}/g, '[hidden-api-key]')
    .replace(/api_key:[^\s'"]+/gi, 'api_key:[hidden]')
    .trim();
}

function containsAny(haystack, needles) {
  return needles.some((needle) => needle && haystack.includes(needle));
}

function geminiErrorPayload(status, providerMessage) {
  const safeDetail = redactSecrets(providerMessage);
  const normalized = safeDetail.toLowerCase();
  let reply = 'The Lake Sebu Assistant is temporarily unavailable right now. Please try again later.';

  if (
    containsAny(normalized, ['permission denied', 'api key', 'consumer', 'suspended', 'forbidden', 'unauthorized']) ||
    status === 401 ||
    status === 403
  ) {
    reply = 'The Lake Sebu Assistant is temporarily unavailable because the Gemini API key on the server needs to be updated.';
  } else if (
    containsAny(normalized, ['quota', 'rate limit', 'resource exhausted', 'too many requests']) ||
    status === 429
  ) {
    reply = 'The Lake Sebu Assistant is busy right now because the Gemini usage limit has been reached. Please try again in a few minutes.';
  } else if (containsAny(normalized, ['model', 'not found', 'not supported'])) {
    reply = 'The Lake Sebu Assistant is temporarily unavailable because the Gemini model on the server needs to be updated.';
  } else if (status >= 500) {
    reply = 'The Lake Sebu Assistant is temporarily unavailable because the Gemini service did not respond normally.';
  }

  return {
    reply,
    detail: safeDetail,
    providerStatus: status
  };
}

function readRequestBody(req) {
  if (req.body && typeof req.body === 'object') {
    return Promise.resolve(req.body);
  }

  return new Promise((resolve, reject) => {
    let raw = '';

    req.on('data', (chunk) => {
      raw += chunk;

      if (raw.length > 65536) {
        reject(new Error('Request body is too large'));
        req.destroy();
      }
    });

    req.on('end', () => {
      if (!raw) {
        resolve({});
        return;
      }

      try {
        resolve(JSON.parse(raw));
      } catch (error) {
        reject(new Error('Invalid JSON request body'));
      }
    });

    req.on('error', reject);
  });
}

function trimText(value, maxLength) {
  const text = String(value || '').trim();

  return text.length > maxLength ? text.slice(0, maxLength) : text;
}

function buildConversationInput(history, userMessage) {
  const transcript = [];

  if (Array.isArray(history)) {
    history.slice(-10).forEach((message) => {
      if (!message || typeof message !== 'object') {
        return;
      }

      const role = message.role === 'user' ? 'Visitor' : 'Assistant';
      const content = trimText(message.content, 2000);

      if (content) {
        transcript.push(`${role}: ${content}`);
      }
    });
  }

  transcript.push(`Visitor: ${trimText(userMessage, 4000)}`);

  return transcript.join('\n');
}

function extractReply(data) {
  if (!data || typeof data !== 'object') {
    return '';
  }

  if (typeof data.output_text === 'string') {
    return data.output_text.trim();
  }

  if (typeof data.text === 'string') {
    return data.text.trim();
  }

  const steps = Array.isArray(data.steps) ? data.steps : [];
  const stepParts = [];

  steps.forEach((step) => {
    if (step?.type !== 'model_output') {
      return;
    }

    if (typeof step.text === 'string') {
      stepParts.push(step.text);
    }

    if (Array.isArray(step?.content)) {
      step.content.forEach((contentItem) => {
        if (typeof contentItem?.text === 'string') {
          stepParts.push(contentItem.text);
        }
      });
    }
  });

  if (stepParts.length) {
    return stepParts.join('').trim();
  }

  const output = Array.isArray(data.output) ? data.output : [];
  const parts = [];

  output.forEach((item) => {
    if (typeof item?.text === 'string') {
      parts.push(item.text);
    }

    if (Array.isArray(item?.content)) {
      item.content.forEach((contentItem) => {
        if (typeof contentItem?.text === 'string') {
          parts.push(contentItem.text);
        }
      });
    }
  });

  return parts.join('').trim();
}

export default async function handler(req, res) {
  res.setHeader('Cache-Control', 'no-store');

  if (req.method === 'OPTIONS') {
    res.setHeader('Allow', 'POST, OPTIONS');
    jsonResponse(res, 204, {});
    return;
  }

  if (req.method !== 'POST') {
    res.setHeader('Allow', 'POST, OPTIONS');
    jsonResponse(res, 405, { error: 'Method not allowed' });
    return;
  }

  let payload;

  try {
    payload = await readRequestBody(req);
  } catch (error) {
    jsonResponse(res, 400, { error: error.message });
    return;
  }

  const userMessage = trimText(payload.message, 4000);
  const history = Array.isArray(payload.history) ? payload.history : [];
  const apiKey = process.env.GEMINI_API_KEY;
  const model = trimText(payload.model || process.env.GEMINI_MODEL || DEFAULT_MODEL, 80);

  if (!userMessage) {
    jsonResponse(res, 400, { error: 'Missing message' });
    return;
  }

  if (!apiKey) {
    jsonResponse(res, 500, {
      reply: 'The Lake Sebu Assistant is not configured yet. Add a valid GEMINI_API_KEY in Vercel Environment Variables.',
      detail: 'Missing GEMINI_API_KEY'
    });
    return;
  }

  const controller = new AbortController();
  const timeout = setTimeout(() => controller.abort(), REQUEST_TIMEOUT_MS);

  try {
    const providerResponse = await fetch('https://generativelanguage.googleapis.com/v1beta/interactions', {
      method: 'POST',
      signal: controller.signal,
      headers: {
        'Content-Type': 'application/json',
        'x-goog-api-key': apiKey
      },
      body: JSON.stringify({
        model,
        system_instruction: SYSTEM_INSTRUCTION,
        input: buildConversationInput(history, userMessage),
        generation_config: {
          temperature: 0.9,
          max_output_tokens: 1200
        }
      })
    });

    const responseText = await providerResponse.text();
    let data = {};

    try {
      data = responseText ? JSON.parse(responseText) : {};
    } catch (error) {
      data = {};
    }

    if (!providerResponse.ok) {
      const message = data?.error?.message || responseText || `API error (HTTP ${providerResponse.status})`;
      jsonResponse(res, 502, geminiErrorPayload(providerResponse.status, message));
      return;
    }

    const reply = extractReply(data);
    jsonResponse(res, 200, {
      reply: reply || 'Sorry, I could not prepare a reply right now.'
    });
  } catch (error) {
    const message = error?.name === 'AbortError'
      ? 'The Gemini request timed out.'
      : error?.message || 'Unable to reach Gemini.';

    jsonResponse(res, 502, {
      reply: 'The Lake Sebu Assistant is temporarily unavailable. Please try again shortly.',
      detail: redactSecrets(message)
    });
  } finally {
    clearTimeout(timeout);
  }
}
