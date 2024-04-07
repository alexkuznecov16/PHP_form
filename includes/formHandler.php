<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

// if (isset($_POST["submit"])) {};

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phonenumber = htmlspecialchars($_POST["phonenumber"]);
  $message = htmlspecialchars($_POST["message"]);
  $subject = htmlspecialchars('Website question');
  $toEmail = htmlspecialchars('alexander.kuznecov16@gmail.com');

  $fullMessage = 'Message from ' . $name . '\n my email: ' . $email . ' my phone: ' . $phonenumber . '\n' . $message;

  // Correct concatenation
	$mailHeader = 'From: ' . $email;

  if (mail($toEmail, $subject, $fullMessage, $mailHeader)) {
    sleep(2);
    header("Location: ../index.php");
  } else {
    echo 'The form has not been sent!';
    sleep(2);
    header("Location: ../index.php");
  }

  exit(); // Ensure that script execution stops after redirection
}