
<?php

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$chemin = $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";
require($chemin);
$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'b683d1726ebaa1';
    $mail->Password = 'e83fd8f3da1045';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;

    $mail->setFrom('rosinelesteban@gmail.com', 'First Last');
    $mail->addReplyTo($_POST['mail']);

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];
    //$mail->addEmbeddedImage('path/to/image_file.jpg', 'image_cid');
    $mail->Body = $_POST['text'];
    //$mail->AltBody = 'This is the plain text version of the email content';
    
    if(!$mail->send()) {
        echo 'Erreur, message non envoyé.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
     } else {
        echo 'Le message a bien été envoyé !';
     }

    //header('Location: contact.html');
    exit();
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}*/
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$chemin = $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";
require($chemin);

$mail = new PHPMailer(true);

try {
$mail->SMTPDebug = 2;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'estebanrosinel@gmail.com';
$mail->Password = '9dczm62e123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

//Recipients
$mail->SetFrom('estebanrosinel@gmail.com', 'Esteban');
$mail->AddAddress('rosinelesteban@gmail.com');
$mail->AddReplyTo('rosinelesteban@gmail.com');


$mail->isHTML(true);
$mail->Subject = 'Test Email sent via Gmail SMTP Server using PHP Mailer';
$mail->Body = 'Hello hi her';

//Attachments
//$mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

//Content
$mail->send();
echo 'Message sent';
}catch(Exception $e){
    echo 'message could not be sent? Error: ', $mail->ErrorInfo;
}