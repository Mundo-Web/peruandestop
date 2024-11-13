<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static  function config(): PHPMailer
    {
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@peruandestop.com';
        $mail->Password = 'PAT@inf#2023';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Subject = 'Notificación de informacion Recibida';
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@peruandestop.com', 'Peru Andes Top');
        return $mail;
    }
}
