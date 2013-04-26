
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
.style55 {font-size: 14px}
.style59 {color: #999999}
.style56 {color: #000066}
.style61 {
	font-size: 18px;
	font-weight: bold;
}
.style62 {	font-size: 18;
	color: #000066;
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
<table width=992 border=0 align="center" cellpadding=0 cellspacing=0 bgcolor="#666666">
    <!--DWLayoutTable-->
    <tr>
      <td width="992" height="205" valign=top bgcolor="#2267B5"><p align="left"><img src="images/top1.jpg" width="684" height="205"><br>
      </p></td>
    </tr>
    <tr>
      <td height="27" valign=top>        <div align="left">
          <embed src="homeadmin.swf" width="100" height="23"></embed>
          <embed src="adminarchives.swf" width="100" height="23"></embed>
          <embed src="btnaccdeleted.swf" width="100" height="23"></embed>          
          <embed src="btndeletmem.swf" width="100" height="23"></embed>          
          <embed src="logout.swf" width="100" height="23"></embed>          
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style52"><span class="style55">&nbsp;</span></span></div>
        <div align="left"><span class="style52">        </span></div></td>
    </tr>
</table>
 
  <div align="center"><span class="style52"><img src="images/top2.gif" width="992" height="19"></span><br>
</div>
<table width="987" height="443" border="2" align="center" bordercolor="#003399" bgcolor="#FFFFFF">
      <!--DWLayoutTable-->
      <tr>
        <td width="162" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
          <form name="formArchive" id="id_formArchive" action="resultadmin.php" method="post">
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
?>
          </form>          <p>&nbsp;</p>
          <p>&nbsp;
		

		</p></td>
        <td width="807" height="435" valign="top" bgcolor="#FFFFFF"><div align="left" >
            <p>&nbsp;</p>
            <table width="388" height="48" border="2" align="center" bordercolor="#000099" bgcolor="#FFFFFF">
              <!--DWLayoutTable-->
              <tr>
                <td width="382" height="44" valign="top" bordercolor="#000099" bgcolor="#FFFFFF"><div align="center"><span class="style53">
                            <marquee direction="right" scrollamount="3">Administrator Home page</marquee>
                  
                </span></div></td>
              </tr>
            </table>
            <p align="center">&nbsp;</p>
          </div>
          <div align="left">
            <table width="523" height="227" border="2" align="center" bgcolor="#FFFFFF" bordercolor="#000066">
                <!--DWLayoutTable-->
                <tr>
                  <td width="251" height="180" align="center" valign="top" bgcolor="#FFFFFF">
                    <p><strong> <span class="style56">Top Contributors !! </span>&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                    <p><?php
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

?>&nbsp;
					   
  
						
					</p>
                  </td>
                  <td width="254" valign="top" align="center">
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
</table>
       
 
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
<p>&nbsp;</p>
</body>
</html>
