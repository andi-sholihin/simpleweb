<div id="tabledata" class="section">
<?php
	$que = mysql_query("SELECT * FROM widget ORDER BY id_widget");
?>
			<h2 class="ico_mug">Daftar Script Widget </h2>
		    <table id="table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Judul Widget</th>
				<th>Script Widget </th>
				<th>Pilihan</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$i=1;
			while($isi = mysql_fetch_array($que)){
				$script = substr(htmlentities($isi['script']),0,70);
			?>
			<tr class="baris">
				<td class="table_check"><?php echo $i;?></td>
				<td class="table_title"><a href="?hal=editwidget&id=<?php echo $isi['id_widget']; ?>"><?php echo $isi['judul_widget'];?></a></td>
				<td style="font-family:'Courier New', Courier, monospace; font-style:italic"><?php echo "$script ..."; ?></td>
				<td>
				<a href="?hal=editwidget&id=<?php echo $isi['id_widget']; ?>"><img alt="edit" src="img/edit.jpg" border="0"></a>
				&nbsp;&nbsp;
				<a href="hapus_widget.php?id=<?php echo $isi['id_widget']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus Widget?');"><img src="img/cancel.jpg" alt="delete" border="0"/>
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

