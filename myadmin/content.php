<?php
	$hal = !empty($_GET['hal']) ? $_GET['hal'] : '';
	$hal = str_replace("\'","", $hal); //mengambil parameter hal
	
	switch($hal){
	
		case "post" : include "post.php";
				  break;
				  
		case "editpost" : include "edit_post.php";
				  break;
		
		case "tabelpost" : include "tabel_post.php";
				  break;
		
		case "inputhal" : include "input_halaman.php";
				  break; 
				  
		case "tabelhal" : include "tabel_halaman.php";
				  break;
				  
		case "edithal" : include "edit_halaman.php";
				  break; 
		
		case "tabelpesan" : include "tabel_pesan.php";
				  break; 
		
		case "inputwidget" : include "input_widget.php";
				  break;
		
		case "tabelwidget" : include "tabel_widget.php";
				  break;
		
		case "editwidget" : include "edit_widget.php";
				  break;
		
		case "set" : include "pengaturan.php";
				  break;
		
		case "tabeladmin" : include "tabel_admin.php";
				  break;
				  
		case "editadmin" : include "edit_admin.php";
				  break;
		
		case "inputadmin" : include "input_admin.php";
				  break;
				  		  
		default : include "dashboard.php";
				   break;
	}
?>
