
<?php 
                            
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/*require '/var/www/simplon/vendor/phpmailer/';
require '/PHPMailer/src/PHPMailer.php';
require '/PHPMailer/src/SMTP.php';*/

//Load Composer's autoloader
/*$chemin = $_SERVER["DCOUMENT_ROOT"]."/vendor/autoload.php";
require($chemin);*/
require "chalandiz/vendor/autoload.php";

$mail = new PHPMailer(true);
ini_set('display_errors','On');
try {
    //Server settings
    $mail->SMTPDebug = 2;                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'node151-eu.n0c.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'chalandiz.fr.gp@chalandiz.pq.lu';                     //SMTP username
    $mail->Password   = 'Pgb"kvq123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('chalandiz.fr.gp@chalandiz.pq.lu', 'ROSINEL Estéban');
    $mail->addAddress($_SESSION['email'], $_SESSION['nom']);     //Add a recipient
    /* $mail->addAddress('ellen@example.com');*/             //Name is optional
    $mail->addReplyTo('chalandiz.fr.gp@chalandiz.pq.lu', 'ROSINEL');
    /*$mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    //Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name*/

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

#print_r($mail);

 phpinfo();
 }
 header('Location: https://chalandiz.pq.lu/stage/verify.php');