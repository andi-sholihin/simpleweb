<?php
	/*
	* Setting koneksi database
	* Simple Web
	* Generate by Andi Sholihin
	* http://www.sholihin.com
	*/
	
	//error_reporting(0);//agar tidak menampilkan pesan error
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	= "simpleweb";
	
	$connect = mysql_connect($host,$user,$pass);
	$sukses = mysql_select_db($db,$connect);
	
	
?>