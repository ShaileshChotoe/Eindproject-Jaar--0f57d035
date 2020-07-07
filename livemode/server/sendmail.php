<?php

session_start();


$email = $_POST['email'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                  // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bitacademy.enrollment@gmail.com';                     // SMTP username
    $mail->Password   = 'mBjyKfc_U-67TV2vnxxg_9!Ye@fK8!';
    $mail->Port       = 465;                                           // SMTP password
    $mail->SMTPSecure = "ssl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged                        // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('bitacademy.enrollment@gmail.com', 'Bit-Academy');
    $mail->addAddress($email, $_SESSION['name']);     // Add a recipient
    $mail->Subject = 'Je eigen website';
    $mail->Body = 'Hierbij sturen wij de code van jouw eigen website! Vond je dit nou erg leuk? Meld je dan snel aan bij de Bit-Academy!';

    // Attachments
    $mail->addAttachment("../userfiles/" . $_SESSION['session_number'] . ".php", 'index.html');
    $mail->addAttachment("../userfiles/" . $_SESSION['session_number'] . ".css", $_SESSION['session_number'] . ".css");

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



header("Location: ../levels/download.php?sent=true");

?>