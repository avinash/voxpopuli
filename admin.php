<?php
$adlogin="";
$adpassword="";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Administrator</title>
<style type="text/css">
<!--
.bot {COLOR:#BDB39C;
		font-family:tahoma;
		font-size:11px;	 
}
.style14 {color: #000000}
.style3 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-size: 10px}
.style52 {color: #98AFEA}
.style56 {font-size: 16px}
.style63 {color: #000000; font-size: 12px; }
.style64 {color: #000000; font-size: 16px; }
.style59 {color: #999999}
-->
</style>
</head>

<body>
<div align="center">
  <div align="center">
    <table width=992 border=0 cellpadding=0 cellspacing=0 bgcolor="#666666">
      <!--DWLayoutTable-->
      <tr>
        <td width="992" height="205" valign=top bgcolor="#2267B5"><p align="left"><img src="images/top1.jpg" width="684" height="205"><br>
        </p></td>
      </tr>
      <tr>
        <td height="27" valign=top>&nbsp;&nbsp;<span class="style52"> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div align="left"><span class="style52"> </span></div></td>
      </tr>
    </table>
    <span class="style52"><img src="images/top2.gif" width="992" height="19"></span>
    <p class="style52">&nbsp;
    </p>
    <table width="297" border="3" align="center" bordercolor="#000066">
      <tr>
        <td width="287" height="249"><h3 align="center">Administrator</h3>
          <form name="formadmin" method="post" action="validate.php">
    <p align="left" class="style56">
                <label><span class="style63"> &nbsp;&nbsp;<span class="style56"> Login :&nbsp;</span></span><span class="style3"><span class="style4"> &nbsp; &nbsp; &nbsp; 
                <input name="txtadlogin" type="text" id="txtadlogin" value="<?php echo $adlogin ?> " size="20" />
&nbsp; &nbsp; &nbsp; </span> </span> <br />
          </label>
            </p>
              <p align="left" class="style56">
                <label> &nbsp; <span class="style64">Password : </span><span class="style4"><span class="style14">                
                <input name="txtadpassword" type="password" id="txtadpassword" value="<?php echo $adpassword ?>" size="20" />
                </span></span> <br>
                </label>
            </p>
              <p align="center" class="style56">
                <label>
                <input name="Submit" type="submit" id="Submit" value="Login" />
                <input type="reset" name="Reset" value="Cancel">
                <br />
                </label>
              </p>
          </form>
        <p></p></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="990" height="63" border="0" align="center" background="images/bg_bot.gif">
      <tr>
        <td height="63"><div align="center">
            <div>
              <div align="center">
                <p class="style59">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</p>
              </div>
            </div>
        </div></td>
      </tr>
    </table>
    <p class="style52">&nbsp;</p>
    <p class="style52">&nbsp; </p>
    <p class="style52">&nbsp;</p>
    <p class="style52">&nbsp;</p>
    <p class="style52">&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>
</body>
</html>
