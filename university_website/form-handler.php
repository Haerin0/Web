<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emai_form = 'parkhaerin@intuworks.co.kr';
$email_subject = 'New Form Submission';
$email_body = "User Name:$name.\n".
              "User Email:$visitor_email.\n".
              "Subject:$message.\n";

$to = 'parkhaerin@gmail.com';
$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subjet, $email_body, $headers);

header("Location: contact.html")

?>