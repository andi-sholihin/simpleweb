<link href="myadmin/css/style.css" rel="stylesheet" type="text/css" />
<!-- init validasi -->
<link href="myadmin/js/gaya.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="myadmin/js/validasi_pesan.js"></script>

<div class="section">

<h2 class="ico_mug">Hubungi Kami</h2>
<fieldset>
	<legend><b>Kirim Pesan</b></legend>
	<br />
	<form name="form" id="form" method="post" action="simpan_pesan.php" onsubmit="return validate(this)" style="padding-top:4px;" >
		
		<input type="reset" value="Reset" name="reset" class="tombol" />
		<input type="submit" value="Kirim Pesan" name="kirim" class="tombol" />
		&nbsp;Nama Anda<br />
		<input name="nama" id="nama" class="form_pesan" type="text" value="Tulis nama Anda" onfocus="if(this.value=='Tulis nama Anda'){this.value=''}" onblur="if(this.value==''){this.value='Tulis nama Anda'}" size="40" />
		<br />
		
		&nbsp;Email<br />
		<input name="email" id="email" class="form_pesan" type="text" value="Tulis E-mail Anda" onfocus="if(this.value=='Tulis E-mail Anda'){this.value=''}" onblur="if(this.value==''){this.value='Tulis E-mail Anda'}" size="40" />
		<br />

		&nbsp;Alamat Website<br />
		<input name="url" id="url" class="form_pesan" type="text" value="Tulis alamat web Anda, jika ada" onfocus="if(this.value=='Tulis alamat web Anda, jika ada'){this.value='http://'}" onblur="if(this.value=='http://'){this.value='Tulis alamat web Anda, jika ada'}" size="40" />
		<br />
		
		&nbsp;Pesan Anda<br />
		<textarea name="pesan" cols="30" rows="5" class="form_pesan" onfocus="if(this.value=='Tulis Pesan'){this.value=''}" onblur="if(this.value==''){this.value='Tulis Pesan'}">Tulis Pesan</textarea>
		<br />
		<br />
	</form>
			  
</fieldset>
</div>