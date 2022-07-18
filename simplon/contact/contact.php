
<?php
ini_set('display_errors',  true);
error_reporting(1);

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
/*$chemin = $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";
require($chemin);*/

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
$mail->SMTPDebug = 2;
$mail->IsSMTP();
$mail->Host = '".ssl://smtp.gmail.com."';
$mail->SMTPAuth = true;
$mail->Username = 'estebanrosinel@gmail.com';
$mail->Password = '9dczm62e123';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

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
    echo $e;
}
// Import PHPMailer classes into the global namespace




/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;               // Enable SMTP authentication
$mail->Username = 'estebanrosinel@gmail.com';   // SMTP username
$mail->Password = '9dczm62e123';   // SMTP password
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                    // TCP port to connect to

// Sender info
$mail->setFrom('estebanrosinel@gmail.com', 'rosinel');
$mail->addReplyTo('vincemvxr@gmail.com', 'ros');

// Add a recipient
$mail->addAddress('rosinelesteban@gmail.com');

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
$mail->isHTML(true);

// Mail subject
$mail->Subject = 'Email from local host to test';

// Mail body content
$bodyContent = '<h1>How to Send Email from Localhost using PHP by InfoTech</h1>';
$bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>TechWAR</b></p>';
$mail->Body    = $bodyContent;

// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    echo 'Message has been sent.'; 
} 
 
?>*/