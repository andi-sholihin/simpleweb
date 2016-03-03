<?php
	//panggil pengaturan global
	include "../set/config.php";
	
	//ambil id konten
	$id = $_GET['id'];
	
	//lakukan query hapus konten
	$del = mysql_query("DELETE FROM pesan WHERE id_pesan = '$id'");

if($del==1){
	echo "<br /><h1 align=center style=\"color:blue;\">Pesan telah dihapus</h1>";
}else{
	echo "<br /><h1 align=center style=\"color:red;\">Ada Error saat menghapus pesan!</h1>";
}
?>