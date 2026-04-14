<?php

header('Content-Type: application/json');

function loadEnvFile(string $path): array
{
    if (!is_file($path)) {
        return [];
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        return [];
    }

    $values = [];
    foreach ($lines as $line) {
        $trimmed = trim($line);
        if ($trimmed === '' || substr($trimmed, 0, 1) === '#') {
            continue;
        }

        $parts = explode('=', $line, 2);
        if (count($parts) !== 2) {
            continue;
        }

        $key = trim($parts[0]);
        $value = trim($parts[1]);
        if ($key === '') {
            continue;
        }

        $length = strlen($value);
        if ($length >= 2) {
            $first = $value[0];
            $last = $value[$length - 1];
            if (($first === '"' && $last === '"') || ($first === "'" && $last === "'")) {
                $value = substr($value, 1, -1);
            }
        }

        $values[$key] = $value;
    }

    return $values;
}

function envValue(array $env, string $key, ?string $fallback = null): ?string
{
    if (array_key_exists($key, $env) && $env[$key] !== '') {
        return $env[$key];
    }

    $runtime = getenv($key);
    if ($runtime !== false && $runtime !== '') {
        return $runtime;
    }

    return $fallback;
}

function jsonResponse(int $status, array $payload): void
{
    http_response_code($status);
    echo json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

function redactSecrets(string $value): string
{
    $value = preg_replace('/AIza[0-9A-Za-z\-_]{10,}/', '[hidden-api-key]', $value) ?? $value;
    $value = preg_replace('/api_key:[^\s\'"]+/i', 'api_key:[hidden]', $value) ?? $value;

    return trim($value);
}

function containsAny(string $haystack, array $needles): bool
{
    foreach ($needles as $needle) {
        if ($needle !== '' && stripos($haystack, $needle) !== false) {
            return true;
        }
    }

    return false;
}

function geminiErrorPayload(int $status, string $providerMessage): array
{
    $safeDetail = redactSecrets($providerMessage);
    $normalized = strtolower($safeDetail);
    $reply = "The Lake Sebu Assistant is temporarily unavailable right now. Please try again later.";

    if (
        containsAny($normalized, ['permission denied', 'api key', 'consumer', 'suspended', 'forbidden', 'unauthorized']) ||
        $status === 401 ||
        $status === 403
    ) {
        $reply = 'The Lake Sebu Assistant is temporarily unavailable because the Gemini API key on the server needs to be updated.';
    } elseif (
        containsAny($normalized, ['quota', 'rate limit', 'resource exhausted', 'too many requests']) ||
        $status === 429
    ) {
        $reply = 'The Lake Sebu Assistant is busy right now because the Gemini usage limit has been reached. Please try again in a few minutes.';
    } elseif ($status >= 500) {
        $reply = 'The Lake Sebu Assistant is temporarily unavailable because the Gemini service did not respond normally.';
    }

    return [
        'reply' => $reply,
        'detail' => $safeDetail,
        'providerStatus' => $status,
    ];
}

function historyToGeminiContents(array $history, string $userMessage): array
{
    $contents = [];

    foreach ($history as $message) {
        if (!isset($message['role'], $message['content'])) {
            continue;
        }

        $role = $message['role'] === 'user' ? 'user' : 'model';
        $content = trim((string) $message['content']);
        if ($content === '') {
            continue;
        }

        $contents[] = [
            'role' => $role,
            'parts' => [
                ['text' => mb_substr($content, 0, 2000)],
            ],
        ];
    }

    $contents[] = [
        'role' => 'user',
        'parts' => [
            ['text' => $userMessage],
        ],
    ];

    return $contents;
}

$raw = file_get_contents('php://input');
$payload = json_decode($raw, true) ?: [];
$userMessage = trim((string) ($payload['message'] ?? ''));
$history = is_array($payload['history'] ?? null) ? $payload['history'] : [];
$env = loadEnvFile(dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env');

if ($userMessage === '') {
    jsonResponse(400, ['error' => 'Missing message']);
}

$apiKey = envValue($env, 'GEMINI_API_KEY');
$model = trim((string) ($payload['model'] ?? envValue($env, 'GEMINI_MODEL', 'gemini-1.5-flash')));

if ($apiKey === null || $apiKey === '') {
    jsonResponse(500, [
        'reply' => 'The Lake Sebu Assistant is not configured yet. Add a valid GEMINI_API_KEY to .env.',
        'detail' => 'Missing GEMINI_API_KEY',
    ]);
}

$body = [
    'system_instruction' => [
        'parts' => [
            [
                'text' => "You are Lake Sebu AI, a friendly tourism assistant for Lake Sebu, South Cotabato, Philippines. Only answer questions directly related to Lake Sebu travel, directions, transport, attractions, culture, stays, food, safety, budgets, and itineraries. Keep answers concise, factual, and helpful. If rates or schedules vary, say they are indicative.",
            ],
        ],
    ],
    'contents' => historyToGeminiContents($history, $userMessage),
    'generationConfig' => [
        'temperature' => 0.9,
        'maxOutputTokens' => 350,
    ],
];

$url = 'https://generativelanguage.googleapis.com/v1beta/models/' . rawurlencode($model) . ':generateContent';
$headers = [
    'Content-Type: application/json',
    'x-goog-api-key: ' . $apiKey,
];

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($body),
    CURLOPT_TIMEOUT => 30,
]);

$response = curl_exec($ch);
$error = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($error) {
    jsonResponse(502, [
        'reply' => "The Lake Sebu Assistant is temporarily unavailable because it couldn't reach Gemini.",
        'detail' => redactSecrets($error),
    ]);
}

$data = json_decode((string) $response, true);
if ($httpCode < 200 || $httpCode >= 300) {
    $message = (string) ($data['error']['message'] ?? "API error (HTTP $httpCode)");
    jsonResponse(502, geminiErrorPayload($httpCode, $message));
}

$parts = $data['candidates'][0]['content']['parts'] ?? [];
$reply = '';
foreach ($parts as $part) {
    if (!empty($part['text'])) {
        $reply .= $part['text'];
    }
}

jsonResponse(200, ['reply' => $reply !== '' ? $reply : 'Sorry, no reply right now.']);
