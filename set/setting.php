<?php
	require_once("global.php");
	
	//jika koneksi ke database gagal
	if(!$sukses){
		// echo "<script>document.location.href=\"error.php\"</script>";
		header("location:error.php");
	}
	
	//jika mode maintenance diaktifkan
	if($maintenance=="yes"){
		// echo "<script>document.location.href=\"maintenance.php\"</script>";
		header("location:maintenance.php");
	}
?>