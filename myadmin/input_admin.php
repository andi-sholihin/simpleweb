<script type="text/javascript" src="js/validasi_admin.js"></script>
<link rel="stylesheet" href="js/gaya.css" />

<div class="section">
<div class="ico_mug"><h1>Tambah Administrator</h1></div>

<fieldset>
	<legend><b>Input Data Administrator</b></legend>
	<div style="padding-left:100px;">
	<form name="form" id="form" action="simpan_admin.php" method="post" onsubmit="return validate(this)">
	
	<input type="hidden" name="stat" value="insert" />
	<br />
	
	Username<br />
	<input name="username" id="username" type="text" size="50" class="bb" />
	<br />
	<br />
	Password<br />
	<input name="password" id="password" type="password" size="50" class="bb" />
	<br />
	<br />
	Nama Lengkap<br />
	<input name="nama" id="nama" type="text" size="50" class="bb" />
	<br />
	<br />
	Alamat Email <br />
	<input name="email" id="email" type="text" size="50" class="bb" />
	<br />
	<br />
	Level Administrator<br />
	<select name="level" id="level" class="bb" >
		<option selected="selected" value="">-Pilih Level-</option>
		<option value="admin">Admin</option>
		<option value="editor">Editor</option>
	</select><br /><br /><br />
	<input name="submit" class="simpan" type="submit" value="Simpan Data" />
	<input name="reset" class="simpan" type="reset" value="Reset" />
	</form>
	</div>
	<br /><br /><br />
</fieldset>
</div>