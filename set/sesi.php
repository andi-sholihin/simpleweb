<?php
$session = session_id();
if(empty($session)){ 
    session_start();
}

if (empty($_SESSION['username'])) {
    header("location:login.php");
}
?>