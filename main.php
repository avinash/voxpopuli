<?php
session_start();

if(!isset($_SESSION['username'])) 
{
   header("Location: index.php");
}

?>
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
.style53 {
	color: #000033;
	font-weight: bold;
	font-size: 18px;
}
.style55 {color: #999999}
.style56 {color: #000066}
.style58 {font-size: 18px}
.style59 {
	font-size: 18;
	color: #000066;
	font-weight: bold;
}
.style60 {
	font-size: 12px;
	color: #999999;
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
      <td height="27" valign=top><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100" height="23">
          <param name="movie" value="butnhome.php.swf">
          <param name="quality" value="high">
          <embed src="butnhome.php.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="23"></embed>
          </object>
        <embed src="button5.swf" width="100" height="23" autostart="false"></embed>
        <embed src="button4.swf" width="100" height="23"></embed>        
        <embed src="btndeleteac.swf" width="100" height="23"></embed>
        <embed src="logout.swf" width="100" height="23"></embed>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
  </table>
  <span class="style52"><img src="images/top2.gif" width="992" height="19"></span><br>
  <div align="left">
    <table width="989" height="353" border="2" align="center" bgcolor="#FFFFFF" bordercolor="#003399">
      <!--DWLayoutTable-->
      <tr>
        <td width="200" height="191" valign="top" bgcolor="#FFFFFF"><div class="cse-branding-form" style="margin-top:10px;width:200px;font-family:Arial;font-size:11px;">
          <form action="Search.php" id="searchBox" target="_self" method="post">
		     <div align="center">
                <p>&nbsp;</p>
				    <p align="left">
			          <center>
			            <input type="text" name="searchString" size="35"  style="width:190px;"/></center>
	                </p>
		            <p align="center"><font color="#FFFFFF">
	                <input name="searchIn" type="radio" value="comparisons" checked>
                    </font> <font color="#000">comparisons</font> 
                      <input type="radio" name="searchIn" value="comments">
                      <font color="#000">comments</font></p>
		     </div>
              <div style="float:right;margin-top:15px;">
                  <div align="center">
                      <table width="116" border="0" align="center">
                        <tr>
                          <td width="44" height="41"><img src="images/images.jpg" width="44" height="39"></td>
                          <td width="62">
                            <div align="left">
                              <input type="submit" value="Search"/>
                          </div></td>
                        </tr>
                    </table>
                </div>
              </div>    
            </form>
        </div></td>
        <td width="771" rowspan="2" valign="top" bgcolor="#FFFFFF"><table width="388" height="53" border="0" align="center">
          <tr>
            <td width="382" height="49"><div align="center"><span class="style53"><marquee direction="left"><span class="style56"><span class="style58">Welcome</span> <?php echo $_SESSION['username'] ;?>
                </span>
                </marquee>
            </span></div></td>
          </tr>
        </table>        
          <div align="left">
            <p>&nbsp;</p>
          </div>
          <div align="left">
            <table width="523" height="188" border="2" align="center" bgcolor="#FFFFFF" bordercolor="#000066">
                <!--DWLayoutTable-->
                <tr>
                  <td width="248" height="180" align="center" valign="top">
                    <p><strong> <span class="style56">Top Contributors !! </span>&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                    <p>
					   
<?php
include ('db_connect_inc.php');

mysql_connect($dbhost, $dbusername, $dbpassword) or die(mysql_error());
mysql_select_db($dbname); 

					
//$result=mysql_query("SELECT compid,title,DATE_FORMAT(date_created , '%d.%m.%Y - %H:%i') AS date_created FROM comparison ORDER BY date_created DESC") or die(mysql_error()); 
$sql="SELECT 	user_id, comment.name, user.name, user.surname, COUNT(comp_id) AS contribs FROM comment, user WHERE userid=user_id GROUP BY user_id ORDER BY contribs DESC LIMIT 0,5";
$result=mysql_query($sql) or die(mysql_error()); 
while ($row = mysql_fetch_array($result)) {

$id=$row['compid'];

echo $row['name'] ." " .$row['surname'] ."<br>";

}

?> 
					  
						
					&nbsp;</p>
                  </td>
                  <td width="257" valign="top" align="center">
                    <p class="style56"><strong>Top Comparisons !! </strong></p>
				    <p>
  
<?php					

$sql="SELECT compid,title,url1_votesUP+url2_votesUP AS totalUP FROM comparison ORDER BY totalUP DESC LIMIT 0,5";
$result=mysql_query($sql) or die(mysql_error()); 
while ($row = mysql_fetch_array($result)) {

$id=$row['compid'];

echo $row['title'] ."<br>";

}
?>
				    </p>
                  </td>
                </tr>
            </table>
          </div>
            <div align="left"></div>
        </form>        
        <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="118" valign="top" bgcolor="#FFFFFF"><form name="formArchive" id="id_formArchive" action="result.php" method="post">
	      <p align="center" class="style59 style55 style60"> Most recent comparisons </p>
	      <p align="left" class="style59">	          <input type="hidden" name="action" value="view">
  	          <input type="hidden" name="id" id="id">
            </p>
	      <p align="left"> <?php
	  
	  
	include ('db_connect_inc.php');

mysql_connect($dbhost, $dbusername, $dbpassword) or die(mysql_error());
mysql_select_db($dbname); 


$result=mysql_query("SELECT compid,title,DATE_FORMAT(date_created , '%d.%m.%Y - %H:%i') AS date_created FROM comparison ORDER BY date_created DESC LIMIT 0,5") or die(mysql_error()); 
while ($row = mysql_fetch_array($result)) {

$id=$row['compid'];
echo "<div style=\"width:300px;float:right;text-align:right\"></div><font color='black' size=h1>";
echo $row['title'];
echo "</font> 
<br>";
echo "<a href=\"#\" onClick=\"document.getElementById('id').value=$id ; document.getElementById('id_formArchive').submit();\"><font size=h1> View Comparison</a><hr></font>";
}
?>&nbsp;</p>
        </form></td>
      </tr>
    </table>
  </div>
  <table width="990" height="63" border="0" background="images/bg_bot.gif">
    <tr>
      <td height="59"><div align="center">
          <div>
            <div align="center">
              <p class="style55">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</p>
            </div>
          </div>
          </div></td>
    </tr>
  </table>
  <p class="style52">&nbsp;
  </p>
  <p class="style52">&nbsp;</p>
  <p class="style52">
  </p>
  <p class="style52">&nbsp;</p>
  <p class="style52">&nbsp;</p>
  <p class="style52">&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>
