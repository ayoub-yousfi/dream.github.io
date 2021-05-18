<?php

// Jquery validation in custom.js

$name = '';
$email = '';
$age = '';
$tele='';
$msg='';
$subject = "Message from DREAMNMOTION Site"; 

if($_POST) {
	// collect all input and trim to remove leading and trailing whitespaces
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
    $age= trim($_POST['age']); 
    $msg=trim($_POST['message']) 
	$tele=trim($_POST['phone']);
	$ip = $_SERVER['REMOTE_ADDR'];

  
	/* Change Here Your Email Address*/
	$to = "ayoub-yousfi@live.com";

	// Prepare message
	$message = "You have received email from: ".$name."<br/>"." email : ".$email. "<br>"." telephone: ".$tele."<br />"." age: ".$age."<br>";
	$message .= "Message: <br />".$msg."<br /><br />";
	$message .= "IP: ".$ip."<br />";
	$headers = "From: $email \n";
	$headers .= "Reply-To: $email \n";
	$headers .= "MIME-Version: 1.0 \n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1 \n";

	// Email Sent
	if(mail($to, $subject,$message, $headers)){
		echo "ok";
	}
	// Error Message
	else{ 
		echo "ok";
	}
  
}

?>