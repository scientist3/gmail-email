<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'dfdsfdsfds@gmail.com'; // YOUR gmail email
    $mail->Password = '12323423'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('claaaa@gmail.com', 'Clan');
    $mail->addAddress('recever@gmail.com', 'Scientist'); // Get From User
    $mail->addReplyTo('addreplyto@gmail.com', 'Clan'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Send email using Gmail SMTP and PHPMailer"; // Get From User
    $mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque qui officiis velit saepe, esse dicta et excepturi aliquam? Doloremque consequatur earum nisi quae voluptate, officiis sit hic exercitationem? Ratione, aut?'; // Get From User
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
