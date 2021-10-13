<?php
//Import PHPMailer classes into the global namespac][p98
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('info');
$log->pushHandler(new StreamHandler('log.txt', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['msg'];
try {
    //Server settings
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'd76ce7f176a4ba';
    $phpmailer->Password = 'f5c7cccd13fbe2';                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $phpmailer->addCC('daanlokhoff45@gmail.com');

    //Content
    $phpmailer->Subject = 'Uw klacht is in behandeling!';
    $phpmailer->Body = ($name . $email . $message);
    $phpmailer->send();
    echo 'Klacht is verstuurd!';
} catch (Exception $e) {
    echo "Er is iets fout gegaan. Mailer Error: {$mail->ErrorInfo}";
}


