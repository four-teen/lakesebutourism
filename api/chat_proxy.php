<?php
// File: /api/chat_proxy.php
// Windows-friendly OpenRouter proxy with multiple key sources.
// Priority: ENV > C:\secrets\openrouter.ini > fallback message

header('Content-Type: application/json');

// ---- Input ----
$raw = file_get_contents('php://input');
$payload = json_decode($raw, true) ?: [];
$userMessage = trim($payload['message'] ?? '');
$history = $payload['history'] ?? [];
$modelFromClient = $payload['model'] ?? null;

if ($userMessage === '') {
  http_response_code(400);
  echo json_encode(['error' => 'Missing message']);
  exit;
}

// ---- Get API key (Windows-safe) ----
$apiKey = getenv('OPENROUTER_API_KEY');
$siteUrl = getenv('SITE_URL');

// If not in ENV, check C:\secrets\openrouter.ini (or change path if you want)
if (!$apiKey) {
  $iniPath = 'C:\\secrets\\openrouter.ini';
  if (file_exists($iniPath)) {
    $ini = parse_ini_file($iniPath, false, INI_SCANNER_RAW);
    if (!empty($ini['OPENROUTER_API_KEY'])) $apiKey = trim($ini['OPENROUTER_API_KEY'], "\"'");
    if (!empty($ini['SITE_URL'])) $siteUrl = trim($ini['SITE_URL'], "\"'");
  }
}

if (!$apiKey) {
  echo json_encode(['reply' => "AI mode not configured yet. Set OPENROUTER_API_KEY in system env or C:\\secrets\\openrouter.ini"]);
  exit;
}
if (!$siteUrl) {
  $siteUrl = 'http://localhost';
}

// ---- Build messages ----
$messages = [
  [
    'role' => 'system',
    'content' => "You are a friendly Lake Sebu tourism assistant. Keep answers concise, factual, and helpful. If rates are indicative, say so. Use bullets when useful."
  ]
];

foreach ($history as $m) {
  if (!isset($m['role'], $m['content'])) continue;
  $role = ($m['role'] === 'user') ? 'user' : 'assistant';
  $messages[] = ['role' => $role, 'content' => mb_substr($m['content'], 0, 2000)];
}
$messages[] = ['role' => 'user', 'content' => $userMessage];

// ---- Model choice ----
// You can pin a free label if available, but availability changes.
// Safe default:
$model = $modelFromClient ?: 'openrouter/auto';

// ---- Request body ----
$body = [
  'model' => $model,
  'messages' => $messages,
  'temperature' => 0.3,
  'max_tokens' => 350,
];

// ---- Headers ----
$headers = [
  'Content-Type: application/json',
  'Authorization: Bearer ' . $apiKey,
  'Referer: ' . $siteUrl,
  'X-Title: Lake Sebu Tourism Chat',
];

// ---- cURL ----
$ch = curl_init('https://openrouter.ai/api/v1/chat/completions');
curl_setopt_array($ch, [
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => json_encode($body),
  CURLOPT_TIMEOUT => 30,
]);

$res = curl_exec($ch);
$err = curl_error($ch);
$http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($err) {
  echo json_encode(['reply' => "Sorry, I couldn’t connect to the AI service."]);
  exit;
}

$data = json_decode($res, true);

// Handle non-2xx
if ($http < 200 || $http >= 300) {
  $msg = $data['error']['message'] ?? "API error (HTTP $http)";
  echo json_encode(['reply' => "I’m hitting a limit/error right now: $msg"]);
  exit;
}

$reply = $data['choices'][0]['message']['content'] ?? null;
echo json_encode(['reply' => $reply ?: "Sorry, no reply right now."]);
