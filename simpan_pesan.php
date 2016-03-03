<?php
	require_once("set/setting.php");
	
	//mengambil nomor tertinggi dari database
	$n = mysql_fetch_array(mysql_query("SELECT MAX(id_pesan) AS id FROM pesan"));
	$no = $n['id']+1;
	
	$nama = $_POST['nama'];
	
	$email = $_POST['email'];
	
	if($_POST['url']==""){
		$url="<tidak ada>";
	}else{
		$url=$_POST['url'];
	}
	
	$pesan = $_POST['pesan'];
	
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$sql = mysql_query("INSERT INTO pesan VALUES ('$no','$nama','$email','$url','$ip',NOW(),'$pesan','no')");
	
	if($sql==1){
		echo "<br /><h1 align=center style=\"color:blue;\">Terimakasih, pesan Anda telah terkirim</h1>";
	}else{
		echo "<br /><h1 align=center style=\"color:red;\">Maaf, pesan Anda tidak terkirim. <br>
				mohon mencoba kembali..</h1>";
	}
?>