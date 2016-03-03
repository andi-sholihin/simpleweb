<?php
	//panggil pengaturan global
	include "../set/config.php";
	
	//ambil id konten
	$id = $_GET['id'];
	
	//lakukan query hapus konten
	$del = mysql_query("DELETE FROM widget WHERE id_widget = '$id'");

    header("location:index.php?hal=tabelwidget");
?>
