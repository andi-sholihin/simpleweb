<div id="tabledata" class="section">
<?php
	$que = mysql_query("SELECT * FROM halaman ORDER BY no_urut DESC");
?>
			<h2 class="ico_mug">Daftar Halaman</h2>
		    <table id="table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Judul Halaman</th>
				<th>Tipe</th>
				<th>Pilihan</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$i=1;
			while($isi = mysql_fetch_array($que)){
			?>
			<tr class="baris">
				<td class="table_check"><?php echo $i;?></td>
				<td class="table_title"><a href="?hal=edithal&id=<?php echo $isi['id_halaman']; ?>"><?php echo $isi['judul_halaman'];?></a></td>
				<td><?php echo $isi['tipe'];?></td>
				<td>
				<a href="?hal=edithal&id=<?php echo $isi['id_halaman']; ?>"><img alt="edit" src="img/edit.jpg" border="0"></a>
				&nbsp;&nbsp;
				<a href="hapus_halaman.php?id=<?php echo $isi['id_halaman']; ?>" onclick="alert('PERHATIAN !\nMenghapus halaman berarti menghapus konten\nyang berhubungan dengan halaman ini!');return confirm('Apakah Anda yakin akan menghapus halaman?');"><img src="img/cancel.jpg" alt="delete" border="0"/>
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

