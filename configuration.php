<?php
//Connect databse
$dbconn = mysqli_connect('localhost','root','260586','agora');
//$dbconn = mysqli_connect('icifrost.me','icifrost_agora','agora19112016!','icifrost_agora');
//Sending Mail
$from = 'kafwana@mwanta.com';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
		'Reply-To: '.$from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
?>