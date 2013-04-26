
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Main</title>
<style type="text/css">
<!--
.style52 {color: #98AFEA}
.bot {COLOR:#BDB39C;
		font-family:tahoma;
		font-size:11px;	 
}
.style55 {font-size: 14px}
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
        <div align="left">          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style52"><span class="style55">&nbsp;</span></span> </div>
        <div align="left"><span class="style52">        </span></div></td>
    </tr>
  </table>
  <img src="images/top2.gif" width="991" height="27">
  <p align="center">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <table width="989" height="27" border="0">
    <tr>
      <td width="979" height="23"><div align="center">
	  <?php
include ('db_connect_inc.php');
	  
	         	$strLoginname = $_POST["txtloginname"];
       	$strName = $_POST["txtname"];
       	$strSurname = $_POST["txtsurname"];
		$strPseudo = $_POST["txtpseudo"];
       $strPassword = $_POST["txtpassword"];
	   $strEmail = $_POST["txtemail"];
$headers = 'From: webmaster@'.$domainhostname .' <Vox Populi Registrar>' ;

 
       $Is_mail_sent = mail( $strEmail, "Welcome to Vox Populi", "username : " .$strLoginname ."\npassword : ".$strPassword, $headers );
	   
if($Is_mail_sent)
{
	  ?>
	  
        <p>Congratulations!!!</p>
        <p>Your account has been created. Go to your e-mail account to confirm your username and password.</p>
<?php

}
else
{
?>		
      <p>Your account has been created.</p>
        <p>There was a problem sending your username and password notification email.</p>
	        
          <p>Please contact the <a href="mailto:webmaster@<?php echo $domainhostname ?>">webmaster</a>.</p>
<?php
}
?>		
        <p>&nbsp;</p>
        <p><a href="index.php">Back to Index </a></p>
        <p>&nbsp; </p>
      </div></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <table width="990" height="63" border="0" background="images/bg_bot.gif">
    <tr>
      <td height="62"><div align="center">
          <div>
            <div align="center">
              <p><b><a href="../../../../Users/User/Desktop/MODIFIED/index.php" class="bot">
			  <a href="index.php" class="bot"></a></b></p>
            </div>
          </div>
          <div style="color:#999999;padding-top:0px">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</div>
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
