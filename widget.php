<?php
	include "set/setting.php";
	$wg = mysql_query("SELECT * FROM widget ORDER BY id_widget");
	$jml = mysql_num_rows($wg);
?>
<div class="razd_lr">
       	<div id="right">
           <?php
		   $i=1;
			while($br = mysql_fetch_array($wg)){
            	 echo "<h1>$br[judul_widget]</h1>
                	 <div style=\"height: 15px;\"></div> 
                 		$br[script]";
			 if($i<$jml){
             echo "<div class=\"razd_h\"></div>";
			 	}
			  $i++;
			}
     ?>                         
      </div>
                       
     <div style="clear: both;"></div>
</div>
        	