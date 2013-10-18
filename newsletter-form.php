<?php

$to = "your@email.com"; //Set your e-mail tp receive alerts everytime someone register in your newsletter

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
	//Write to file
	$file = 'emails.txt';
	file_put_contents($file, $_POST['email'] . ';', FILE_APPEND | LOCK_EX);

	//Add to Mailchimp

	$MP_api_key = ''; //Your MailChimp API Key: http://kb.mailchimp.com/article/where-can-i-find-my-api-key/
	$MP_list_id = ''; //How can I find my List ID? http://kb.mailchimp.com/article/how-can-i-find-my-list-id/

	if ($MP_api_key && $MP_list_id)
	{
		require_once 'libs/mailchimp/MCAPI.class.php';
		$api = new MCAPI($MP_api_key);
		$api->listSubscribe( $MP_list_id, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), '' );
	}
	
	// Send e-mail 
	$headers = "From: " . $to . "\r\n";
	     
	$subject = "New subscription";
	$body = "New user subscription: " . $_POST['email'];
	     
	mail($to, $subject, $body, $headers, "-f " . $to);

	echo 'Thank you for subscribing.';

}

else
{
	echo 'Your e-mail is not valid. Please try again.';  
}


