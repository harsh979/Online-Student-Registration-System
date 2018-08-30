<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../PHPMailerAutoload.php';

$username  = 'test';

$mail = new PHPMailer(); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP



  $mail->Host       = "smtp.office365.com"; // SMTP server
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication

  $mail->Port       = 587;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "alerts@suppliertracker.com"; // SMTP account username
  $mail->Password   = "2117Cl!ff55112";        // SMTP account password
  $mail->AddAddress('akramalibikaner@gmail.com', 'Akram Ali');
  $mail->SetFrom('alerts@suppliertracker.com', 'alerts');
  //$mail->AddReplyTo('akramalibikaner@gmail.com', 'Akram Ali');
  $mail->Subject = 'User name of your login';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML("your username is ".$username."");
 //$mail->AddAttachment('images/phpmailer.gif');      // attachment
  //$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment

  if($mail->Send()) {
echo 'Message sent.';
// echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

else 
    {

echo 'Mailer Error: ' . $mail->ErrorInfo;
exit;
}

die;

?>
