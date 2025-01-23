<?php
$name = $_POST['name']; // Corrected from $_post to $_POST
$visitor_email = $_POST['email']; // Corrected from $-post to $_POST
$subject = $_POST['subject']; // Corrected from $_post to $_POST
$message = $_POST['message']; // Corrected from $-post to $_POST

$email_from = 'www.stghs.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'stghsndkm@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n"; // Corrected "Replay-To" to "Reply-To"

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html"); // Added space between Location: and the file name
?>
