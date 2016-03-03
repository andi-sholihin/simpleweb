<?php
$h = mysql_query("SELECT * FROM halaman WHERE id_halaman = '$page'");
$row = mysql_num_rows($h);
		
	if($row==1){ //cek apakah halaman yang diminta tersedia

	$q = mysql_query("SELECT * FROM konten WHERE id_halaman = '$page' AND jenis <> 'homebox' ORDER BY id_konten");
			
		echo "<div id=\"left\">";
		
		while($konten=mysql_fetch_array($q)){

			echo "<h1>$konten[judul_konten]</h1>
						<br />
						$konten[isi]

						<br /><br />

					";
				}

			echo "</div>";
			
	}else{
		
			echo "<h2>Halaman tidak tersedia!</h2>";
		
		}
		
	require_once("widget.php");
	
?>