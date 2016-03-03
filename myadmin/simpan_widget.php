<?php
	require_once("../set/config.php");
	
	//mengambil ID tertinggi dari tabel konten
	$a = mysql_fetch_array(mysql_query("SELECT MAX(id_widget) AS id FROM widget"));
	$id = $a['id']+1;
	
	//ambil ID lama
	$idlama = $_POST['idlama'];
	
	//ambil judul
	$judul = $_POST['judul'];
	
	//ambil script
	$konten = stripslashes($_POST['script']); //fungsi stripslashes untuk menghilangkan tanda garis miring
	$konten = str_replace("'","\'",$konten);
	
	$stat = $_POST['query'];
	
	if($stat=="insert"){
	
		//memulai query insert
		$query = mysql_query("INSERT INTO widget VALUES ('$id','$judul','$konten')");
		
	}else if($stat=="update"){
	
		//query update
		$query = mysql_query("UPDATE widget SET judul_widget = '$judul', script = '$konten' WHERE id_widget='$idlama'");

	}
	if($query==1){ //jika query sukses
	?>
		<script>document.location.href="index.php?hal=inputwidget&status=1"</script>
	<?php
	}else{ //jika query gagal
	
	?>	
  	<script>document.location.href="index.php?hal=inputwidget&status=0"</script>
	<?php
	}
	?>
