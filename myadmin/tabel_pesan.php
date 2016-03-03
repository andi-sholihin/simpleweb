<!-- modal dialog-->
<link rel="stylesheet" href="../lib/box/pesan.css" />
<script type="text/javascript" src="../lib/box/tinybox.js"></script>
<script>
function ref(){
	document.location.href="<?php echo $url_web;?>/myadmin/?hal=tabelpesan";
}
</script>

<div id="tabledata" class="section">
<?php
	$que = mysql_query("SELECT * FROM pesan ORDER BY id_pesan DESC");
?>
			<h2 class="ico_mug">Daftar Pesan Masuk</h2>
		    <table id="table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Nama Pengirim</th>
				<th>Email</th>
				<th>Alamat Web</th>
				<th style="width:30px;">IP Address</th>
				<th style="width:120px;">Waktu</th>
				<th style="width:50px;">Pilihan</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$i=1;
			while($isi = mysql_fetch_array($que)){
				
				if($isi['dibaca']=="no"){
					$nama="<b style=\"color:blue;\">$isi[pengirim]</b>";
				}else{
					$nama="$isi[pengirim]";
				}
				
			?>
			<tr class="baris">
				<td class="table_check"><?php echo $i;?></td>
				<td class="table_title"><a href="#" onclick="TINY.box.show({iframe:'<?php echo $url_web."/myadmin/"; ?>lihat_pesan.php?id=<?php echo  $isi['id_pesan'];?>',boxid:'frameless',width:750,height:450,fixed:false,maskopacity:40,closejs:function(){ref()}})"><?php echo $nama; ?></a></td>
				<td><?php echo $isi['email'];?></td>
				<td><a href="<?php echo $isi['website'];?>" target="_blank"><?php echo $isi['website'];?></a></td>
				<td class="table_accept"><?php echo $isi['ip'];?></td>
				<td class="table_date"><?php echo date("d M Y H:i:s", strtotime($isi['waktu'])); ?></td>
				<td>
				<a href="#" onclick="TINY.box.show({iframe:'<?php echo $url_web."/myadmin/"; ?>lihat_pesan.php?id=<?php echo  $isi['id_pesan'];?>',boxid:'frameless',width:750,height:450,fixed:false,maskopacity:40,closejs:function(){ref()}})">
					<img src="img/rinci.png" alt="delete" border="0"/></a> &nbsp; <a href="hapus_pesan.php?id=<?php echo $isi['id_pesan']; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus pesan?');">
					<img src="img/cancel.jpg" alt="delete" border="0"/>
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

