<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}
if (isset($_POST['submit'])) {
  $name = strip_tags(htmlspecialchars($_POST['name']));
  $email = strip_tags(htmlspecialchars($_POST['email']));
  $subject = strip_tags(htmlspecialchars($_POST['subject']));
  $message = strip_tags(htmlspecialchars($_POST['message']));
}

$to = 'prithirpara103@gmail.com'; // Change this email to your //
$from    = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
// $subject = "$subject:  $name";
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
// $headers .= 'From: $name.<$email>' . "\r\n";

//$header .= "Reply-To: $email";	

if(!mail($to, $subject, $message, $header))
  http_response_code(200);
?>
