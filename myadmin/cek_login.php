<?php
include "../set/database.php";
$user = str_replace("\'","",$_POST[username]);
$pass = md5($_POST[password]);

$a    = mysql_query("select * from user where username = '$user' AND password = '$pass'");
$hsl  = mysql_num_rows($a);
$user = mysql_fetch_array($a);

if($hsl==1){
	session_start();
	$_SESSION['username']=$user['username'];
	$_SESSION['nama']=$user['nama'];
	$_SESSION['email']=$user['email'];
	$_SESSION['level'] = $user['level'];
	$_SESSION['last']=$user['last_login'];
header("Location:index.php");
}else{
header("Location:login.php?status=0");
};
?>