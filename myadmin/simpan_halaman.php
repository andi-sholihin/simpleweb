<?php
	require_once("../set/config.php");
	
	$status = $_POST['status'];
	
	$judul = ucwords(strtolower($_POST['judul']));
	
	$tipe = strtolower($_POST['tipe']);
	
	$id = strtolower($_POST['id']);
	
	if($status=="insert"){
	
		$urut = mysql_fetch_array(mysql_query("SELECT MAX(no_urut) AS no FROM halaman"));
		
		$no = $urut['no']+1;
		
		$hajar = mysql_query("INSERT INTO halaman VALUES ('','$judul','$tipe','$no') ");
		
	}else{
		
		$id_lama = $_POST['idlama'];
		
		$hajar = mysql_query("UPDATE halaman SET judul_halaman = '$judul', tipe = '$tipe' WHERE id_halaman = '$id_lama'");
	}
	header("location:index.php?hal=tabelhal")
?>