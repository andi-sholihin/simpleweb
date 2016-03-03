<!-- init validasi-->
	<script type="text/javascript" src="js/validasi_widget.js"></script>
	<link rel="stylesheet" type="text/css" href="js/gaya.css" />
<?php
	$id = str_replace("\'","",$_GET['id']);
	$scr =mysql_fetch_array(mysql_query("SELECT * FROM widget WHERE id_widget = '$id'"));
?>

<div id="postedit" class="clearfix">
			<h2 class="ico_mug">Tambah Konten Baru</h2>
			<?php //menampilkan status penyimpanan
			if(isset($_GET['status']) && $_GET['status']=="1"){
			?>
			<div id="success" class="info_div"><span class="ico_success">Sukses, Script Widget berhasil disimpan!</span></div>
			<?php
			}else if(isset($_GET['status']) && $_GET['status']=="0"){
			?>
			<div id="fail" class="info_div"><span class="ico_cancel">Error, ada kesalahan saat menyimpan Script Widget!</span></div>
			<?php
			}
			?>
			<br />
			
			<form action="simpan_widget.php" method="post" name="form" id="form" onsubmit="return validate(this)">
			<input type="hidden" value="update" name="query" />
			<input type="hidden" value="<?php echo $id; ?>" name="idlama" />
			<div><input id="post_title" name="judul" type="text" size="20" tabindex="1" value="<?php echo $scr['judul_widget'];?>" onfocus="if(this.value=='<?php echo $scr['judul_widget'];?>'){this.value=''}" onblur="if(this.value==''){this.value='<?php echo $scr['judul_widget'];?>'}" /></div>
			<br />
			<div id="form_middle_cont" class="clearfix">
			<div class="left"><textarea id="script" name="script" cols="45" rows="10" style="font-size:24px"><?php echo $scr['script'];?></textarea><br />
			</div>
			<div class="left form_sidebar">
				<!-- <span id="status">Status: Automated saving...</span> -->
				
				<input type="submit" value="Simpan" class="tombol" />
				<input type="reset" class="tombol" value="Hapus" onclick="return confirm('Hapus semua tulisan yang telah diketik?')" />
				
				</p>
				<br />
				<br />
				<br />
				<br />
				<br />
				
			</div>
			</div>
			</form>
		<!--		
			<div id="warning" class="info_div"><span class="ico_error">Ups, you miss something</span></div>	
		-->
		</div><!-- end #postedit -->