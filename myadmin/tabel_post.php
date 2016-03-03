<div id="tabledata" class="section">
<?php
	$que = mysql_query("SELECT * FROM konten WHERE jenis='artikel' ORDER BY id_konten DESC");
?>
			<h2 class="ico_mug">Daftar Konten</h2>
		    <table id="table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Judul Konten</th>
				<th>Tgl Terbit</th>
				<th>Penulis</th>
				<th>Halaman</th>
				<th>Pilihan</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$i=1;
			while($isi = mysql_fetch_array($que)){
				$hal = mysql_fetch_array(mysql_query("SELECT judul_halaman FROM halaman WHERE id_halaman='$isi[id_halaman]'"));
				$p = mysql_fetch_array(mysql_query("SELECT nama FROM user WHERE username='$isi[username]'"));
			?>
			<tr class="baris">
				<td class="table_check"><?php echo $i;?></td>
				<td class="table_title"><a href="?hal=editpost&id=<?php echo $isi['id_konten']; ?>"><?php echo $isi['judul_konten'];?></a></td>
				<td><?php echo $isi['tgl_terbit'];?></td>
				<td class="table_title"><a href="#"><?php echo $p['nama'];?></a></td>
				<td><?php echo $hal['judul_halaman'];?></td>
				<td>
				<a href="?hal=editpost&id=<?php echo $isi['id_konten']; ?>"><img alt="edit" src="img/edit.jpg" border="0"></a>
				&nbsp;&nbsp;
				<a href="hapus_post.php?id=<?php echo $isi['id_konten']; ?>" onclick="return confirm('Anda yakin akan menghapus konten?');"><img src="img/cancel.jpg" alt="delete" border="0"/>
				</td>
			</tr>
			
			<?php 
				$i++;
				} 
			?>
			</tbody>
		</table>
</div>
<!-- end #tabledata -->

