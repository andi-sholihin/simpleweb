<?php
	//panggil pengaturan global
	include "../set/config.php";
	
	//ambil id konten
	$id = $_GET['id'];
	
	//lakukan query hapus konten
	$del = mysql_query("DELETE FROM halaman WHERE id_halaman = '$id'");
	$hapus = mysql_query("DELETE FROM konten WHERE id_halaman = '$id'");

    header("location:index.php?hal=tabelhal");
?>