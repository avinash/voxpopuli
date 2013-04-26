<?php
// include the database configuration and
include("db_connect.php");




// check if the form is submitted
if(isset($_POST['btnSign']))
{
	// get the input from $_POST variable
	// trim all input to remove extra spaces
	$name    = trim($_POST['txtName']);
	$email   = trim($_POST['txtEmail']);
	$url     = trim($_POST['txtUrl']);
	$message = trim($_POST['mtxMessage']);
	$comp_id = $_REQUEST['comp_id'];
	$userid = $_REQUEST['userid'];
	
	
	// escape the message ( if it's not already escaped )
	if(!get_magic_quotes_gpc())
	{
		$name    = addslashes($name);
		$message = addslashes($message);
	}
	
	// if the visitor do not enter the url
	// set $url to an empty string
	if ($url == 'http://')
	{
		$url = '';
	}
	
	// prepare the query string
	$query = "INSERT INTO comment (name, comp_id, user_id, email, url, message, entry_date) " .
	         "VALUES ('$name',$comp_id, $userid, '$email', '$url', '$message', current_date)";

	// execute the query to insert the input to database
	// if query fail the script will terminate		 
	mysql_query($query) or die('Error, query failed. ' . mysql_error());
	
	// redirect to current page so if we click the refresh button 
	// the form won't be resubmitted ( as that would make duplicate entries )
	header('Location: ' . $_SERVER['REQUEST_URI']);
	
	// force to quite the script. if we don't call exit the script may
	// continue before the page is redirected
	exit;
}
?>
<html>
<head>
<title>User Comments</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<script language="JavaScript">

function checkForm()
{
	// the variables below are assigned to each
	// form input 


	var gname, gemail, gurl, gmessage;
	with(window.document.commentform)
	{
		gname    = txtName;
		gemail   = txtEmail;
		gurl     = txtUrl;
		gmessage = mtxMessage;
	}
	
	// if name is empty alert the visitor
	if(trim(gname.value) == '')
	{
		alert('Please enter your name/pseudo');
		gname.focus();
		return false;
	}
	// alert the visitor if email is empty or the format is not correct 
	else if(trim(gemail.value) != '' && !isEmail(trim(gemail.value)))
	{
		alert('Please enter a valid email address or leave it blank');
		gemail.focus();
		return false;
	}
	// alert the visitor if message is empty
	else if(trim(gmessage.value) == '')
	{
		alert('Please enter your comments');
		gmessage.focus();
		return false;
	}
	else
	{
		// when all input are correct 
		// return true so the form will submit		
		return true;
	}
}

/*
Strip whitespace from the beginning and end of a string
Input  : a string
Output : the trimmed string
*/
function trim(str)
{
	return str.replace(/^\s+|\s+$/g,'');
}

/*
Check if a string is in valid email format. 
Input  : the string to check
Output : true if the string is a valid email address, false otherwise.
*/
function isEmail(str)
{
	var regex = /^[-_.a-z0-9]+@(([-a-z0-9]+\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i;
	return regex.test(str);
}
</script>


<style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}

</style>
</head>
<body bgcolor="#EAE2D3">

<div align="center">


<?php


// how many comment entries to show per page
$rowsPerPage = 10;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use the value as page number
if(isset($_REQUEST['page']))
{
	$pageNum = $_REQUEST['page'];
}

// counting the offset ( where to start fetching the entries )
$offset = ($pageNum - 1) * $rowsPerPage;



// prepare the query string
$query = "SELECT id, name, email, url, message, DATE_FORMAT(entry_date, '%d.%m.%Y') ".
         "FROM comment WHERE comp_id=" .$_REQUEST['comp_id'] .
		 " ORDER BY id DESC ".            // using ORDER BY to show the most current entry first
		 " LIMIT $offset, $rowsPerPage";  // LIMIT is the core of paging



// execute the query 
$result = mysql_query($query) or die('Error, query failed. ' . mysql_error());

// if the commentform is empty show a message
if(mysql_num_rows($result) == 0)
{
?>
No comment available
<?php
}
else
{
	// get all commenform entries
	while($row = mysql_fetch_array($result))
	{
		// list() is a convenient way of assign a list of variables
		// from an array values 
		list($id, $name, $email, $url, $message, $date) = $row;

		// change all HTML special characters,
		// to prevent some nasty code injection
		$name    = htmlspecialchars($name);
		$message = htmlspecialchars($message);		

		// convert newline characters ( \n OR \r OR both ) to HTML break tag ( <br> )
		$message = nl2br($message);
?>



<table width="400" border="1" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
 <tr> 
  <td align="left"> <div style="float:left;width:310px;"><a href="mailto:<?=$email;?>" class="email"> 
       <?=$name;?>
       </a>  </div>
      <div style="float:right;text-align:right;width:75px;" ><small><?=$date;?> </small></div>
     </td>
  </tr>
 <tr> 
  <td> 
   <?=$message;?>
   <?php
   		// if the visitor input her homepage url show it
		if($url != '')
		{   
			// make the url clickable by formatting it as HTML link
			$url = "<a href='$url' target='_blank'>$url</a>";
?>
   <br> <small>Homepage : <?=$url;?></small> 
   <?php
		}
?>
  </td>
 </tr>
</table>
<br>
<?php
	} // end while

// below is the code needed to show page numbers

// count how many rows we have in database
$query   = "SELECT COUNT(id) AS numrows FROM comment WHERE comp_id=" .$_REQUEST['comp_id'] ;
$result  = mysql_query($query) or die('Error, query failed. ' . mysql_error());
$row     = mysql_fetch_array($result, MYSQL_ASSOC);
$numrows = $row['numrows'];

// how many pages we have when using paging?
$maxPage  = ceil($numrows/$rowsPerPage);
$nextLink = '';

// show the link to more pages ONLY IF there are 
// more than one page
if($maxPage > 1)
{
	// this page's path
	$self     = $_SERVER['PHP_SELF'];
	
	// we save each link in this array
	$nextLink = array();
	
	// create the link to browse from page 1 to page $maxPage
	for($page = 1; $page <= $maxPage; $page++)
	{
		$nextLink[] =  "<a href=\"$self?page=$page&pseudo=" .$_GET['pseudo']  ."&userid=" .$_REQUEST['userid'] ."&comp_id=" .$_REQUEST['comp_id'] ."\">$page</a>";
	}
	
	// join all the link using implode() 
	$nextLink = "Go to page : " . implode(' &raquo; ', $nextLink);
}


?>
<table width="400" border="0" cellpadding="2" cellspacing="0">
 <tr> 
  <td align="right" class="text"> 
   <?=$nextLink;?>
  </td>
 </tr>
</table>
<?php
}

?>
<br>
<p class="style1">Post Comment in the form below : </p>
<form method="post" name="commentform">
  <div align="center"  style="width:425px;padding:2px;border:1px solid #CCC;">
    <table width="400" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" >
      <tr>
        <td width="100">Name:</td>
        <td>
          <div align="left">
            <input name="txtName" type="text" id="txtName2" size="30" maxlength="50" disabled="true" value="<?php echo $_GET['pseudo'] ?>" style="color:black;font-style:italic;background:white" >
            </div></td>
      </tr>
      <tr>
        <td width="100">Email</td>
        <td>
          <input name="txtEmail" type="text" id="txtEmail" size="30" maxlength="50"></td>
      </tr>
      <tr>
        <td width="100">Website URL</td>
        <td>
          <input name="txtUrl" type="text" id="txtUrl" value="http://" size="30" maxlength="50"></td>
      </tr>
      <tr>
        <td width="100">Comments:</td>
        <td>
          <textarea name="mtxMessage" cols="40" rows="5" id="mtxMessage"></textarea></td>
      </tr>
      <tr>
        <td width="100">&nbsp;</td>
        <td>
          <input name="btnSign" type="submit" id="btnSign" value="Submit comment" onClick="document.getElementById('txtName2').disabled=false;return checkForm();">
&nbsp;&nbsp;        <img src="images/Forums.jpg" width="51" height="51"></td>
      </tr>
    </table>
	<input type="hidden" name="comp_id" value="<?php echo $_REQUEST['comp_id'] ;?>" >
	<input type="hidden" name="userid" value="<?php echo $_REQUEST['userid'] ;?>" >
  </div>
</form>
<script>
parent.document.getElementById("comment_frame").height=document.height+50;
</script>
</div>

</body>
</html>
