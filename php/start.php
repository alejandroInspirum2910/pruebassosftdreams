<?php
session_start();

$_SESSION['uuid']=$_POST["uuid"];
$_SESSION['login_method']=$_POST["login_method"];
$_SESSION['facebook_id']=$_POST["facebook_id"];
$_SESSION['mail_address']=$_POST["mail_address"];
$_SESSION['name']=$_POST["name"];
$_SESSION['registration_date']=$_POST["registration_date"];
$_SESSION['credits_balance']=$_POST["credits_balance"];
$_SESSION['purchased_credits']=$_POST["purchased_credits"];
$_SESSION['used_credits']=$_POST["used_credits"];
$_SESSION['total_pictures']=$_POST["total_pictures"];
$_SESSION['has_rewards']=$_POST["has_rewards"];
$_SESSION['is_enabled']=$_POST["is_enabled"];
$_SESSION['facebook_id']=$_POST["facebook_id"];
$_SESSION['short_name']=$_POST["short_name"];

$_SESSION['LAST_ACTIVITY'] = time(); 

header('Location: '.'../mecanica.php');