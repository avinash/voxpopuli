<?php
include('db_connect_inc.php');



	$id=$_POST['id'];

	$v1_allowed=1;
	$v2_allowed=1;

	$connection = @mysql_connect($dbhost, $dbusername, $dbpassword)
    	 or die(mysql_error());
	$db = @mysql_select_db($dbname, $connection) or die(mysql_error());
	
		
	$query="UPDATE comparison SET url" .$_POST['vote_url'] ."_votes" .$_POST['vote'] ." = '" .$_POST['vote_total'] ."' WHERE compid =". $id ;
	$result = @mysql_query($query,$connection) or die(mysql_error());

	$query ="select * from uservotes where compid=" .$id ." and userid=" .$_POST['userid'];
	$result2 = mysql_query($query);	  
	
   	if(!result2)    
			   {      	echo 'could not run query' .mysql_error();    	exit;      }
	else if(mysql_num_rows($result2)==0)
		      	{      		
				
					$query3="INSERT INTO `uservotes` ( `compid` , `userid` , `url" .$_POST['vote_url'] ."` ) VALUES ('" .$id ."', '" .$_POST['userid'] ."', '0')";
					$result3 = @mysql_query($query3,$connection) or die(mysql_error());
				
				}
	else if(mysql_num_rows($result2)>0)
    		  	{
				     while ($row2 = mysql_fetch_array($result2)) 	
					 {
					 $query3 ="UPDATE `uservotes` SET `url" .$_POST['vote_url'] ."` = '0' WHERE `uservotes`.`compid` =" .$id ." AND `uservotes`.`userid` =" .$_POST['userid'] ;
			 		$result3 = @mysql_query($query3,$connection) or die(mysql_error());
					 }
				}
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

		$query ="select * from uservotes where compid=" .$id ." and userid=" .$_POST['userid'];

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

?>


<form name="form1" method="post" action="javascript:doVote(<?php  echo $_POST['userid'] ?>);">
  <table width="605" border="1" align="center">
    <tr> 
<?php

if($v1_allowed)
{
?>
	
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