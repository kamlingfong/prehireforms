<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$companyname = $_POST['company name'];
$message = $_POST['message'];
$formcontent=" From: $fname $lname \n Phone: $phone \n Company Name: $companyname \n Email: $email \n Message: $message";
$recipient = "lisa@prehireforms.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
