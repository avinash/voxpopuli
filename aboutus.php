<?php
session_start();
$msg="";
$login="";
$password="";

include ('db_connect_inc.php');

if(isset($_POST['Submit']) && ($_POST['Submit'])=='Validate')
{

$login=trim($_POST['txtlogin']);
$password=trim($_POST['txtpassword']);

	  if (empty($login))
	      $msg="enter a login name";
	  else
	  {
	  if(empty($password))
	     $msg= "enter a password";
	
	 else
	 {
		$conn=mysql_connect($dbhost,$dbusername,$dbpassword);
		mysql_select_db($dbname,$conn)or die (mysql_error());
		$sql="SELECT * FROM user WHERE loginname='". $login ."'";
		$result=mysql_query($sql,$conn)or die(mysql_error());
		
		if(mysql_num_rows($result)==1)//if the login exist
	      {
		   
		   $pass1=mysql_result($result,0,"password");
			$pass=crypt($pass1);
//		  echo $pass;
//		   $loginname=mysql_result($result,0,"loginname");
		   			if (crypt($password, $pass) == $pass) 
					{
					    
					    
						$uid=mysql_result($result,0,"userid");
						$_SESSION['userid']=$uid;
						$_SESSION['username']=$login;
			
                        header("Location: main.php");

					}
					else
					$msg= "Enter a valid password";
	      }
		  elseif (mysql_num_rows($result)==0)
		$msg= "Enter a valid login name or register if you are not a member";
	}
}

}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Index</title>
<style type="text/css">
<!--
.style52 {color: #98AFEA}
.style11 {color: #0000FF}
.bot {COLOR:#BDB39C;
		font-family:tahoma;
		font-size:11px;	 
}
.style61 {color: #0000FF; font-size: 14px; }
.style64 {color: #0000FF; font-size: 24px; }
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>

<body background="images/bg.gif">

<div align="center">
  <table width=992 border=0 cellpadding=0 cellspacing=0 bgcolor="#666666">
    <!--DWLayoutTable-->
    <tr>
      <td width="992" height="205" valign=top bgcolor="#2267B5"><p align="left"><img src="images/top1.jpg" width="684" height="205"><br>
      </p></td>
    </tr>
    <tr>
      <td height="27" valign=top>        
        <div align="left">        &nbsp;&nbsp;<span class="style52">
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
      <div align="left"><span class="style52">        </span></div></td>
    </tr>
  </table>
  <span class="style52"><img src="images/top2.gif" width="992" height="19"></span>
  <table width="989" height="562" border="0" bgcolor="#FFFFFF">
    <tr>
      <td width="198" height="558">&nbsp;</td>
      <td width="634"><h3 class="style11">&nbsp;</h3>
        <h3 align="center" class="style64">About Us </h3>
        <p align="left">The objective of this website is to make people voice out their opinions in order to better judge the quality and validity of information available on the web.Vox Populi can be considered as a social utility. </p>
        <p align="left"><br>
            <strong>Why are we doing this?</strong><br>
  With the advent of web logs, electronic newspapers and other form of online information, it is frequent to have contradictory views on the same topic or event. Hence, the aim is to create a Web 2.0 mash up of such conflicts and provide participants with the possibility to comment and vote for source of information.<br>
        </p>
        <p align="left"><strong>Anyone can join </strong><br>
  All that's needed to join Vox Populi is a valid email address. Once you register and become a member, you will be allowed to post comments.</p>
        <p align="left"><strong>About Vox Populi.</strong><br>
  This website has been created in January 2008 by final year students of the University of Mauritius studying Information Systems.</p>
        <div align="left"></div>        
        <h2 align="center" class="style11">&nbsp; </h2>
        <p align="center" class="style61">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p>&nbsp;</p>
      </td>
      <td width="143"><p align="left">&nbsp;</p>
      </td>
    </tr>
  </table>
  <table width="990" height="82" border="0" background="images/bg_bot.gif">
    <tr>
      <td height="78"><div align="center">
          <div>
            <div align="center">
              <p><b><a href="index.php" class="bot">INDEX</a>&nbsp;&nbsp;&nbsp; <a href="aboutus.php" class="bot">ABOUT US&nbsp;&nbsp;</a>&nbsp; <a href="guidelines.php" class="bot">GUIDELINES&nbsp;</a>&nbsp;&nbsp; <a href="termsofuse.php" class="bot">TERMS OF USE </a>&nbsp;<a href="privacypolicy.php" class="bot">PRIVACY POLICY</a></b></p>
            </div>
          </div>
          <div style="color:#BDB39C;padding-top:0px">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</div>
      </div></td>
    </tr>
  </table>
  <p class="style52">&nbsp;
  </p>
  <p class="style52">&nbsp;</p>
  <p class="style52">&nbsp;
  </p>
  <p class="style52">&nbsp;</p>
  <p class="style52">&nbsp;</p>
  <p class="style52">&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>
