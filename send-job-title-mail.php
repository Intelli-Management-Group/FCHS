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

$redirectTo = 'Career.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $redirectTo);
    exit;
}

// Which application page the form came from (e.g. "Registered Nurse")
$referer  = (string) parse_url($_SERVER['HTTP_REFERER'] ?? '', PHP_URL_PATH);
$position = str_replace(['_Application', '_'], ['', ' '], pathinfo($referer, PATHINFO_FILENAME));

$fields = [
    'fname'              => post('fname'),
    'lname'              => post('lname'),
    'email'              => post('email'),
    'phone'              => post('phone'),
    'address'            => post('address'),
    'saddress'           => post('saddress'), // optional (field is hidden on the forms)
    'city'               => post('city'),
    'state'              => post('state'),
    'zip'                => post('zip'),
    'answer1'            => post('answer1'),
    'answer2'            => post('answer2'),
    'answer3'            => post('answer3'),
    'employer'           => post('employer'),
    'travel'             => post('travel'),
    'motivation'         => post('motivation'),
    'information_source' => post('information_source'),
];

$required = ['fname', 'lname', 'email', 'phone', 'address', 'city', 'state', 'zip',
             'answer1', 'answer2', 'answer3', 'employer', 'motivation', 'information_source'];

foreach ($required as $key) {
    if ($fields[$key] === '') {
        header('Location: ' . $redirectTo);
        exit;
    }
}

if (filter_var($fields['email'], FILTER_VALIDATE_EMAIL) === false) {
    header('Location: ' . $redirectTo);
    exit;
}

$labels = [
    'fname'              => 'First Name',
    'lname'              => 'Last Name',
    'email'              => 'Email',
    'phone'              => 'Contact No',
    'address'            => 'Address Line 1',
    'saddress'           => 'Address Line 2',
    'city'               => 'City',
    'state'              => 'Province',
    'zip'                => 'Postal Code',
    'answer1'            => 'What do you love most about caregiving?',
    'answer2'            => 'Why do you feel you would be a good Full Care Health Services Caregiver?',
    'answer3'            => 'What is the most important thing you seek from an employer?',
    'employer'           => 'What kind of hours are you seeking?',
    'travel'             => 'I travel by',
    'motivation'         => 'If you were successfully hired, what things will motivate you the most in your job?',
    'information_source' => 'How did you hear about us?',
];

$body = '<html>';
if ($position !== '') {
    $body .= '<b>Position :-</b> ' . e($position) . '<br><br>';
}
foreach ($labels as $key => $label) {
    if ($fields[$key] === '') {
        continue;
    }
    $body .= '<b>' . e($label) . ' :-</b><br>' . nl2br(e($fields[$key])) . '<br><br>';
}
$body .= '</html>';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'mail.fullcarehs.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hiring@fullcarehs.com';
    $mail->Password   = 'FSadmin';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->CharSet    = PHPMailer::CHARSET_UTF8;

    $mail->setFrom('hiring@fullcarehs.com');
    $mail->addAddress('sal@intellidt.com');
    $mail->addReplyTo($fields['email'], $fields['fname'] . ' ' . $fields['lname']);
    $mail->Subject = 'FCHS Application Form' . ($position !== '' ? ' - ' . $position : '');
    $mail->isHTML(true);
    $mail->Body    = $body;
    $mail->AltBody = strip_tags(str_replace('<br>', "\n", $body));

    $mail->send();

    echo '<script>alert(' . json_encode('Thank you! Your application has been submitted.') . ');'
        . 'window.location.href = ' . json_encode($redirectTo) . ';</script>';
    exit;
} catch (Exception $ex) {
    error_log('FCHS application form mail error: ' . $mail->ErrorInfo);
    echo '<script>alert(' . json_encode('Your application could not be sent. Please try again later.') . ');'
        . 'window.location.href = ' . json_encode($redirectTo) . ';</script>';
    exit;
}
