<?php 


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "newnicker@yandex.ru";
$subject = "Contact Form";
$mailheader  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";


?>