<?php
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//Create an instance; passing `true` enables exceptions
if(isset($_POST['submit'])){
$mail = new PHPMailer(true);

    $sendermail=$_POST['email'];
try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'manish.vijay@innoraft.com';                     //SMTP username
    $mail->Password   = 'nxhksipsgqhlxupc';                               //SMTP password
    $mail->SMTPSecure ="tls";            //Enable implicit TLS encryption
    $mail->Port       = "587"; 
                                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('manish.vijay@innoraft.com', 'Manish Vijay');
    $mail->addAddress($sendermail, 'Manish Vijay');     //Add a recipient             //Name is optional
    $mail->addReplyTo('ravatar@gmail.com', 'Information');

    //Attachments
    
    $mail->addAttachment('images/myimg.png', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail Send Test';
    $mail->Body    = 'Mail is succesfully sent to Manish';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}   


?>