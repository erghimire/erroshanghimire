<?php
$to = "iamroshanghimire@gmail.com"; 
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];

$headers = "From: " .  $email;
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";


if(isset($_POST['submit'])){
$subject  = "New email from your website";

$message   = "Name: " . $name;
$message  .= "Email: " . $email;
$message  .= "Message: " . $text;

mail($to,$subject,$message,$headers);   
echo "Your mail has been sent.";
}


?>