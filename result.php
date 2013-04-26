<?php
session_start();

if(!isset($_SESSION['username'])) 
{
   header("Location: index.php");
}


include ('db_connect_inc.php');
?>

<html>
<head>
<title>comparison</title>
<style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style59 {color: #999999}
-->
</style>
<body bgcolor="#EAE2D3">
<style type=text/css>
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

		<script language="JavaScript" type="text/javascript">
			//Gets the browser specific XmlHttpRequest Object
			function getXmlHttpRequestObject() {
				if (window.XMLHttpRequest) {
					return new XMLHttpRequest(); //Not IE
				} else if(window.ActiveXObject) {
					return new ActiveXObject("Microsoft.XMLHTTP"); //IE
				} else {
					//Display your error message here. 
					//and inform the user they might want to upgrade
					//their browser.
					alert("Your browser doesn't support the XmlHttpRequest object.  Better upgrade to Firefox.");
				}
			}			
			//Get our browser specific XmlHttpRequest object.
			var receiveReq = getXmlHttpRequestObject();		
			//Initiate the asyncronous request.
			function doVote(uID) {
				//If our XmlHttpRequest object is not in the middle of a request, start the new asyncronous call.
				if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
					//Setup the connection as a POST call to vote.php.
					//True explicity sets the request to asyncronous (default).
					var passData = "vote=" + document.getElementById("id_vote").value +'&vote_url=' + document.getElementById("vote_url").value +'&vote_total=' + document.getElementById("vote_total").value +'&id=' + document.getElementById("id_id").value  + '&userid=' + uID	;
					
					receiveReq.open("POST", 'vote.php', true);
					receiveReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					//Set the function that will be called when the XmlHttpRequest objects state changes.
					receiveReq.onreadystatechange = updateVoting; 
		
					//Make the actual request.
					receiveReq.send(passData);

				}			
			}
			//Called every time our XmlHttpRequest objects state changes.
			function updateVoting() {
				//Check to see if the XmlHttpRequests state is finished.
				if (receiveReq.readyState == 4) {
					//Set the contents of our span element to the result of the asyncronous call.
					document.getElementById('ajax_vote').innerHTML = receiveReq.responseText;
				}
			}
			
			
			</script>


</head>
<body bgcolor=#EAE2D3>



<table width=992 border=0 align="center" cellpadding=0 cellspacing=0 bgcolor=#666666>
    <!--DWLayoutTable-->
    <tr>
      <td width=992 height=205 valign=top bgcolor=#2267B5><p align=left><img src=images/top1.jpg width=684 height=205><br>
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
    </tr>
</table>


<div align="center"><img src="images/top2.gif" width="992" height="27"></div>
 <p align="left"><br>
  <?PHP

$title=$_POST['title'];
$url1=$_POST['link1'];
$url2=$_POST['link2'];
$action=$_POST['action'];
$id=$_POST['id'];

$v1_allowed=1;
$v2_allowed=1;

	$connection = @mysql_connect($dbhost, $dbusername, $dbpassword)
    	 or die(mysql_error());
	$db = @mysql_select_db($dbname, $connection) or die(mysql_error());
	

if($action=="appendComp")
{
	//check for duplicate first
	// if duplicate found - get id of existing comparison and change action to viewing
	// if no dupicate then insert new comparison and get new id
	$sql ="SELECT * FROM comparison WHERE  url1 LIKE '" .$url1 ."' AND url2 LIKE '" .$url2 ."'";
	$result=mysql_query($sql) or die(mysql_error()); 
	  if(!result)    
	   {      	echo 'could not run query' .mysql_error();    	exit;      }
	  else if(mysql_num_rows($result)>0)		      
		{      	
			while ($row = mysql_fetch_array($result)) 
			{
				$id= $row['compid'];
			}
			
			echo "<div align=\"center\" style=\"font-family:Arial;font-size:15px;font-weight:bold;\"> A similar comparison is already available : </div>";
			$action=view;
	
		}
	  else
	  {
	  	//create SQL statement and issue query
		$sql = "INSERT INTO comparison
			   (title, url1, url2, date_created) VALUES
			   ('$title', '$url1', '$url2',NOW())";

		$result = @mysql_query($sql,$connection) or die(mysql_error());
		$sql ="SELECT * FROM comparison WHERE title LIKE '" .$title ."' AND url1 LIKE '" .$url1 ."' AND url2 LIKE '" .$url2 ."'";
	
		$result=mysql_query($sql) or die(mysql_error()); 
		while ($row = mysql_fetch_array($result)) 
		{
			$id= $row['compid'];
		}
	  
	  }
}



if($action=="view")
{

$result=mysql_query("SELECT * FROM comparison WHERE compid=" .$id) or die(mysql_error()); 
	while ($row = mysql_fetch_array($result)) 
	{
		$title=$row['title'];
		$url1=$row['url1'];
		$url2=$row['url2'];
		$v1_UP=$row['url1_votesUP'];
		$v1_DOWN=$row['url1_votesDOWN'];
		$v2_UP=$row['url2_votesUP'];
		$v2_DOWN=$row['url2_votesDOWN'];
		
		$query ="select * from uservotes where compid=" .$id ." and userid=" .$_SESSION['userid'];

		$result1 = mysql_query($query);	  
   		   if(!result1)    
			   {      	echo 'could not run query' .mysql_error();    	exit;      }
		  else if(mysql_num_rows($result1)==0)
		      	{      		$v1_allowed=1;		$v2_allowed=1;				}
	      else if(mysql_num_rows($result1)>0)
    		  	{
				     while ($row1 = mysql_fetch_array($result1)) 
					{
						$v1_allowed=$row1['url1'];		$v2_allowed=$row1['url2'];
					}
				}				
		
	}

}


	//To display the pseudo in the textbox 
	
	
	$result=mysql_query("SELECT * FROM user WHERE userid=" .$_SESSION['userid']) or die(mysql_error()); 
	while ($row = mysql_fetch_array($result)) 
	{
		$pseudo=$row['pseudo'];
	}

?>

<table align=center><tr><td>

<br><iframe src=<?php echo $url1 ?>  width=358 height=400 scrolling=yes> </iframe>


</td><td>

<div align=center><br><iframe src=<?php echo $url2 ?> width=358 height=400 scrolling=yes> </iframe>




</td></tr>

</table>


<div align=center>

	<form name=form2 method=post action=loadcomp.php>
	
	<br>

	
	Title : <input name=title type=text id=title size=40 maxlength=1000 align=middle value=<?php echo $title ?> disabled=true style="padding-left:2px;background:#FFF;color:black;"> <br><br><br>

	
	
	
	<input name=link1 type=text id=1ink1 size=40 maxlength=1000 value=<?php echo $url1 ?> disabled=true style="padding-left:2px;background:#FFF;color:black;" >
	

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input name=link2 type=text id=1ink2 size=40 maxlength=1000 value=<?php echo $url2 ?> disabled=true style="padding-left:2px;background:#FFF;color:black;" >
	

</form>

</div>


  
</p>


<div id="ajax_vote">

<form name="form1" method="post" action="javascript:doVote(<?php  echo $_SESSION['userid'] ?>);">
  <table width="605" border="1" align="center">
    <tr> 
<?php

if($v1_allowed)
{
?>
	<!--  If you use the alt attribute in Firefox on images the text will not show on mouse-over as in other browsers.
	Firefox does support mouse-over comments on images if you use a title attribute in the <img> tag.-->

      <td width="126" height="48"><div align="right">
          <input type="image" src="images/thumbup1.jpg" width="41" height="40"  ALT="Thumbs Up for URL 1 (left frame)" TITLE= "contribute a positive vote for left URL"  onclick="document.getElementById('id_vote').value='UP';document.getElementById('vote_url').value=1 ; document.getElementById('vote_total').value=<?php echo $v1_UP+1 ?>"  >
        </div></td>
      <td width="155"><input type="image" src="images/thumbdown1.jpg" width="41" height="40"  ALT="Thumbs Down for URL 1 (left frame)" TITLE= "contribute a negative vote for left URL"  onclick="document.getElementById('id_vote').value='DOWN';document.getElementById('vote_url').value=1 ; document.getElementById('vote_total').value=<?php echo $v1_DOWN+1 ?>"  ></td>
 <?php 
 } 
 else
 {
 ?>
      <td width="126" height="48"><div align="right">
          <input type="image" src="images/thumbup1.jpg" width="41" height="40"  ALT="You already voted for URL1" TITLE= "Not allowed. You already voted for URL1"  onclick="alert('Action not allowed.You already voted for URL1'); return false;"  >
        </div></td>
      <td width="155"><input type="image" src="images/thumbdown1.jpg" width="41" height="40"  ALT="You already voted for URL1" TITLE= "Not allowed. You already voted for URL1" onclick="alert('Action not allowed.You already voted for URL1'); return false;"  ></td>
 
 
 <?php 
 }


if($v2_allowed)
{
?>

       <td width="153"><div align="right">
          <input type="image" src="images/thumbup2.jpg" width="41" height="40" ALT="Thumbs Up for URL 2 (right frame)" TITLE= "contribute a positive vote for right URL" onclick="document.getElementById('id_vote').value='UP';document.getElementById('vote_url').value=2 ; document.getElementById('vote_total').value=<?php echo $v2_UP+1 ?>" >
        </div></td>
      <td width="143"><input type="image" src="images/thumbdown2.jpg" width="41" height="40" ALT="Thumbs Up for URL 2 (right frame)" TITLE= "contribute a negative vote for right URL"  onclick="document.getElementById('id_vote').value='DOWN';document.getElementById('vote_url').value=2 ; document.getElementById('vote_total').value=<?php echo $v2_DOWN+1 ?>" ></td>
<?php 
 }
 else
 {
 ?>
      <td width="153"><div align="right">
          <input type="image" src="images/thumbup2.jpg" width="41" height="40" ALT="You already voted for URL2" TITLE= "Not allowed. You already voted for URL2" name="vote" value="UP" onclick="alert('Action not allowed.You already voted for URL2'); return false;" >
        </div></td>
      <td width="143"><input type="image" src="images/thumbdown2.jpg" width="41" height="40" ALT="You already voted for URL2" TITLE= "Not allowed. You already voted for URL2" name="vote" value="UP" onclick="alert('Action not allowed.You already voted for URL2'); return false;"></td>
  <?php 
 }
 ?>
 
    </tr>
    <tr>
      <td><div style="text-align:right;padding-right:10px;" ><?php echo $v1_UP;?></div></td>
      <td><div style="text-align:left;padding-left:10px;" ><?php echo $v1_DOWN;?></div></td>
      <td><div style="text-align:right;padding-right:10px;" ><?php echo $v2_UP;?></div></td>
      <td><div style="text-align:left;padding-left:10px;" ><?php echo $v2_DOWN;?></div></td>
    </tr>
  </table>    	

  <input type="hidden" name="action" value="vote">
	<input type="hidden" name="vote" id="id_vote">
 	<input type="hidden" name="vote_url" id="vote_url">
    <input type="hidden" name="vote_total" id="vote_total">
	<input type="hidden" name="id" id="id_id" value="<?php echo $id ?>">


</form>


</div>



<div align="center">

  <iframe src="usercomment.php?pseudo=<?php echo $pseudo ; ?>&comp_id=<?php echo $id ; ?>&userid=<?php echo $_SESSION['userid']; ?>" width="900"  height="800" align="middle" frameborder="0" id="comment_frame"></iframe>

</div>

<div align="center" > 
  <p><a href="feed.php?id=<?php echo $id ; ?>" alt="ATOM feed link" TITLE ="ATOM link : http://<?php echo $_SERVER['HTTP_HOST'] ?>/feed.php?id=<?php echo $id ; ?>"  ><img src="images/feed-icon.gif" width="48" height="48" border="0"></a> </p>
  <table width="990" height="63" border="0" background="images/bg_bot.gif">
    <tr>
      <td height="59"><div align="center">
          <div>
            <div align="center">
              <p> <span class="style59">Copyright &copy; 2008- Vox Populi, Inc. All rights are reserved</span></p>
            </div>
          </div>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;    </p>
</div>




</body>
</html>