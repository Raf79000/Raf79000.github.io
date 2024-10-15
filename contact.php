<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate and send email (or store in a database)
  $to = "your-email@example.com";  // Replace with your email
  $subject = "Portfolio Contact from " . $name;
  $body = "You received a message from $name ($email):\n\n$message";

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message.";
  }
}
?>

