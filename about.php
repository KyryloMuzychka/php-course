<?php
$title = "About Us";
require "./blocks/header.php";
?>
<!--<form action="check_post.php" method="post"> -->
<form action="check_post.php" method="post">
  <input type="text" name="username" placeholder="Enter the name" class="form-control"><br>
  <input type="email" name="email" placeholder="Enter the email" class="form-control"><br>
  <input type="password" name="password" placeholder="Enter the password" class="form-control"><br>
  <textarea name="message" class="form-control" placeholder="Enter the message"></textarea><br>
  <input type="submit" value="Send" class="btn btn-success"><br>
</form>


<?php
require "./blocks/footer.php";
?>