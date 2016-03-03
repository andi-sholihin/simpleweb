<?php
	//panggil pengaturan global
	require_once("../set/config.php");
	
	//ambil id konten
	$id = $_GET['id'];
	
	if($_SESSION['level']=="admin" && $_SESSION['username'] != $id){
	//lakukan query hapus konten
		$del = mysql_query("DELETE FROM user WHERE username = '$id'");
	}else{
		echo "<script>alert('Maaf, Permintaan ditolak!')</script>";
	}

	header("location:index.php?hal=tabeladmin");
?>