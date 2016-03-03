<?php
	require_once("../set/config.php");
	$pesan = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS baru FROM pesan WHERE dibaca = 'no'"));
	
	/* Simple Web
	* Generate by Andi Sholihin
	* http://www.sholihin.com
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator <?php echo $judul_web;?></title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	<link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
	
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="Stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.7.1.custom.css"  />	
	<!--[if IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="markitup/skins/markitup/style.css" />
	<link rel="stylesheet" type="text/css" href="markitup/sets/default/style.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
	<!--[if IE]>
		<style type="text/css">
		  .clearfix {
		    zoom: 1;     /* triggers hasLayout */
		    display: block;     /* resets display for IE/Win */
		    }  /* Only IE can see inside the conditional comment
		    and read this CSS rule. Don't ever use a normal HTML
		    comment inside the CC or it will close prematurely. */
		</style>
	<![endif]-->
	<!-- JavaScript -->


    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.1.custom.min.js"></script>
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

	</script>
	<script type="text/javascript" src="js/excanvas.pack.js"></script>
	<script type="text/javascript" src="js/jquery.flot.pack.js"></script>
    <script type="text/javascript" src="markitup/jquery.markitup.pack.js"></script>
	<script type="text/javascript" src="markitup/sets/default/set.js"></script>
  	<script type="text/javascript" src="js/custom.js"></script>
	
	 <!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
</head>
<body>

<div class="container" id="container">
    <div  id="header">
    	<div id="profile_info">
			<img src="img/avatar.jpg" id="avatar" alt="avatar" />
			<p>Selamat Datang <strong><?php echo $_SESSION['username']; ?></strong>. <a href="logout.php" onclick="return confirm('Anda yakin akan logout dari sistem?')">Logout</a></p>
			<p>Kritik & Saran Baru : <?php echo "$pesan[baru]"; ?>. <a href="?hal=tabelpesan">Baca</a></p>
			<p class="last_login">Terakhir login: <?php echo date("d M Y H:i:s", strtotime($_SESSION['last'])); ?></p>
		</div>
		<div id="logo"><h1 style=""><a href="index.php">Administrator</a></h1></div>
		
    </div><!-- end header -->
	    <div id="content" >
	    <div id="top_menu" class="clearfix">
	    	<ul class="sf-menu"> <!-- DROPDOWN MENU -->
			<li>
				<a href="?hal=dashboard">Dashboard</a>
			</li>
			
			<li class="current">
				<a href="#a">Konten</a><!-- First level MENU -->
				<ul>
						<li><a href="?hal=post">Tambah Konten</a></li>
						<li><a href="?hal=tabelpost">Daftar Konten</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Halaman</a>
				<ul>
					<li><a href="?hal=inputhal">Tambah Halaman</a></li>
					<li><a href="?hal=tabelhal">Daftar Halaman</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Widget</a>
				<ul>
					<li><a href="?hal=inputwidget">Tambah Widget</a></li>
					<li><a href="?hal=tabelwidget">Daftar Widget</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Administrator</a>
				<ul>
				<?php if($_SESSION['level']=="admin"){
					echo "<li><a href=\"?hal=inputadmin\">Tambah Administrator</a></li>";
					}
				?>
					<li><a href="?hal=tabeladmin">Daftar Administrator</a></li>
					<li><a href="?hal=editadmin&id=<?php echo $_SESSION['username']; ?>">Profil</a></li>
				</ul>
			</li>
			<li>
				<a href="?hal=tabelpesan">Kritik & Saran <?php if($pesan['baru']>0){echo "<font color=\"red\"><b>($pesan[baru])</b></font>";} ?></a>
			</li>
			<li>
				<a href="?hal=set">Pengaturan</a>
			</li>
			<li>
				<a href="logout.php" onclick="return confirm('Anda yakin akan logout dari sistem?')">Logout</a>
			</li>
		</ul>
			<a href="<?php echo "$url_web"; ?>" id="visit" class="right" target="_blank">Lihat Website</a>
	    </div>
		
		<?php
			include "content.php";
		?>
		
	    </div><!-- end #content -->
		   
    <div  id="footer" class="clearfix">
    	<p class="left">&copy; <?php echo date("Y"); ?> Admin Simple Web - <a href="http://www.sholihin.com" target="_blank">Andi Sholihin</a></p>
		<p class="right">&copy; 2009 AdminTheme by rzepak, via Themeforest</p>
	</div><!-- end #footer -->
</div><!-- end container -->

</body>
</html>
