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
.style14 {color: #000000}
.style11 {color: #0000FF}
.style12 {color: #0000FF; font-size: 12px; }
.bot {COLOR:#BDB39C;
		font-family:tahoma;
		font-size:11px;	 
}
.style13 {	color: #000000;
	font-size: 10px;
}
.style9 {color: #FF0000}
.style61 {color: #0000FF; font-size: 14px; }
.style62 {color: #000066; }
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
        <div align="left">
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="23">
            <param name="BGCOLOR" value="">
            <param name="movie" value="button11.swf">
            <param name="quality" value="high">
            <embed src="button11.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="23" ></embed>
          </object>
        &nbsp;&nbsp;<span class="style52">
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
      <div align="left"><span class="style52">        </span></div></td>
    </tr>
  </table>
  <span class="style52"><img src="images/top2.gif" width="992" height="19"></span>
  <table width="991" height="323" border="1" bgcolor="#FFFFFF" bordercolor="#003399">
    <tr>
      <td width="656"><h2 align="center" class="style11">Vox Populi</h2>
        <p align="center" class="style61">create it......write it......share it with the world...... </p>
        <p align="center" class="style12"><span class="style11"><span class="style5"> <img src="images/welcome_16.gif" width="166" height="62"> </span></span></p>
        <span class="style11"><span class="style5">
        <p align="center" class="style61">Thank you for visiting our website!!</p>
      </span></span></td>
      <td width="319" height="317">
                  <div align="center">
                    <p>&nbsp;</p>
                    <table width="252" border="1" align="center">
            <tr>
              <td width="226"><p>Welcome Guest! Login or <a href="register.php" class="style62">Register </a></p>
                <form name="form1" id="form1" method="post" action="index.php">
                  <p><span class="style14">Login Name :
                        <input name="txtlogin" type="text" id="txtlogin" value="<?php echo $login ?>" size="20" />
                  </span></p>
                  <p><span class="style14">Password :</span><span class="style13">&nbsp;&nbsp;&nbsp; &nbsp;</span>
                      <input name="txtpassword" type="password" id="txtpassword" value="<?php echo $password ?>" size="20" />
                  </p>
                  <p align="center"> <span class="style9"><?php echo $msg ?></span><br />
                      <input name="Submit" type="submit" id="Submit" value="Validate" />
                      <input type="reset" name="Reset" value="Cancel">
                  </p>
                </form></td>
            </tr>
                                      </table>
        </div>
    <h2 align="center" class="style11">&nbsp;</h2>        <span class="style11"><span class="style5">
          <p align="center">&nbsp;</p>
      </span></span></td>
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
