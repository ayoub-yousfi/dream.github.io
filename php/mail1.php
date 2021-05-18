<?php

// Jquery validation in custom.js

$name = '';
$email = '';
$msg = '';
$tele='';
$subject = "Message from DREAMNMOTION Site"; 

if($_POST) {
	// collect all input and trim to remove leading and trailing whitespaces
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$msg = trim($_POST['message']);  
	$tele=trim($_POST['telephone'])
	$fichier=$_POST['file'];
	$ip = $_SERVER['REMOTE_ADDR'];
	/*test file */
	$maxsize=500000;
    $validext=array('.pdf','.doc','.jpg','.png','.jpeg','.txt');
    if($_FILES['file']['error']>0){
            echo"error de transfer";
            die;
}
    $filesize=$_FILES['file']['size'];
    if($filesize>$maxsize){
         echo "le fichier est trop gros !!";
            die;
}
    $filename=$_FILES['file']['name'];
    $fileext=".".strtolower(substr(strrchr($filename,'.'),1));
    if(!in_array($fileext,$validext)){
        echo" changez le type de fichier ";
            die;
}
  
	/* Change Here Your Email Address*/
	$to = "ayoub-yousfi@live.com";

	// Prepare message
	$message = "You have received email from: ".$name."<br/>"." email : ".$email. "<br>"." telephone: ".$tele."<br />";
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