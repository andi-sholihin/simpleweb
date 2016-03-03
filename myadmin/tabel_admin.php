<div id="tabledata" class="section">
<?php
	$que = mysql_query("SELECT * FROM user ORDER BY nama");
?>
			<h2 class="ico_mug">Daftar Administrator </h2>
		    <table id="table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Nama Administrator</th>
				<th>Username</th>
				<th>Email</th>
				<th>Level</th>
				<th>Login Terakhir</th>
				<?php if($_SESSION['level']=="admin"){?>
				<th>Pilihan</th>
				<?php } ?>
			</tr>
			</thead>
			<tbody>
			<?php
			$i=1;
			while($isi = mysql_fetch_array($que)){
			?>
			<tr class="baris">
				<td class="table_check"><?php echo $i;?></td>
				<td class="table_title"><?php echo $isi['nama'];?></td>
				<td class="table_title"><?php echo $isi['username'];?></td>
				<td><?php echo $isi['email']; ?></td>
				<td><?php echo $isi['level']; ?></td>
				<td><?php echo $isi['last_login']; ?></td>
				<?php if($_SESSION['level']=="admin"){?>
				<td>
				<a href="?hal=editadmin&id=<?php echo $isi['username']; ?>"><img alt="edit" src="img/edit.jpg" border="0"></a>
				&nbsp;&nbsp;
				<a href="hapus_admin.php?id=<?php echo $isi['username']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus Administrator?');"><img src="img/cancel.jpg" alt="delete" border="0"/>
				</td>
				<?php } ?>
			</tr>
			
			<?php 
				$i++;
				} 
			?>
			</tbody>
		</table>
</div>
<!-- end #tabledata -->

