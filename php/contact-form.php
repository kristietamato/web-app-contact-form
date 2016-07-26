$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$human = intval($_POST['human']);
$from = 'Simple Contact Form'; 
$to = 'kristietamato@gmail.com'; 
$subject = 'Message from Simple Contact Form';
$body = "From: $name \n E-Mail: $email \n Message: \n $message";

if (!$_POST['name']) {
  $errName = 'Please enter your name.';
}
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errEmail = 'Please enter a valid email address.';
}
if ($human !== 5) {
  $errHuman = 'Your anti-spam is incorrect.';
}