<?php
	include "../set/config.php";
	
	$pengaturan = mysql_query("SELECT * FROM setting WHERE id_setting = 1");
	$exist      = mysql_num_rows($pengaturan);
	
	if ($exist > 0) {
		$atur = mysql_query(
			"UPDATE setting 
				SET 
					judul_web = '$_POST[judul]',
					deskripsi_web = '$_POST[deskripsi]',
					email_admin = '$_POST[email]',
					url_web = '$_POST[url]',
					telpon = '$_POST[telpon]',
					alamat = '$_POST[alamat]',
					maintenance = '$_POST[maintenance]',
					tgl_setting = NOW()
				WHERE id_setting = 1"
		);
	} else {
		$atur = mysql_query(
			"INSERT INTO setting
				(id_setting, judul_web, deskripsi_web, email_admin, url_web, telpon, alamat, maintenance, tgl_setting)
			VALUES
				(1, '$_POST[judul]', '$_POST[deskripsi]', '$_POST[email]', '$_POST[url]', '$_POST[telpon]',
				'$_POST[alamat]', '$_POST[maintenance]', NOW())
			"
		);
	}


	if($atur==1){ //jika query sukses
		header("location:index.php?hal=set&status=1");
	}else{ //jika query gagal
		header("location:index.php?hal=set&status=0");
	}
	?>
