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

    // Send the email
    if (mail ($to, $subject, $body, $from)) {
      $result='<div class="alert alert-success">Your message is sent.</div>';
    } else {
      $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
  }
?>
