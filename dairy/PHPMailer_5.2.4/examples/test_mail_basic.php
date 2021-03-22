<?php
error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');

require_once('../class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = file_get_contents('contents.html');
//$body             = preg_replace('/[\]/','',$body);

$body = "<h1>Welcome</h1>";

$mail->SetFrom('mailer@quickcabs.in', 'Info');
$mail->AddReplyTo("mailer@quickcabs.in","Info");

$address = "sanjeev.kumar@ehorizons.in";
$mail->AddAddress($address, "Sanjeev Kumar");

$mail->Subject    = "PHPMailer Test Subject via mail(), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>
