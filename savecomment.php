<?php

      	
       	$strName = $_POST["txtname"];
     $strComment = $_POST["txtcomment"];
     

	include("db_connect.php");

        $objRS=mysql_query("select * from comment ");
	

	mysql_query("INSERT INTO comment(name, message) VALUES ('$strName','$strComment' )");
			
	header('location:result.php');

	mysql_close($objcon);
		
?>