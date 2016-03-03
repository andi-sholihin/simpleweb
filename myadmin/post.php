<!-- init editor text-->
	<script type="text/javascript" src="../jscripts/tiny_mce.js"></script>
	<script type="text/javascript" src="js/texteditor.js"></script>
<!-- init validasi-->
	<script type="text/javascript" src="js/validasi.js"></script>
	<link rel="stylesheet" type="text/css" href="js/gaya.css" />

<div id="postedit" class="clearfix">
			<h2 class="ico_mug">Tambah Konten Baru</h2>
			<?php //menampilkan status penyimpanan
			if(isset($_GET['status']) && $_GET['status']=="1"){
			?>
			<div id="success" class="info_div"><span class="ico_success">Sukses, konten berhasil disimpan!</span></div>
			<?php
			}else if(isset($_GET['status']) && $_GET['status']=="0"){
			?>
			<div id="fail" class="info_div"><span class="ico_cancel">Error, ada kesalahan saat menyimpan konten!</span></div>
			<?php
			}
			?>
			<br />
			
			<form action="simpan_post.php" method="post" name="form" id="form" onsubmit="return validate(this)">
			<input type="hidden" value="insert" name="jenis" />
			<div><input id="post_title" name="judul" type="text" size="30" tabindex="1" placeholder="Judul Konten" onfocus="if(this.value=='Tulis Judul'){this.value=''}" onblur="if(this.value==''){this.value='Tulis Judul'}" /></div>
			<br />

			<input type="button" onclick="tinyMCE.get('konten').show();return false;" value="Visual" class="button"/>
			<input type="button" onclick="tinyMCE.get('konten').hide();return false;" value="HTML" class="button"/>
			
			<div id="form_middle_cont" class="clearfix">
			<div class="left"><textarea id="konten" name="konten" cols="80" rows="20"></textarea><br />
			</div>
			<div class="left form_sidebar">
				<h3>Halaman</h3>
				<select name="halaman" id="halaman" style="margin-left:10px;">
				<option selected="selected" value="">-Pilih Halaman-</option>
					<?php
						$q = mysql_query("SELECT * FROM halaman");
						while($hasil=mysql_fetch_array($q)){
							echo "<option value=\"$hasil[id_halaman]\">$hasil[judul_halaman]</option>";
						}
					?>
				</select>
		<!--	<h3>Tags,</h3>
			
				<input type="text" value="Short" tabindex="2" /> -->
				<p>
					<!-- <span id="status">Status: Automated saving...</span> -->
				<input type="reset" class="button" value="Hapus" onclick="return confirm('Hapus semua tulisan yang telah diketik?')" />
				<input type="submit" value="Simpan Konten" id="save" />
				</p>
			</div>
			</div>
			</form>
		<!--		
			<div id="warning" class="info_div"><span class="ico_error">Ups, you miss something</span></div>	
		-->
		</div><!-- end #postedit -->