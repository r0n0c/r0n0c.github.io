<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Send email
  $to = "conor@ronoc.net"; // Replace with your email address
  $subject = "New contact form submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message;

  mail($to, $subject, $body);

  // Redirect to a thank you page
  header("Location: thank-you.html");
  exit;
}
?>
