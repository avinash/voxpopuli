<?php
session_start();
$adlogin="";
$adpassword="";

include ('db_connect_inc.php');

if(isset($_POST['Submit']) && ($_POST['Submit'])=='Login')
{

$adlogin=trim($_POST['txtadlogin']);
$adpassword=trim($_POST['txtadpassword']);

 
		$conn=mysql_connect($dbhost,$dbusername,$dbpassword);
		mysql_select_db($dbname,$conn)or die (mysql_error());
		$sql="SELECT * FROM administrator WHERE loginname='". $adlogin ."'";
		$result=mysql_query($sql,$conn)or die(mysql_error());
		
		if(mysql_num_rows($result)==1)//if the login exist
	      {
		   
		   $pass1=mysql_result($result,0,"password");
			$pass=crypt($pass1);
//		  echo $pass;
//		   $loginname=mysql_result($result,0,"loginname");
		   			if (crypt($adpassword, $pass) == $pass) 
					{
					    
					    
						$uid=mysql_result($result,0,"userid");
						$_SESSION['userid']=$uid;
						$_SESSION['username']=$adlogin;
                        
						header("Location: adminmain.php");

					}
					
	      }

}

?>
