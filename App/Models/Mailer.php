<?php

namespace App\Models;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Config\PMailer;

class Mailer
{	

	public function send($to,$subject,$message)
	{
		$mail   = new PHPMailer();
		$mail->isSMTP();
	    //$mail->SMTPDebug = 2;
		$mail->Host = __config()->mailer->host;
		$mail->Port = __config()->mailer->port;
		$mail->SMTPAuth = true;
		$mail->Username = __config()->mailer->username;
		$mail->Password = __config()->mailer->password;  
		$body = $message;    
		$siteName = __config()->config->APP_NAME;
		$siteEmail = __config()->email->site_email;
		$mail->SetFrom($siteEmail,"$siteName");
		$mail->AddAddress($to);
		$mail->Subject    = $subject;

		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->MsgHTML($body);
		if(!$mail->Send()) {
    		return  $mail->ErrorInfo;
		} else {
    		return true;
		}
	}

}
