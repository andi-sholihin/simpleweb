<div class="section">
<div class="ico_mug"><h1>Pengaturan Website <?php $judul_web; ?></h1></div>
<?php //menampilkan status penyimpanan
			if(isset($_GET['status']) && $_GET['status']=="1"){
			?>
			<div id="success" class="info_div"><span class="ico_success">Sukses, Pengaturan berhasil disimpan!</span></div>
			<?php
			}else if(isset($_GET['status']) && $_GET['status']=="0"){
			?>
			<div id="fail" class="info_div"><span class="ico_cancel">Error, ada kesalahan saat menyimpan Pengaturan!</span></div>
			<?php
			}
			?>
<fieldset>
	<legend><b>Terakhir diubah: <?php echo date("d M Y H:i:s", strtotime($tgl_setting)); ?></b></legend>
	<form name="form" id="form" action="atur.php" method="post" >
	<br />
	
	Judul Website<br />
	<input name="judul" type="text" value="<?php echo $judul_web; ?>" size="50" class="bb" />
	<br />
	<br />
	Deskripsi Singkat<br />
	<input name="deskripsi" type="text" value="<?php echo $deskripsi; ?>" size="50" class="bb" />
	<br />
	<br />
	Email Administrator<br />
	<input name="email" type="text" value="<?php echo $email_admin; ?>" size="50" class="bb" />
	<br />
	<br />
	Alamat Website<br />
	<input name="url" type="text" value="<?php echo $url_web; ?>" size="50" class="bb" />
	<br />
	<br />
	Telepon<br />
	<input name="telpon" type="text" value="<?php echo $telpon; ?>" size="50" class="bb" />
	<br />
	<br />
	Alamat<br />
	<input name="alamat" type="text" value="<?php echo $alamat; ?>" size="50" class="bb" />
	<br />
	<br />
	Mode Perbaikan Website (maintenance)<br />
	<select name="maintenance" id="maintenance" class="bb" >
	<?php if($maintenance=="yes"){?>
		<option>-Pilih Mode-</option>
		<option selected="selected">yes</option>
		<option>no</option>
	<?php }else{?>
		<option>-Pilih Mode-</option>
		<option>yes</option>
		<option selected="selected">no</option>
	<?php } ?>
	</select><br /><br /><br />
	<input name="submit" class="simpan" type="submit" value="Simpan Pengaturan" />
	<input name="reset" class="simpan" type="reset" value="Reset" />
	</form>
	<br /><br /><br />
</fieldset>
</div>