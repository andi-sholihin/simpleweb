<?php
	//panggil pengaturan global
	include "../set/config.php";
	
	//ambil id konten
	$id = $_GET['id'];
	
	//lakukan query hapus konten
	$del = mysql_query("DELETE FROM pesan WHERE id_pesan = '$id'");
?>

<script>document.location.href="index.php?hal=tabelpesan"</script>
