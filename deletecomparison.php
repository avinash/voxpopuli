
<?php

include ('db_connect.php');



mysql_connect($dbhost, $dbusername, $dbpassword) or die(mysql_error());
mysql_select_db($dbname); 

 if(isset($_POST['compid']) || isset($_GET['compid'])){

		  if(isset($_GET['compid']))
		   $id = $_GET['compid'];
		else
			 $id = $_POST['compid'];}

$result=mysql_query("DELETE FROM `comment` WHERE comp_id=$id;") or die(mysql_error()); 
$result=mysql_query("DELETE FROM `comparison` WHERE compid=$id;") or die(mysql_error()); 

?>  


<html>
<head> 
<meta  http-equiv="refresh" content="1;URL=archivesadmin.php">

</head>
<body>

</body>
</html>
                  