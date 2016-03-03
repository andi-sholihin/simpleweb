<link href="css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
	.aa{
		border:none;
		font-family:"Times New Roman", Times, serif;
		font-size:16px;
		color:#0000FF;
	}
</style>

<?php
	require_once("../set/config.php");
	
	$id = $_GET['id'];
	
	$isi = mysql_fetch_array(mysql_query("SELECT * FROM pesan WHERE id_pesan = '$id' "));
	
	$dibaca = mysql_query("UPDATE pesan SET dibaca='yes' WHERE id_pesan = '$id'");
?>

<script>
function apa(){
var a = confirm('Anda yakin akan menghapus pesan <?php echo $isi['id_pesan'];?>?');
if(a==true){
	document.location.href="hapus_pesan2.php?id=<?php echo $isi['id_pesan'];?>"
	}
}
</script>

<div class="section">

<h2 class="ico_mug">Lihat Pesan</h2>
<fieldset>
	<legend><b>Lihat Pesan Masuk</b></legend>
	<br />
	
		<input type="button"  value="Hapus Pesan" class="tombol" onclick="apa()" />
		Nama Pengirim<br />
		<span class="aa"><?php echo $isi['pengirim']; ?></span>
		<br />
		<br />
		Email<br />
		<span class="aa"><?php echo $isi['email']; ?></span>
		<br />
		<br />
		Alamat Website<br />
		<span class="aa"><?php echo $isi['website']; ?></span>
		<br />
		<br />
		IP Address<br />
		<span class="aa"><?php echo $isi['ip']; ?></span>
		<br />
		<br />
		Waktu<br />
		<span class="aa"><?php echo $isi['waktu']; ?></span>
		<br />
		<br />
		Isi Pesan<br />
		<span class="aa"><?php echo $isi['isi_pesan']; ?></span>
		<br />
		<br />
	</form>
			  
</fieldset>
</div>