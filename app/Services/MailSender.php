<?php
namespace App\Services;
use PHPMailer\PHPMailer;
class MailSender
{
    /**
     * Send Mail By phpMailer
     *
     * @return void
     */
    public static function sendMail($from, $to, $pass, $subject, $body)
    {
        $smtp_user = $from;
        $smtp_password = $pass;
        
        $mail = new PHPMailer\PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true;
        $mail->CharSet = 'utf-8';
        $mail->SMTPSecure = 'tls';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->IsHTML(false);
        $mail->Username = $smtp_user;
        $mail->Password = $smtp_password;
        $mail->SetFrom($smtp_user);
        $mail->From     = $from;
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        
        if( !$mail -> Send() ){
            $message  = "Message was not sent<br/ >";
            $message .= "Mailer Error: " . $mailer->ErrorInfo;
        } else {
            $message  = "Message has been sent";
        }
        
        echo $message;
    }
    
}