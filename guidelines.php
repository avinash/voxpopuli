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
.style63 {
	color: #0000FF;
	font-size: 24px;
	font-weight: bold;
}
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
  <table width="989" height="796" border="0" bgcolor="#FFFFFF">
    <tr>
      <td width="96" height="792">&nbsp;</td>
      <td width="725"><h3 align="center" class="style63">Guidelines</h3>
        <p align="left"> The guidelines below will help you to become a member and use the website properly:</p>
        <div align="left">
          <li> You will have to sign in to get access to the content of the website.<p></li>
        </div>
        <div align="left">
          <li>If you are not a member,you have to create an account by providing information such as your login tname, name, surname, pseudo, password and e- mail address. An email will be sent to your mail address to confirm your password and then you can sign in.</li>
          <br>
          <li>The member will have the opportunity to create a comparison between two conflicting source of information, vote for the most appropraite source and write comments.</li>
          <br>
          <li>The user can only post comments on previous comparison made as well.</li>
          <br>
          <li>The names of users contributing more for the website will be displayed on the home page.</li>
          <br>
          <li>Once a comparison is made it will be found in the archives.</li>
          <br>
          <li>A member will be able to delete his account.</li>
          <br>
          <li>Respect the contents of the site.</li>
          <p>
          <li>You should respect the opinions of others and if you disagree and you think that some of the content offend you, email us at voiceopinions@hotmail.com.</li>
          <p><strong>Rules when using the site </strong></p>
          <p>
          <li>This website has not been made to discuss <strong>pornography</strong>, illegal acts like<strong> drug abuse</strong> and <strong>child exploitation.</strong>
              <p></p>
              <p>
                    <li>Express your opininions freely but do not include malicious words in your comments so that no offence is caused to a particular gender, race, religion and nationality. </li>
        </div>        <h2 align="center" class="style11">&nbsp; </h2>
        <p align="center" class="style61">&nbsp;</p>
        <p align="center">&nbsp;</p>
        <p>&nbsp;</p>
      </td>
      <td width="154"><p align="left">&nbsp;</p>
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
