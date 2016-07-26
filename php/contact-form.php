<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Simple Contact Form';
    $to = 'kristietamato@gmail.com';
    $subject = 'Message from contactform.tamato.org';
    $body = "From: $name \n E-Mail: $email \n Message: \n $message";

    // validate inputs
    if (!$_POST['name']) {
      $errName = 'Please enter your name.';
    }
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address.';
    }
    if (!$_POST['message']) {
      $errMessage = 'Please enter a message';
    }
    if ($human !== 5) {
      $errHuman = 'Your anti-spam is incorrect.';
    }
    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
      if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Your message is sent.</div>';
      } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
      }
    }
  }
?>
