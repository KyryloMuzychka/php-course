<?php
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
//print_r($_POST);

if (trim($name) == "") {
  echo "You have not enter the username";
} else if (strlen(trim($name)) <= 1) {
  echo "Don't exist!";
} else if (trim($name) == "" || trim($email) == "" || trim($pass) == "" || trim($_POST['message'] == "")) {
  echo "Enter all data!";
} else {
  $_POST['password'] = md5($pass);
  //echo "<h1>All data</h1><p>$email  /  $pass)</p>";
  foreach ($_POST as $key => $value) {
    echo "<p>$value</p><br>";
  }
  header('Location: about.php');
  exit;
}
