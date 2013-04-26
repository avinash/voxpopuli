<?php

       	$strLogname = $_POST["txtlogname"];
        $strPass = $_POST["txtpwd"];
		$strNam = $_POST["txtnam"];
       	$strMail = $_POST["txtmail"];
        $strReason = $_POST["txtreason"];
     
	include("db_connect.php");

        $objRS=mysql_query("select loginame from deletemember where loginame = '$strLogname'");
	

	mysql_query("INSERT INTO deletemember (loginame,password, name,mail,reason) VALUES ('$strLogname','$strPass','$strNam','$strMail','$strReason' )");
	
	mysql_query("DELETE FROM user WHERE loginname='$strLogname' AND password='$strPass'");
	
	mysql_close($con);
	
	?>

<html>
<head>
<title></title>
</head>

<body>
Your account has been deleted.<br>
<p>

<a href="index.php">Back to Index</a>
</p>

</body>
</html>