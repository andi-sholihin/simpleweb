<?php
require_once("../set/config.php");

	$username = $_POST['username'];
	
	$password = md5($_POST['password']);
	
	$nama = ucwords(strtolower($_POST['nama']));
	
	$email = $_POST['email'];
	
	$level = $_POST['level'];
	
	$stat = $_POST['stat'];
	
	$idlama = isset($_POST['idlama']) ? $_POST['idlama'] : null;
	
	if($stat=="insert"){
		$query = mysql_query("INSERT INTO user VALUES ('$username','$password','$nama','$email','$level',NOW())");
	}else{
		
		if($_POST['password']!="123456"){
			$pass="password = '$password',";
		}else{
			$pass="";
		}
		
		if($level != ""){
			$lev =" level = '$level',";
		}
		
		$query = mysql_query("UPDATE user 
										SET 
											username = '$username',
											$pass
											nama = '$nama',
											$lev
											email = '$email'
										WHERE
											username = '$idlama'
										");
	}
	
	//mengubah variabel sesi
	if($_SESSION['username']==$idlama){
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $nama;
		$_SESSION['email']=$email;
		$_SESSION['level'] = $level;
	}
	
	header("location:index.php?hal=tabeladmin");
?>
