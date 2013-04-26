<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>View Account deleted</title>
<style type="text/css">
<!--
.bot {COLOR:#BDB39C;
		font-family:tahoma;
		font-size:11px;	 
}
.style59 {color: #999999}
-->
</style>
<body background="images/bg.gif">
<div align="center">
  <div align="center">
    <div align="center">
      <table width=992 border=0 cellpadding=0 cellspacing=0 bgcolor="#666666">
        <!--DWLayoutTable-->
        <tr>
          <td width="992" height="205" valign=top bgcolor="#2267B5"><p align="left"><img src="images/top1.jpg" width="684" height="205"><br>
          </p></td>
        </tr>
        <tr>
          <td height="27" valign=top><div align="left">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100" height="23">
              <param name="movie" value="homeadmin.swf">
              <param name="quality" value="high">
              <embed src="homeadmin.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="23"></embed>
            </object>              
            <embed src="adminarchives.swf" width="100" height="23"></embed>

              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100" height="23">
                <param name="movie" value="btnaccdeleted.swf">
                <param name="quality" value="high">
                <embed src="btnaccdeleted.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="23"></embed>
              </object>              
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="100" height="23">
                <param name="BGCOLOR" value="">
                <param name="movie" value="button7.swf">
                <param name="quality" value="high">
                <embed src="button7.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="100" height="23" ></embed>
              </object>
            
              <embed src="logout.swf" width="100" height="23"></embed>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style52"><span class="style55">&nbsp;</span></span></div>
              <div align="left"><span class="style52"> </span></div></td>
        </tr>
      </table>
<img src="images/top2.gif" width="991" height="27">
      <table width="993" height="221" border="2" bgcolor="#FFFFFF" bordercolor="#003399">
        <tr>
          <td><?php
		  
		  include ('db_connect_inc.php');
		  
mysql_connect($dbhost, $dbusername, $dbpassword) or die(mysql_error());
mysql_select_db($dbname); 


$result=mysql_query("SELECT * FROM deletemember") or die(mysql_error()); 
while ($row = mysql_fetch_array($result)) {

$id=$row['deletememberid'];
echo "<font color='blue'><strong>";
echo $row['name'];
echo "</font></strong><br><br>";
echo "<font color='black'>";
echo $row['mail'];
echo "</font><br><br>";

echo "<font color='black'>";
echo $row['reason'];
echo "</font>";
echo '<br><hr>';
}
?>  &nbsp;
            <div align="left"></div>
            <div align="left"></div>
            <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <table width="990" height="63" border="0" background="images/bg_bot.gif">
        <tr>
          <td height="61"><div align="center">
              <div>
                <div align="center">
                  <p> <span class="style59">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</span></p>
                </div>
              </div>
              </div></td>
        </tr>
      </table>
      <p class="style52">&nbsp; </p>
      <p class="style52">&nbsp;</p>
      <p class="style52">&nbsp; </p>
      <p class="style52">&nbsp;</p>
      <p class="style52">&nbsp;</p>
      <p class="style52">&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
</body>
</html>

			    

                