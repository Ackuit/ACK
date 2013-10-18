<?php

$to =  'your@email.com'; //Add your e-mail tp receive e-mails from contact form


$from = filter_var($_POST['pt_contact_email'], FILTER_SANITIZE_EMAIL);
$headers = 'From: "'. $_POST['pt_contact_name'] .'" <'. $from .'>';

$subject = $_POST['pt_contact_subject'];

$body = "Name: " . $_POST['pt_contact_name'] ."\n";
$body .= "E-mail: " . $from ."\n";
$body .= "Subject: " . $_POST['pt_contact_subject'] ."\n";
$body .= "Message: " . $_POST['pt_contact_message'] ."\n";


if( filter_var($_POST['pt_contact_email'], FILTER_VALIDATE_EMAIL) )
{
	if (mail($to, $subject, $body, $headers, "-f " . $_POST['pt_contact_email']))
	{
		echo 'Thank you for your contact.<br>We\'ll be in touch soon.';
	}
	else
	{
	   echo 'There was a problem with sending your message.';
	}
}
else
{
   echo 'There was a problem with your e-mail (' . $_POST['pt_contact_email'] . ')';
}