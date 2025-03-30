<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

echo smtp_mailer('receiver email','Test Subject','This is the email body');
function smtp_mailer($to, $subject, $msg){
    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls';  // You are using TLS, so keep this as 'tls'
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;  // Keep port 587 for TLS
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 2;  // Debug mode enabled to print detailed info

    // Set your Gmail credentials
    $mail->Username = "SENDER";  // Your Gmail address
    $mail->Password = ".................";  // Replace with your App Password

    $mail->SetFrom("SENDER");  // Use the same email as in Username
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);  // Add recipient email

    // Optional SSL options (disable SSL verification)
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true  // Set to true for debugging, false for production
    ));

    // Send email and check for errors
    if(!$mail->Send()){
        echo "Mailer Error: " . $mail->ErrorInfo;  // Print error if failed
    } else {
        echo "Message sent successfully!";
    }
}
?> 
