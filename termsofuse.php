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
.style11 {
	color: #0000FF;
	font-size: 24px;
}
.bot {COLOR:#BDB39C;
		font-family:tahoma;
		font-size:11px;	 
}
.style61 {color: #0000FF; font-size: 14px; }
.style63 {
	color: #0000FF;
	font-size: 24px;
	font-weight: bold;
}
.style64 {color: #0000FF}
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
  <table width="989" height="1411" border="0" bgcolor="#FFFFFF">
    <tr>
      <td width="198" height="1407">&nbsp;</td>
      <td width="634"><h3 align="center" class="style11">Terms of Use </h3>
        <p align="left"><strong>PLEASE READ THESE ENTIRE TERMS OF USE CAREFULLY. </strong><br>
        </p>
        <p align="left">BY USING OR ACCESSING ANY OF THE SITES YOU AGREE TO BE BOUND BY THESE TERMS OF USE. IF YOU DO NOT AGREE TO THESE TERMS OF USE, PLEASE DO NOT ACCESS/USE ANY OF THE SITES.</p>
        <p align="left">These Terms of Service apply to all users of the VoxPopuli Website, including users who are also contributors of written, information, and other materials or services on the Website. <br>
  The VoxPopuli Website may contain links to third party websites that are not owned or controlled by VoxPopuli.<br>
  VoxPopuli has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party websites.<br>
  In addition, VoxPopuli will not and cannot censor or edit the content of any third-party site. <br>
  By using the Website, you expressly relieve VoxPopuli from any and all liability arising from your use of any third-party website. <br>
  Accordingly, we encourage you to be aware when you leave the VoxPopuli Website and to read the terms and conditions and privacy policy of each other website that you visit.</p>
        <p align="left">VoxPopuli reserves the right to require your provision of certain personal information as a precondition for gaining access to certain features of the Sites (such as the submission of Data feature). </p>
        <p align="left"><br>
  You hereby undertake to provide VoxPopuli only with current, complete and accurate information as required. Should VoxPopuli suspect that any Information you provided is untrue, inaccurate, not current or incomplete, then without derogating from any other right or remedy to which VoxPopuli may be entitled to under these Terms Of Use and/or applicable law, VoxPopuli has the right to suspend or termainte your use of such features and/or any other (including all other) features of any of the Sites. Your failure to comply with this provision automatically nullifies any obligation VoxPopuli may have to contact you or provide you with any notice required by these Terms Of Use or by law.Voxpopuli has the right to delete the user account if fail to comply with the regulations.</p>
        <p align="left">VoxPopuli hereby grants you permission to use the Website as set forth in this Terms of Service, provided that:</p>
        <p align="left">1. No HATEFUL CONTENT are used: <br>
  Users should not publish material that promotes hate toward groups based on race or ethnic origin, religion, disability, gender, age, veteran status, and sexual orientation/gender identity.</p>
        <p align="left">2.THERE IS NO VIOLENT CONTENT: Users WILL not publish direct threats of violence against any person or group of people.</p>
        <p align="left">3. User will not submit material that is COPYRIGHT: VoxPopuli does not permit copyright infringing activities and infringement of intellectual property rights on its Website, and VoxPopuli will remove all Content and User Submissions if properly notified that such Content or User Submission infringes on another's intellectual property rights.</p>
        <p align="left">4.PRIVATE AND CONFIDENTIAL INFORMATION: We do not allow the unauthorized publishing of people's private and confidential information, such as credit card numbers, Social Security Numbers, and driver's and other license numbers.</p>
        <p align="left">5.IMPERSONATION: We do not allow impersonation of others through our services in a manner that is intended to or does mislead or confuse others.</p>
        <p align="left">6.UNLAWFUL USE OF SERVICES: Our products and services should not be used for unlawful purposes or for promotion of dangerous and illegal activities. Your account may be terminated and you may be reported to the appropriate authorities.</p>
        <p align="left">7.SPAM, MALICIOUS CODES AND VIRUSES: We do not allow spamming or transmitting malware and viruses.</p>
        <p align="left"></p>
        <h3 align="center" class="style63">&nbsp; </h3>
        <p align="center" class="style61">&nbsp;</p>
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
