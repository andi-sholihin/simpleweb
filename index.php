<?php
include "set/setting.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $judul_web; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<!-- modal dialog-->
<link rel="stylesheet" href="lib/box/pesan.css" />
<script type="text/javascript" src="lib/box/tinybox.js"></script>

<!--Script melayang -->
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/float.js"></script>

</head>
<body>
<div id="bg_clouds">
<div id="main">
<!-- header begins -->
<div id="header">
	<div id="logo">
    	<span style="font-size:36px;color:#000066;font-style:italic;"><?php echo $judul_web; ?></span>
		<br />
      	<a href="#" id="metamorph"><?php echo $deskripsi; ?></a>
    </div>
	<div id="buttons"><?php
			$q = mysql_query("SELECT * FROM halaman ORDER BY no_urut");
			while($hasil=mysql_fetch_array($q)){
				echo "<a href=\"?page=$hasil[id_halaman]\" class=\"but\" title=\"\">$hasil[judul_halaman]</a>";
			}
		?>
 <!-- <a href="blog.html" class="but" title="">Blog</a>
	  <a href="gallery.html"  class="but" title="">Gallery</a>
      <a href="about_us.html"  class="but" title="">About us</a>
      <a href="contact_us.html" class="but" title="">Contact us</a>
	-->
    </div>
</div>
<!-- header ends -->
<div class="top_top"></div>
<div class="top">

 <div id="wrapper">
        <div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="images/top.jpg" alt="" />
                <img src="images/top2.jpg" alt=""/>
                <img src="images/top3.jpg" alt="" />
            </div>        
        </div>

</div>

<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</div>
<div class="top_bot"></div>
<div style="height:17px"></div>
        <!-- content begins -->
        		<div class="cont_top"></div>
       			<div id="content">
				<?php
					include "content.php";
				?>
        		</div>
                <div class="cont_bot"></div>
    <!-- content ends --> 
    <div style="height:15px"></div>
    <!-- bottom begin -->
    <div id="bottom_bot">
        <div id="bottom">
        <div id="b_col1">
              <h1>Situs Menarik</h1>
                <div style="height:10px"></div>
                    <ul class="spis_bot">
                        <li><a href="http://wikimapia.org">Peta Satelit</a></li>
                        <li><a href="http://translate.google.com">Translator Online</a></li>
                        <li><a href="http://www.detik.com">Detik.Com</a></li>
                        <li><a href="http://pamekasan.net">Info Pamekasan</a></li>
                    </ul>
          </div>
                <div id="b_col2">
                    <h1>Kontak</h1>
                    <div style="height:20px"></div>
                    <div style="padding-left:10px">
                        
                        <div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us2.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">Telepon : <?php echo $telpon; ?>
                                    </b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
                        <div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us3.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">E-mail : <?php echo $email_admin; ?></b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
						<div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us1.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">Alamat : <?php echo $alamat; ?></b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
                    </div>
            </div>
    
            <div id="b_col3">
            	<h1>Hubungi Kami </h1>
              	<div style="height:15px"></div>
                    <ul>
                        <li><img src="images/fu_i1.png" class=" fu_i" alt="" /><a href="#" onclick="TINY.box.show({iframe:'kirim_pesan.php',boxid:'frameless',width:750,height:450,fixed:false,maskopacity:40})">Kirim Kritik & Saran</a></li>
                        <li><img src="images/fu_i2.png" class=" fu_i" alt="" /><a href="#">Be a fan on Facebook</a></li>
                        <li><img src="images/fu_i3.png" class=" fu_i" alt="" /><a href="#">RSS Feed</a></li>
                        <li><img src="images/fu_i4.png" class=" fu_i" alt="" /><a href="#">Follow us on Twitter</a></li>
                    </ul>  
                        
          </div>
          	<div style="clear: both; height:20px;"></div>
        </div>
    </div>
<!-- bottom end --> 
<!-- footer begins -->
            <div id="footer">
			Simpleweb - <a href="http://sekedar-tutorial.blogspot.com" target="_blank">Andi Sholihin</a>.<br />
          		Copyright  2011. <!-- Do not remove -->Designed by <a href="http://www.metamorphozis.com/free_templates/free_templates.php" title="Free Web Templates">Free Web Templates</a>, coded by <a href="http://www.myfreecsstemplates.com/" title="Free CSS Templates">Free CSS Templates</a><!-- end --><br />
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a>
    </div>
        <!-- footer ends -->
</div>

</div>
</body>
</html>
