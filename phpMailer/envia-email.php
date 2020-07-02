<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'coringalgm@gmail.com';
    $mail->Password = 'mutanterex87';
    $mail->Port = 587;

    $mail->setFrom('coringalgm@gmail.com');
    $mail->addAddress('luizgomesbrasil87@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Um Juiz iniciou uma tabela recentemente';
    $mail->Body = '<h1>Parabéns dev! Você conseguiu :D</h1> <br><br> Um juiz acabou de iniciar uma nova <strong>tabela</strong>';
    $mail->Altbody = 'Um juiz acabou de iniciar uma nova tabela';

    if($mail->send()){
        echo 'Email enviado com sucesso';
    }else{
        echo 'Email não enviado';
    }
} catch (Exception $e){
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
