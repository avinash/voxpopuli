<p>&nbsp;</p>
<?php

       	$strLogname = $_POST["txtlogname"];
       	
       $strPword = $_POST["txtpwd"];
	   
	    $strNam = $_POST["txtnam"];
	   
	   
       $strMail = $_POST["txtmail"];
     
      $strReason = $_POST["txtreason"];


	include("db_connect.php");

        $objRS=mysql_query("select loginame from deletemember where loginame = '$strLogname'");
	

	mysql_query("INSERT INTO deletemember (loginame, password, name, mail, reason) VALUES ('$strLogname','$strPword','$strNam','$strMail','$strReason' )");
			
	header('location:index.php');

	mysql_close($objcon);
		
?>





















<?php

       	$strLoginname = $_POST["txtloginname"];
       	$strName = $_POST["txtname"];
       	$strSurname = $_POST["txtsurname"];
       $strPassword = $_POST["txtpassword"];
	   
	   $strEmail = $_POST["txtemail"];
     

	include("db_connect.php");

        $objRS=mysql_query("select loginame from user where loginame = '$strLoginname'");
	

	mysql_query("INSERT INTO user (loginname, name, surname, password,email) VALUES ('$strLoginname','$strName','$strSurname','$strPassword','$strEmail' )");
			
	header('location:index.php');

	mysql_close($objcon);
		
?>