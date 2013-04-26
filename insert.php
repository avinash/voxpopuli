<html>
<title>
Vox Populi  - The Voice of the people
</title>
<body>



 <form id="id_form_register" name="register" method="post" action="register.php">
 	<input type="hidden" name="txtloginname" value="<?php echo $_POST["txtloginname"]?>" >
 	<input type="hidden" name="txtname" value="<?php echo $_POST["txtname"]?>" > 
 	<input type="hidden" name="txtsurname" value="<?php echo $_POST["txtsurname"]?>" > 
 	<input type="hidden" name="txtpseudo" value="<?php echo $_POST["txtpseudo"]?>" > 
 	<input type="hidden" name="txtpassword" value="<?php echo $_POST["txtpassword"]?>" > 
 	<input type="hidden" name="txtemail" value="<?php echo $_POST["txtemail"]?>" > 
 	<input type="hidden" id="id_error" name="error" value="" > 			
 </form>



<?php




       	$strLoginname = $_POST["txtloginname"];
       	$strName = $_POST["txtname"];
       	$strSurname = $_POST["txtsurname"];
		$strPseudo = $_POST["txtpseudo"];
       $strPassword = $_POST["txtpassword"];
	   $strEmail = $_POST["txtemail"];
     

	include("db_connect.php");
    
	$v_test=" ";
	$query ="select * from user where loginname='" .$strLoginname ."'";
	$result = mysql_query($query);	  
      if(!result)    
	   {      	echo 'could not run query' .mysql_error();    	exit;      }
      else if(mysql_num_rows($result)>0)
      	{      		$v_test="login";		}

	$result = mysql_query("select * from user where pseudo='" .$strPseudo ."'");
      if(!result)    
	   {      	echo 'could not run query' .mysql_error();    	exit;      }
       else if(mysql_num_rows($result)>0)
      	{      		$v_test="pseudo";		}
	
	if ($v_test=="login")
	{
	?>
	
 	<script>
	document.getElementById("id_error").value="loginname value already taken. Please change."
	document.getElementById("id_form_register").submit() 
	</script>
	
	<?php
		
	}
	else if ($v_test=="pseudo")
	{
	?>
	
 	<script>
	document.getElementById("id_error").value="pseudo value already taken. Please change." 
	document.getElementById("id_form_register").submit() 
	</script>
	
	<?php
		
	}
	else
	{
    mysql_query("INSERT INTO user (loginname, name, surname,pseudo,password,email) VALUES ('$strLoginname','$strName','$strSurname','$strPseudo','$strPassword','$strEmail' )");
	mysql_close($con);
	?>
	
	<script>
		document.getElementById("id_form_register").action="registeraccount.php";
	document.getElementById("id_form_register").submit() 
	</script>
	
	<?php
	
	}
			
?>

</body>

</html>
	