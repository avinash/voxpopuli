<?php
session_start();

if(!isset($_SESSION['username'])) 
{
   header("Location: index.php");
}


	include ('db_connect_inc.php');


?>

<style type="text/css">
<!--
.style52 {color: #98AFEA}
.style55 {font-size: 14px}
.style57 {font-size: 12px}
.style58 {
	font-size: 11px;
	color: #CCCCCC;
}
.style59 {color: #CCCCCC}
.style60 {color: #999999}
.style61 {font-size: 11px}
-->
</style>
<body bgcolor="#EAE2D3">
<table width=992 border=0 align="center" cellpadding=0 cellspacing=0 bgcolor="#666666">
    <!--DWLayoutTable-->
    <tr>
      <td width="992" height="205" valign=top bgcolor="#2267B5"><p align="left"><img src="images/top1.jpg" width="684" height="205"><br>
      </p></td>
    </tr>
    <tr>
      <td height="27" valign=top>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100" height="23">
          <param name="movie" value="butnhome.php.swf">
          <param name="quality" value="high">
          <embed src="butnhome.php.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="23"></embed>
        </object>        
        <embed src="button4.swf" width="100" height="23"></embed>
        <embed src="button5.swf" width="100" height="23"></embed>
        <embed src="btndeleteac.swf" width="100" height="23"></embed>
        <embed src="logout.swf" width="100" height="23"></embed>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="style52">&nbsp;<span class="style55"></span></span>        <div align="left"><span class="style52">        </span></div></td>
    </tr>
</table>
<div align="center"><span class="style52"><img src="images/top2.gif" width="992" height="19"></span>
</div>
<table align="center">
  <tr><td>
 <div align="center"><br>
<iframe src=$url1 width=358 height=400 scrolling=yes> </iframe>


</td><td>
 <div align="center"><br>
<iframe src=$url2 width=358 height=400 scrolling=yes> </iframe>




</td></tr>
</table>

<form name=form2 method=post action=loadcomp.php>
      <div align="center">
        <input name=title type="hidden"id=titlesize=40 maxlength=1000 align=middle>
      </div>
      <table align="center">
	   <tr><td>
 <div align="center"> <br>

	  <input name=link1 type=text id=1ink1 size=40 maxlength=1000 value=http://>
	 </td><td>

 <div align="center"> <br>
	 <input name=link2 type=text id=1ink2 size=40 maxlength=1000 value=http://>
	 </td></tr></table>




  <p align="center"> <br> <input name=cmdupload type=submit id=cmdupload1 value=LoadURLS>
  <p align="center">  
</form>
 <table width="990" height="63" border="0" background="images/bg_bot.gif" align="center">
  <tr>
    <td height="59"><div align="center">
        <div>
          <div align="center"></div>
        </div>
        <div style="color:#999999;padding-top:0px">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</div>
    </div></td>
  </tr>
</table>
<p align="center">
<p align="center">
</body>
</html>
