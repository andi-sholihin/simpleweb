<?php
require_once("../set/database.php");
session_start();

$user = $_SESSION['username'];

	unset($_SESSION['username']);
	unset($_SESSION['nama']);
	unset($_SESSION['email']);
	unset($_SESSION['level']);
	unset($_SESSION['last']);
	
mysql_query("UPDATE user SET last_login = NOW() WHERE username = '$user'");

header("location:login.php");
?>