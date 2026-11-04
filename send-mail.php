<?php
declare(strict_types=1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

/**
 * Read a POST field as a trimmed string (no "Undefined array key" warnings on PHP 8+).
 */
function post(string $key): string
{
    $value = $_POST[$key] ?? '';
    return is_string($value) ? trim($value) : '';
}

/**
 * Escape a value before placing it in the HTML email body.
 */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5, 'UTF-8');
}

function isInputSafe(string $string): bool
{
    if ($string === '') {
        return false;
    }

    $string = htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $string = strip_tags($string);
    $string = preg_replace('/[^\w\s\.\,\!\?\-]/u', '', $string) ?? '';
    $string = trim(preg_replace('/\s+/u', ' ', $string) ?? '');

    $spamKeywords = ['youtube', 'unsubscribe', 'facebook', 'https', 'http', '//', '@', 'www', '.com', 'seo'];

    $string = strtolower($string);

    foreach ($spamKeywords as $keyword) {
        if (str_contains($string, $keyword)) {
            return false; // Contains spam
        }
    }

    return true;
}

function isValidEmail(string $email): bool
{
    if ($email === '') {
        return false;
    }

    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isValidPhone(string $phone): bool
{
    if ($phone === '') {
        return false;
    }

    return preg_match('/^(\d{3}-?\d{3}-?\d{4})$/', $phone) === 1;
}

$redirectTo = 'Contact.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $redirectTo);
    exit;
}

$name      = post('name');
$email     = post('email');
$contactNo = post('contact_no');
$message   = post('message');

if (!(isInputSafe($name) && isInputSafe($message) && isValidEmail($email) && isValidPhone($contactNo))) {
    // Spam / invalid submission: silently return to the contact page (same behaviour as before)
    header('Location: ' . $redirectTo);
    exit;
}

$message = preg_replace('/&#?[a-z0-9]{2,8};/i', '', $message) ?? '';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'mail.intellidt.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'inquiry@fullcarehs.com';
    $mail->Password   = 'Fsadmin';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = PHPMailer::CHARSET_UTF8;

    $mail->setFrom('inquiry@fullcarehs.com');
    $mail->addAddress('smitd@intellidt.com');
    $mail->addReplyTo($email, $name);
    $mail->Subject = 'FCHS Contact Form';
    $mail->isHTML(true);

    $mail->Body = '<html>'
        . '<b>Name:-</b> ' . e($name) . '<br>'
        . '<b>Email:-</b> ' . e($email) . '<br>'
        . '<b>Contact No:-</b> ' . e($contactNo) . '<br>'
        . '<b>Message :-</b> ' . nl2br(e($message))
        . '</html>';
    $mail->AltBody = "Name: {$name}\nEmail: {$email}\nContact No: {$contactNo}\nMessage: {$message}";

    $mail->send();

    header('Location: ' . $redirectTo);
    exit;
} catch (Exception $ex) {
    error_log('FCHS contact form mail error: ' . $mail->ErrorInfo);
    echo '<script>alert(' . json_encode('Message could not be sent. Please try again later.') . ');'
        . 'window.location.href = ' . json_encode($redirectTo) . ';</script>';
    exit;
}
