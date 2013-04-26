<?php
session_start();

if(!isset($_SESSION['username'])) 
{
   header("Location: index.php");
}

?>

<style type="text/css">
<!--
.style52 {color: #98AFEA}
.style55 {font-size: 14px}
.style58 {
	font-size: 11px;
	font-weight: bold;
	color: #999999;
}
.style60 {color: #999999}
-->
</style>
<body bgcolor="#EAE2D3">
<div align="center"></div>
<table width=992 border=0 align="center" cellpadding=0 cellspacing=0 bgcolor="#666666">
    <!--DWLayoutTable-->
    <tr>
      <td width="992" height="205" valign=top bgcolor="#2267B5"><p align="left"><img src="images/top1.jpg" width="684" height="205"><br>
      </p></td>
    </tr>
    <tr>
      <td height=27 valign=top>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100" height="23">
          <param name="movie" value="butnhome.php.swf">
          <param name="quality" value="high">
          <embed src="butnhome.php.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="23"></embed>
        </object>
        <embed src=button4.swf width=100 height=23></embed>
        <embed src=button5.swf width=100 height=23></embed>
        <embed src=btndeleteac.swf width=100 height=23></embed>
        <embed src=logout.swf width=100 height=23></embed>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class=style52>&nbsp;<span class=style55></span></span>        <div align=left><span class=style52>        </span></div></td>
    </tr>
    
</table>
<div align="center"><img src="images/top2.gif" width="991" height="27">
</div>
<br>
  <?php

$title="something";

$url1="$_POST[link1]";
$url2="$_POST[link2]";

echo "


<table align=center><tr><td>

<br><iframe src=$url1 width=358 height=400 scrolling=yes> </iframe>


</td><td>

<div align=center><br><iframe src=$url2 width=358 height=400 scrolling=yes> </iframe>




</td></tr>

</table>


<div align=center>

	<form name=form2 id=form2 method=post action=result.php><br>

	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	Insert Title : <input name=title type=text id=title size=40 maxlength=1000 align=middle><br><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	<input name=link1 type=text id=1ink1 size=40 maxlength=1000 value=$url1>
	
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input name=link2 type=text id=1ink2 size=40 maxlength=1000 value=$url2>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=hidden name=action value=appendComp>
<br>
<br>
	 <input name=cmdupload type=button id=cmdupload1 value=LoadAll 
	 
	 onClick=\"if(document.getElementById('title').value=='')
	 			{alert('Please provide with a title for the comparison')}
				else if(document.getElementById('1ink1').value=='' || document.getElementById('1ink2').value=='' )
	 			{alert('Please provide complete both url forms')}
				else 				
				{document.getElementById('form2').submit() }\" >

</form>
</div>
";

?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<div align="center"></div>
<table width="990" height="63" border="0" align="center" background="images/bg_bot.gif">
    <tr>
          <td height=58 colspan=2 align=center valign=top background="u9/html/images/bg_bot.gif">
            <div><span class="style58">			 
              <p>&nbsp;</p>
              </span><span class="style60">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</span></div>            
      </td>
  </tr>
</table>

</body>