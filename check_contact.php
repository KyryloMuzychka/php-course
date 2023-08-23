<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);

unset($_SESSION['error_user_name']);
unset($_SESSION['error_email']);
unset($_SESSION['error_subject']);
unset($_SESSION['error_message']);



function redirect()
{
  header('Location: contact.php');
  exit();
}

$username = htmlspecialchars(trim($_POST['username']));
$from = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['username'] = $username;
$_SESSION['email'] = $from;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;

if (strlen($username) <= 1) {
  $_SESSION['error_user_name'] = "Enter the correct name";
} else if (strlen($from) <= 5 || !strpos($from, "@")) {
  $_SESSION['error_email'] = "Enter the correct email";
} else if (strlen($subject) <= 5) {
  $_SESSION['error_subject'] = "Enter the subject (5 chars)";
} else if (strlen($message) <= 15) {
  $_SESSION['error_message'] = "Enter the message (15 chars)";
} else {
  $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
  $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
  mail("muznata2015@gmail.com", $subject, $message, $headers);
  $_SESSION['success_mail'] = "You sent the mail";
}

redirect();

