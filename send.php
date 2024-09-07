<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include('platetracker/config.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $gmail_user;                            //SMTP username
    $mail->Password   = $gmail_pass;                            //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('lukeplayspsn@gmail.com', 'Lucas Benko');
    $mail->addAddress('benko.lucas@gmail.com', 'Lucas Benko');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact request from lucasbenko.ca';
    $mail->Body    =  '<strong>' . $name . ' has sent you a message:</strong> <br><br> ' . $message . '<br><br><strong> Reply to their email at: </strong>' . $email;

    //$mail->send();
    $_SESSION['feedback_msg'] = "Your message was sent successfully! Thank you.";
    header ('Location: contact');
    exit();
} catch (Exception $e) {
    $_SESSION['feedback_msg'] = "Something went wrong. Please try again later.";
    header ('Location: contact');
    exit();
}