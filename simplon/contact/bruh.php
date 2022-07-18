<?php

use PHPMailer\PHPMailer\PHPMailer;



if (isset($_POST['submit'])) {
    //print_r($_POST);  
    $email = $_POST['email'];
    smtp_mailer($email, 'TEST', "Thank you for watching my video");
}
function smtp_mailer($to, $subject, $msg)
{
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 3;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'TLS';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'estebanrosinel@gmail.com';
    $mail->Password = '9dczm62e123';
    $mail->setFrom('estebanrosinel@gmail.com', 'Test');
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'send';
    }
}
