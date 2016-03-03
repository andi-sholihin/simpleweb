<?php
	require_once("../set/config.php");
	
	//mengambil ID tertinggi dari tabel konten
	$a = mysql_fetch_array(mysql_query("SELECT MAX(id_konten) AS id FROM konten"));
	$id = $a['id']+1;
	
	//ambil judul
	$judul = $_POST['judul'];
	
	//ambil nama penulis
	$penulis = $_SESSION['username'];
	
	//ambil id halaman
	$id_halaman = $_POST['halaman'];
	
	//ambil konten
	$konten = stripslashes($_POST['konten']); //fungsi stripslashes untuk menghilangkan tanda garis miring
	$isi = str_replace("../foto2","foto2",$konten); //menghapus tanda ../
	$isi = str_replace("'","\'",$isi);
	
	//jenis konten
	$jenis = "artikel";
	
	//testing
	//echo "$judul <hr> $isi <hr> $id_halaman";
	
	$stat = $_POST['jenis'];
	
	if($stat=="insert"){
	
		//memulai query insert
		$query = mysql_query("INSERT INTO konten VALUES ('$id','$judul','$penulis',NOW(),'$id_halaman','$isi','$jenis')");
		
	}else if($stat=="update"){
	
		//query update
		$id_lama = $_POST['id_lama'];
		$query = mysql_query("UPDATE konten SET judul_konten = '$judul', username = '$penulis', id_halaman = '$id_halaman', isi = '$isi' WHERE id_konten = '$id_lama'");
		
	}
	if($query==1){ //jika query sukses
		header("location:index.php?hal=post&status=1");
	}else{ //jika query gagal
		header("location:index.php?hal=post&status=0");
	}
	?>
