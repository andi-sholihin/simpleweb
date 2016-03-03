<?php
	$id = $_GET['id'];
	
	$h = mysql_fetch_array(mysql_query("SELECT * FROM halaman WHERE id_halaman = '$id'"));
?>
<script type="text/javascript" src="js/validasi_halaman.js"></script>
<link rel="stylesheet" href="js/gaya.css" />

<div class="section">

<style type="text/css">
.in{
	border:1px inset #666666;
	font-size:24px;
	color:#333333;
}
.tombol{
background-color:#4780AE; 
color:#FFFFFF;
font-size:18px; 
float:right; 
}
</style>

<h2 class="ico_mug">Edit Halaman Web</h2>
<fieldset>
	<legend><b>Edit Halaman Web</b></legend>
	<br />
	<form name="form" id="form" method="post" action="simpan_halaman.php" onsubmit="return validate(this)" >
		<input type="hidden" name="status" value="update" />
		<input type="hidden" name="idlama" value="<?php echo $id; ?>" />
		
		&nbsp;Judul Halaman<br />
		<input name="judul" id="judul" class="in" type="text" value="<?php echo $h['judul_halaman']; ?>" onclick="if(this.value=='<?php echo $h['judul_halaman']; ?>'){this.value=''}" onblur="if(this.value==''){this.value='<?php echo $h['judul_halaman']; ?>'}" size="50" />
		<br />
		<br />
		&nbsp;Tipe Halaman<br />
		<input name="tipe" id="tipe" class="in" type="text" value="<?php echo $h['tipe']; ?>" onclick="if(this.value=='<?php echo $h['tipe']; ?>'){this.value=''}" onblur="if(this.value==''){this.value='<?php echo $h['tipe']; ?>'}" size="50" />
		<br />
		<br />
		<input type="submit" value="Simpan Halaman" name="save" class="tombol" style="float:left;" />
		<input type="reset" value="Reset" name="reset" class="tombol" style="float:left;" />
	</form>
			  
</fieldset>
</div>