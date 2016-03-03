<?php 
	$hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
	
	$post = mysql_fetch_array(mysql_query("SELECT COUNT(id_konten) AS post FROM konten WHERE jenis <> 'homebox'"));
	
	$hal = mysql_fetch_array(mysql_query("SELECT COUNT(id_halaman) AS post FROM halaman"));
	
	$msg = mysql_fetch_array(mysql_query("SELECT COUNT(id_pesan) AS post FROM pesan"));
	
	$wg = mysql_fetch_array(mysql_query("SELECT COUNT(id_widget) AS post FROM widget"));
	
	echo mysql_error();
?>

<div class="clearfix" id="content_main">
			<div class="left" id="main_panel_container">
			<div id="dashboard">
				<h2 class="ico_mug">Dashboard</h2>
				<div class="clearfix">
				<div class="left quickview">
					<h3>Rincian Data </h3>
					<ul>
					<li>Jumlah Konten : <span class="number"><?php echo $post['post']; ?></span></li>
					<li>Jumlah Halaman : <span class="number"><?php echo $hal['post']; ?></span></li>
					<li>Kritik & Saran Baru: <span class="number"><?php echo "$pesan[baru]"; ?></span></li>
					<li>Jumlah Pesan : <span class="number"><?php echo "$msg[post]"; ?></span></li>
					<li>Jumlah Widget : <span class="number"><?php echo "$wg[post]"; ?></span></li>
					</ul>
				</div>
				
				<div class="left quickview">
					<h3>Pengaturan</h3>
					<ul>
					<li>Judul Web : <span class="number"><?php echo $judul_web; ?></span></li>
					<li>Deskripsi Web : <span class="number"><?php echo $deskripsi; ?></span></li>
					<li>E-mail Master : <span class="number"><?php echo $email_admin; ?></span></li>
					<li>Alamat Web : <span class="number"><?php echo $url_web; ?></span></li>
					<li>Mode Maintenance : <span class="number"><?php echo $maintenance; ?></span></li>
					</ul>
				</div>	
				</div>
			</div><!-- end #dashboard -->
			
			
			
			<div class="clearfix" id="shortcuts">
				<h2 class="ico_mug">Panel Tombol Pintas</h2>
				
				<ul>
					<li class="first_li"><a href="?hal=tabelkonten"><img alt="themes" src="img/theme.jpg"><span>Konten</span></a></li>
					<li><a href="?hal=tabelhal"><img alt="FTP" src="img/ftp.jpg"><span>Halaman</span></a></li>
					<li><a href="?hal=tabelpesan"><img alt="Comments" src="img/comments.jpg"><span>Pesan Masuk</span></a></li>
					<li><a href="?hal=tabelwidget"><img alt="Gallery" src="img/gallery.jpg"><span>Widget</span></a></li>
					<li><a href="?hal=tabeladmin"><img alt="Users" src="img/users.jpg"><span>Administrator</span></a></li>
					<li><a href="?hal=set"><img alt="Security" src="img/security.jpg"><span>Pengaturan</span></a></li>
			<!--	<li><a href=""><img alt="statistics" src="img/statistic.jpg"><span>Statistics</span></a></li> -->
				</ul>
				
			</div><!-- end #shortcuts -->
			</div>
			<div class="right" id="sidebar">
				<h2 class="ico_mug">Menu Utama</h2>
			<ul id="menu">
				<li>
				
					<a class="ico_posts" href="#">Konten</a>
					<ul style="display: block;">
						<li><a href="?hal=post">Tambah Konten</a></li>
						<li><a href="?hal=tabelpost">Daftar Konten</a></li>
						<li><a href="?hal=tabelhome">Homebox</a></li>
					</ul>
					
					<a class="ico_page" href="#">Halaman</a>
					<ul style="display: none;">
						<li><a href="?hal=inputhal">Tambah Halaman</a></li>
						<li><a href="?hal=tabelhal">Daftar Halaman</a></li>
					</ul>
					
					<a class="ico_posts" href="#">Pesan</a>
					<ul style="display: block;">
						<li><a href="?hal=tabelpesan">Pesan Masuk</a></li>
					</ul>
			
					<a class="ico_user" href="#">Administrator</a>
					<ul style="display: none;">
						<li><a href="?hal=inputadmin">Tambah Administrator</a></li>
						<li><a href="?hal=tabeladmin">Daftar Administrator</a></li>
						<li><a href="?hal=editadmin&id=username">Profil</a></li>
					</ul>
					
					<a class="ico_posts" href="#">Widget</a>
					<ul style="display: none;">
						<li><a href="?hal=inputwidget">Tambah Widget</a></li>
						<li><a href="?hal=tabelwidget">Daftar Widget</a></li>
					</ul>
					
					<a class="ico_settings" href="#">Pengaturan</a>
					<ul style="display: none;">
						<li><a href="?hal=set">Pengaturan Global</a></li>
					</ul>
					
				</li>
		
				
			</ul>

			</div><!-- end #sidebar -->
		</div>