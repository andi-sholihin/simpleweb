<?php
session_start();
if (!empty($_SESSION['username'])) {
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Administrator</title>
	<meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
	<!--[if IE]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<link rel="Stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.7.1.custom.css"  />	
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
		<script type="text/javascript" src="js/custom.js"></script>
</head>
	 <!--[if IE]><script language="javascript" type="text/javascript" src="excanvas.pack.js"></script><![endif]-->
</head>
<body>
<div  id="login_container">
  <div  id="header">
    <div id="logo">
      <h1><a href="#">Login</a></h1>
    </div>
  </div>
  <!-- end header -->
  <div id="login" class="section">
 			<?php if(isset($_GET['status']) && $_GET['status'] === "0") :
			?>
			<div id="fail" class="info_div"><span class="ico_cancel">Username atau Password salah!</span></div>
			<?php
			endif;
			?>
	<div style="height:20px;"></div>
    <form name="loginform" id="loginform" action="cek_login.php" method="post">
      <label><strong>Username</strong></label>
      <input type="text" name="username" id="user_login"  size="18" class="input"/>
      <br />
      <label><strong>Password</strong></label>
      <input type="password" name="password" id="user_pass" size="18" class="input"/>
      <br />
      <!-- <strong>Remember Me</strong>
      <input name="checkbox" type="checkbox" class="input noborder" id="remember" /> -->
      <br />
      <input name="submit" type="submit" class="button" id="save" value="Log In" />
    </form>
    &nbsp;
</div>
<!-- end container -->
</body>

</html>
