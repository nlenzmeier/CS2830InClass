<?php
session_start();
$username = 'test';
$password = 'pass';

$random1 = 'key1';
$random2 = 'key2';

$hash = md5($random1.$pass.$random2); 

$self = $_SERVER['REQUEST_URI'];

//Log the user out
if(isset($_GET['logout']))
{
  unset($_SESSION['login']);
}

if (isset($_POST['submit'])) {
  if ($_POST['username'] == $username && $_POST['password'] == $password){
    //IF USERNAME AND PASSWORD ARE CORRECT SET THE LOG-IN SESSION
    $_SESSION["login"] = $hash;
    $_SESSION["username"] = $username;
    header("Location: coupon.php");
    exit;
  } 
}
?>