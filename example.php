<?php

$title = "Example";
require "./blocks/header.php";

session_start();
define("MY_AGE", 24);
echo MY_AGE . "<br>";
echo "<b>h</b>hi<br>";
echo "'string'<br>";
echo '"sa"<br>';
echo "\"sa\"<br>";
$number = 5;
$num = 45;
echo 'var ' . $number . ' ' . $num . '<br>';
echo md5("password") . '<br>';
echo md5("password");
if ($number == $num) {
  echo "<br>yeah";
} else {
  echo "<br>number = " . $number;
  echo "<br>num = $num<br>";
}
$x = 5;
switch ($x) {
  case 5:
    echo "5";
    break;
  case 6:
    echo "6";
    break;
  default:
    echo "none";
    break;
}

$nums = array(4, 5, 6, 7, 8, 9, -345);
echo "<br>$nums[0]<br>";

$list = ["age" => 50, "name" => "Alex", "hobby" => "Football"];
echo $list["name"];

$matrix = [
  [5, 6, 7],
  [4, 2, 8],
  [2, 1, 5]
];


echo $matrix[0][2];

$length = count($nums);

for ($i = 0; $i < $length; $i++) {
  echo $nums[$i] . "<br>";
}

foreach ($list as $item => $value) {
  echo "<br> key: $item Value: $value";
}

foreach ($nums as $item) {
  echo "<br>Value: $item";
}

function info($x, $y)
{
  $res = $x + $y;
  return $res;
}

$r = info(4, 5);
echo "<br>" . $r . "<br>";

function click()
{
  static $count;
  $count++;
  echo $count . "<br>";
}

function globalVar()
{
  global $r;
  $r = 0;
  echo $r . "<br>";
}

click();
click();
click();


echo date('m-l H:i:s') . '<br>';
echo date('m-l H:i:s', time() + 1000) . '<br>';
echo date('m-d H:i:s', strtotime("+3 Hour")) . "<br>";
echo date('m-d H:i:s', strtotime("last Monday")) . "<br>";
echo time() . '<br>';
$lis = [7, 5, 4, 3, 1, 2, 23];
unset($lis[1]);
$lis = array_values($lis);
sort($lis);
rsort($lis);
if (in_array(3, $lis) == "") {
  echo "Not Found!";
} else {
  echo "Found<br>";
}
$arr = array_slice($lis, 2, count($lis));
var_dump($arr);
echo "<br>";
print_r($lis);
shuffle($lis);
echo "<br>";
$arr_1 = [5, 7];
$arr_2 = [6, 8, 9];
$arr_3 = array_merge($arr_1, $arr_2);
print_r($arr_3);
echo "<br>";

$x = 4;
echo gettype($x);
echo "<br>";

echo is_numeric($x);
echo "<br>";

echo is_integer($x);
echo "<br>";


$str = "Example";
echo strpos($str, "am");
echo "<br>";

$words = "john,bob,alex";
$arr_words = explode(",", $words);
echo "<br>";
print_r($arr_words);
echo "<br>";

echo implode(" | ", $arr_words);

//$file = fopen("text.txt", "w");
$filesname = "text.txt";

$file = fopen($filesname, "a");

fwrite($file, "hello\nhi\n");

fclose($file);

$filer = fopen($filesname, "r");

$content = fread($filer, filesize($filesname));

file_put_contents("a.txt", "Example\nhello");
echo '<br>' . file_get_contents("a.txt") . "<br>";
echo file_exists("a.txt");
//rename("a.txt", "new_name.txt");

echo "<br>";

unlink("new_name.txt");

echo "<br>";

echo fileperms(__FILE__);
chmod(__FILE__, 0777);

echo "<br>";

echo "<pre>" . $content . "</pre>";

fclose($filer);

//phpinfo();
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

echo $_SERVER['HTTPS'];
echo $_SERVER['HTTP_HOST'] . ' - ' . $_SERVER['REQUEST_URI'] . '<br>';
echo $_SERVER['HTTP_USER_AGENT'];

if ($_GET['source'] != "") {
  $link = explode('?source=', $_SERVER['REQUEST_URI']);
  $redirect = "http://" . $_SERVER['HTTP_HOST'] . $link[0];

  header('HTTP/1.1 301 Moved Premanently');
  header('Location: ' . $redirect);
  exit();
}

$message = "message_php";
$to = "muznata2015@gmail.com";
$from = "kyryll2016@gmail.com";
$subject = "php";

$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);

$user_name = "Alex";
// setcookie("user_name", "$user_name", time() + 180);
// echo "<br>";
// echo "<br>";
// print_r($_COOKIE);
// echo "<br>";
// echo "<br>";

// echo $_COOKIE['user_name'];
// echo "<br>";
// echo "<br>";

$_SESSION['user_name'] = $user_name;

unset($_SESSION['user_name']);
session_destroy();

if ($_SESSION['user_name'] == "Alex") {
  echo "<br>" . "all is good" . "<br>";
}

require "./blocks/footer.php";
