<?php
	//panggil pengaturan global
	include "../set/config.php";
	
	//ambil id konten
	$id = $_GET['id'];
	
	//lakukan query hapus konten
	$del = mysql_query("DELETE FROM konten WHERE id_konten = '$id'");
    header("location:index.php?hal=tabelpost");
?>