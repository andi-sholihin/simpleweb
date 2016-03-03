<div class="section">
<div class="ico_mug"><h1>Edit Administrator</h1></div>
<?php
if($_SESSION['level']=="admin"){
	$q = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE username = '$_GET[id]'"));
}else{
	$q = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE username = '$_SESSION[username]'"));
}
?>
<fieldset>
	<legend><b>Edit Data Administrator</b></legend>
	<div style="padding-left:100px;">
	<form name="form" id="form" action="simpan_admin.php" method="post" >
	<input type="hidden" name="stat" value="update" />
	<input type="hidden" name="idlama" value="<?php echo $_GET['id']; ?>" />
	<br />
	
	Username<br />
	<input name="username" type="text" size="50" class="bb" value="<?php echo $q['username'];?>" />
	<br />
	<br />
	Password<br />
	<input name="password" type="password" size="50" class="bb" value="123456" onfocus="if(this.value=='123456'){this.value=''}" onblur="if(this.value==''){this.value='123456'}"/>
	<br />
	<br />
	Nama Lengkap<br />
	<input name="nama" type="text" size="50" class="bb" value="<?php echo $q['nama'];?>" />
	<br />
	<br />
	Alamat Email <br />
	<input name="email" type="text" size="50" class="bb" value="<?php echo $q['email'];?>" />
	<?php if($_SESSION['level']=="admin"){?>
	<br />
	<br />
	Level Administrator<br />
	<select name="level" id="level" class="bb" >
		<option value="">-Pilih Level-</option>
		
		<?php if($q['level']=="admin"){ ?>
			<option selected="selected" value="admin">Admin</option>
			<option value="editor">Editor</option>
		<?php }else{ ?>
			<option value="admin">Admin</option>
			<option selected="selected" value="editor">Editor</option>
		<?php } ?>
	</select>
	<?php } ?>
	<br /><br /><br />
	<input name="submit" class="simpan" type="submit" value="Simpan Data" />
	<input name="reset" class="simpan" type="reset" value="Reset" />
	</form>
	</div>
	<br /><br /><br />
</fieldset>
</div>