<?php
require_once("set/global.php");

if ($sukses) {
    header("location:index.php");
}
?>
<html>
<head>
<title>Error!</title>
<?php require_once("set/global.php"); ?>
</head>
<body>
<h1 align="center" style="color:#FF0000;">Error!

tidak dapat terhubung ke Database!<br>
(cannot connect to Database!)</h1>
</body>
</html>