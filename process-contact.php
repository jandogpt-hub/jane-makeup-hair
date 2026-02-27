<?php
/**
 * Jane Makeup & Hair — Contact Form Handler
 * Validates, sanitizes, logs, and emails form submissions.
 */
define('allowed', true);
require_once __DIR__ . '/includes/config.php';

// Only accept POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact');
    exit;
}

/**
 * Sanitizes a plain text string.
 *
 * @param string $val
 * @return string
 */
function clean($val) {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

// Honeypot check
if (!empty($_POST['website'])) {
    header('Location: /thank-you');
    exit;
}

// Collect & sanitize
$name       = clean($_POST['name']       ?? '');
$email      = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone      = clean($_POST['phone']      ?? '');
$event_date = clean($_POST['event_date'] ?? '');
$service    = clean($_POST['service']    ?? '');
$location   = clean($_POST['location']  ?? '');
$message    = clean($_POST['message']   ?? '');

// Required field validation
$errors = [];
if (empty($name))     $errors[] = 'Name is required.';
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
if (empty($service))  $errors[] = 'Please select a service.';
if (empty($location)) $errors[] = 'Event location is required.';

if (!empty($errors)) {
    // In a real implementation, pass errors back to the form
    header('Location: /contact?error=1');
    exit;
}

// Log submission to file
$log_dir = __DIR__ . '/submissions';
if (!is_dir($log_dir)) mkdir($log_dir, 0755, true);
$log_file = $log_dir . '/submissions.csv';
$log_row  = [
    date('Y-m-d H:i:s'),
    $name, $email, $phone,
    $event_date, $service, $location,
    str_replace(["\r", "\n"], ' ', $message)
];
$fp = fopen($log_file, 'a');
if ($fp) {
    fputcsv($fp, $log_row);
    fclose($fp);
}

// Build email
$subject = "New Booking Request from {$name} — {$service}";
$body    = implode("\n", [
    "New booking request from the Jane Makeup & Hair website.",
    "",
    "Name:         {$name}",
    "Email:        {$email}",
    "Phone:        {$phone}",
    "Service:      {$service}",
    "Event Date:   {$event_date}",
    "Location:     {$location}",
    "",
    "Message:",
    $message,
    "",
    "--- Sent from janemakeuphair.com at " . date('Y-m-d H:i:s T'),
]);
$headers = implode("\r\n", [
    "From: noreply@janemakeuphair.com",
    "Reply-To: {$email}",
    "Content-Type: text/plain; charset=UTF-8",
]);

mail(FORM_RECIPIENT, $subject, $body, $headers);

header('Location: /thank-you');
exit;
