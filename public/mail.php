<?php
$email = $_POST['email'];
$formcontent="From: $name \n Message: $message";
$recipient = "hello@actioplus.co";
$subject = "Contact Form Submitted";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>