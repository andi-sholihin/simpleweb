<?php
	include "set/setting.php";
	
	//mengambil nilai page dari address bar, fungsi str_replace untuk mencegah SQL injection
	$page = isset($_GET['page']) ? $_GET['page'] : '';
	$page = str_replace("\'","",$page);
		
	if($page=="" || $page =="home"){
		$page = 1; 
		include "beranda.php";
	}else{ //query untuk memanggil artikel dimulai dari sini
	
		include "artikel.php";
		
	}
?>