<?php
$name = $_post['name'];
$visitor_email = $-post['email'];
$subject = $_post['subject'];
$message = $-post['message'];

$email_from = 'www.stghs.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n". 
$email_body = "User Email: $visitor_email.\n". 
$email_body = "Subject: $subject.\n". 
$email_body = "User Message: $message.\n";

$to = 'stghsndkm@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Replay-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");
?>
