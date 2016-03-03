<script type="text/javascript" src="js/validasi_halaman.js"></script>
<link rel="stylesheet" href="js/gaya.css" />
<div class="section">
<h2 class="ico_mug">Input Halaman Web</h2>
<fieldset>
	<legend><b>Input Halaman Web</b></legend>
	<br />
	<form name="form" id="form" method="post" action="simpan_halaman.php" onsubmit="return validate(this)" >
		<input type="hidden" name="status" value="insert" />
		
		&nbsp;Judul Halaman<br />
		<input name="judul" id="judul" class="in" type="text" placeholder="Judul halaman" size="50" />
		<br />
		<br />
		&nbsp;Tipe Halaman<br />
		<input name="tipe" id="tipe" class="in" type="text" placeholder="Tipe halaman, misalnya : artikel" size="50" />
		<br />
		<br />
		<input type="submit" value="Simpan Halaman" name="save" class="tombol" style="float:left" />
		<input type="reset" value="Reset" name="reset" class="tombol" style="float:left" />
		<br />
		<br />
	</form>
			  
</fieldset>
</div>