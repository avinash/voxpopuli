<?php
$strPseu = $_POST["pseudo"];
include("db_connect.php");
$objRS=mysql_query("select pseudo from user where pseudo = '$strPseu'");
	
mysql_query("DELETE FROM user WHERE pseudo='$strPseu'");
	
	mysql_close($con);
	
	?>

<html>
<head>
<title></title>
</head>

<body>
Account has been deleted.<br>
<p>

<a href="adminmain.php">Back to main page</a>
</p>

</body>
</html>