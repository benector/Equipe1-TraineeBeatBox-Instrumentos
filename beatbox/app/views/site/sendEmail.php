<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$name = utf8_encode($_POST['name']);
$email = utf8_encode($_POST['email']);
$subject = utf8_encode($_POST['subject']);
$body = utf8_encode($_POST['body']);

require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->setLanguage('pt');

$mail->isHTML(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';                    
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'beatbox.musicstore@gmail.com';
$mail->Password = 'beatbox1234';
$mail->Port = 587;


$mail->setFrom($email, $name);
$mail->addAddress('beatbox.musicstore@gmail.com');

$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body    = nl2br($body);
$mail->AltBody = nl2br(strip_tags($body));


if(! $mail->send()){
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else{
    header('Location: contato', true, 301);
    exit();
}
