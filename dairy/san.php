<?php
//error_reporting(E_STRICT);
error_reporting(E_ALL);
date_default_timezone_set('Asia/Calcutta');

$subject = "BookNow -- ";
$body = "BookNow -- ";

$phone = "9999999999";
$subject = "BookNow -- ".$phone;
$body = "<b>BookNow</b> -- ".$phone;

require_once('PHPMailer_5.2.4/class.phpmailer.php');

$mail             = new PHPMailer(true);                // defaults to using php "mail()"
$mail->IsSMTP();
$mail->SMTPDebug  = 2;                                  // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                               // enable SMTP authentication
$mail->SMTPSecure = "ssl";                              // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";                   // sets GMAIL as the SMTP server
$mail->Port       = 465;                                // set the SMTP port for the GMAIL server
$mail->Username   = "dairylacwebmail@gmail.com";        // GMAIL username
$mail->Password   = "Delhi8008";                        // GMAIL password

$mail->SetFrom('mailer@quickcabs.in', 'Info');
$mail->AddReplyTo("mailer@quickcabs.in","Info");

//$mail->AddAddress("sandeep@quickcabs.in", "Sandeep");
//$mail->AddAddress("khushdeep@dairylac.com", "Khush Deep");

$mail->AddAddress("sanjeev.kumar@ehorizons.in", "Sanjeev");
$mail->AddAddress("noor.alam@parahittech.com", "Noor");

$mail->Subject    = $subject;

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
?>