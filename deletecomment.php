<?php
	include ('db_connect_inc.php');
mysql_connect($dbhost, $dbusername, $dbpassword) or die(mysql_error());
mysql_select_db($dbname); 

 if(isset($_POST['id']) || isset($_GET['id'])){

		if(isset($_GET['id']))
		   $id = $_GET['id'];
		else
			 $id = $_POST['id'];}

$result=mysql_query("DELETE FROM comment where id=$id") or die(mysql_error()); 



?>  



<html>
<head> 
<meta  http-equiv="refresh" content="1;URL=Admincomment.php?pseudo=<?php echo $_REQUEST['pseudo'] ; ?>&comp_id=<?php echo $_REQUEST['comp_id'] ; ?>&userid=<?php echo $_REQUEST['userid']; ?> ">

</head>
<body>


</body>
</html>
                  
                  