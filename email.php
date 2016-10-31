<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
$name = $_REQUEST['nom'] ;
$email = $_REQUEST['email'] ;
$objet = $_REQUEST['objet'] ;
$message = $_REQUEST['message'] ;

// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("PHPMailer/PHPMailerAutoload.php");



$mail = new PHPMailer();

// set mailer to use SMTP
$mail->IsSMTP();

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication

// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@bradm.inmotiontesting.com
// pass: password
$mail->Username = "projet.iutbm@gmail.com";  // SMTP username
$mail->Password = "lafamillepirate"; // SMTP password
$mail->SMTPSecure = 'ssl';
$mail->Port= '465';
// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From = $email;

// below we want to set the email address we will be sending our email to.
$mail->AddAddress("projet.iutbm@gmail.com", "Projet Tuteuré");

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = $objet;

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->FromName = $name;
$mail->Body    = $message;
$mail->AltBody = $message;


if(!$mail->Send())
{
   header("Location: contact.html?send=false");
}


header("Location: contact.html?send=true");

?>
