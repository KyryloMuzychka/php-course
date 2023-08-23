<?php
session_start();
$title = "Contacts";
require "./blocks/header.php";
?>

<div class="text-success"><?=$_SESSION['success_mail']?></div>

<form action="check_contact.php" method="post">
  <input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="Enter the name" class="form-control mt-2">
  <div class="text-danger"><?=$_SESSION['error_user_name']?></div>
  <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Enter the email" class="form-control mt-2">
  <div class="text-danger"><?=$_SESSION['error_email']?></div>
  <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Enter the subject" class="form-control mt-2">
  <div class="text-danger"><?=$_SESSION['error_subject']?></div>
  <textarea name="message" placeholder="Your message" class="form-control mt-2"><?=$_SESSION['message']?></textarea>
  <div class="text-danger"><?=$_SESSION['error_message']?></div>
  <button type="submit" class="btn btn-success mt-2">Submit</button>
</form>

<?php
require "./blocks/footer.php";
?>