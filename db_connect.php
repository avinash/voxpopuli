<?php

	include ('db_connect_inc.php');



       $con = mysql_connect($dbhost,$dbusername,$dbpassword);
          if (!$con)
          {
            die('Could not connect: ' . mysql_error());
          }

          mysql_select_db($dbname, $con);
		  
		  
?>
