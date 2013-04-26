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
<title>Archives</title>
<style type="text/css">
<!--
.style52 {color: #98AFEA}
.bot {COLOR:#BDB39C;
		font-family:tahoma;
		font-size:11px;	 
}
.style55 {font-size: 14px}
.style57 {font-size: 12px}
.style58 {color: #999999}
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


</head


><body background="images/bg.gif">
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
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100" height="23">
            <param name="movie" value="butnhome.php.swf">
            <param name="quality" value="high">
            <embed src="butnhome.php.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="23"></embed>
          </object>
          <embed src="button5.swf" width="100" height="23"></embed> 
          <embed src="button4.swf" width="100" height="23"></embed> 
          <embed src="btndeleteac.swf" width="100" height="23"></embed>       
           <embed src="logout.swf" width="100" height="23"></embed>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="style52">&nbsp;<span class="style55"><span class="style57">&nbsp;</span></span></span> </div>
        <div align="left"><span class="style52">        </span></div></td>
    </tr>
  </table>
 
  <div align="center"><span class="style52"><img src="images/top2.gif" width="992" height="19"></span> </div>
  <table width="732" height="108" border="1" align="center" bordercolor="#ECE9D8" bgcolor="#EAE2D3">
    <!--DWLayoutTable-->
    <tr>
      <td width="726" height="102" valign="top">
	  <form name="formArchive" id="id_formArchive" action="result.php" method="post">
	  <input type="hidden" name="action" value="view">
  	  <input type="hidden" name="id" id="id">
	  
	  <?php
	  
	  
	include ('db_connect_inc.php');

mysql_connect($dbhost, $dbusername, $dbpassword) or die(mysql_error());
mysql_select_db($dbname); 



if($_POST['searchIn']=='comparisons')
{
$result=mysql_query("SELECT compid,title,DATE_FORMAT(date_created , '%d.%m.%Y - %H:%i') AS date_created FROM comparison WHERE title LIKE '%" .$_POST['searchString'] ."%'  OR url1 LIKE '%" .$_POST['searchString'] ."%' OR url2 LIKE '%" .$_POST['searchString'] ."%'  ORDER BY date_created DESC") or die(mysql_error()); 
}
else if($_POST['searchIn']=='comments')
{
$result=mysql_query("SELECT comp_id,name,message,DATE_FORMAT(entry_date , '%d.%m.%Y') AS entry_date FROM comment WHERE name LIKE '%" .$_POST['searchString'] ."%'  OR url LIKE '%" .$_POST['searchString'] ."%' OR message LIKE '%" .$_POST['searchString'] ."%'  ORDER BY entry_date DESC") or die(mysql_error()); 
}

// if the commentform is empty show a message
if(mysql_num_rows($result) == 0)
{
echo "<h2 align=\"center\" >No match found.</h2>";
}
else
{


while ($row = mysql_fetch_array($result)) {


if($_POST['searchIn']=='comparisons')
{
	$id=$row['compid'];
	echo "<div style=\"width:200px;float:right;text-align:right;\">" .$row['date_created'] ."</div><font color='black' >";
	echo $row['title'];
	echo "</font> 
		<br>";
	echo "<br><a href=\"#\" onClick=\"document.getElementById('id').value=$id ; document.getElementById('id_formArchive').submit();\">View Comparison</a><hr>";
	
}
else if($_POST['searchIn']=='comments')
{
	$id=$row['comp_id'];
	echo "<div style=\"width:200px;float:right;text-align:right;\">" .$row['entry_date'] ."</div><font color='black' >";
	echo "<div style=\"font-family:Arial;font-size:12px;\"><strong> By </strong> : " .$row['name'];
	echo "</font> 
		<br>";
	echo "<strong> Comment </strong> : " .$row['message'];		
	echo "<br><br></div><a href=\"#\" onClick=\"document.getElementById('id').value=$id ; document.getElementById('id_formArchive').submit();\">View Comparison</a><hr>";
	
}

}

}
?>  &nbsp;

 </form>
	</td>
  </table>
    <table width="990" height="63" border="0" background="images/bg_bot.gif">
    <tr>
      <td height="59"><div align="center">
          <div>
            <div align="center">
              <p class="style58">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</p>
            </div>
          </div>
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
