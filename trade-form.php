<?php
/**
 * Olivekala Trade Enquiry Form Handler
 * Upload to: httpdocs/trade-form.php on Plesk server
 */

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: https://olivekala.com');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

header('Access-Control-Allow-Origin: https://olivekala.com');
header('Content-Type: application/json');

// Sanitise inputs
$name  = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$est   = htmlspecialchars(trim($_POST['establishment'] ?? ''), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$sector= htmlspecialchars(trim($_POST['sector'] ?? ''), ENT_QUOTES, 'UTF-8');
$tier  = htmlspecialchars(trim($_POST['tier'] ?? ''), ENT_QUOTES, 'UTF-8');
$vol   = htmlspecialchars(trim($_POST['volume'] ?? ''), ENT_QUOTES, 'UTF-8');
$msg   = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

// Basic validation
if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid input']);
    exit;
}

$to      = 'trade@olivekala.com';
$subject = "Trade Enquiry — $name / $est";
$body    = "Name: $name\r\nEstablishment: $est\r\nEmail: $email\r\nSector: $sector\r\nTier: $tier\r\nVolume: $vol\r\n\r\nMessage:\r\n$msg";
$headers = implode("\r\n", [
    "From: noreply@olivekala.com",
    "Reply-To: $email",
    "X-Mailer: PHP/" . phpversion(),
    "Content-Type: text/plain; charset=UTF-8"
]);

$sent = mail($to, $subject, $body, $headers);

echo json_encode(['ok' => $sent]);
