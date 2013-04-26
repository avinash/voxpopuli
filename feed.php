<?php
include("db_connect.php");

// prepare the query string

if (isset($_REQUEST['id']))
{
// prepare the query string
$query = "select * from comparison  where compid=".$_REQUEST['id'] ;
}
else
{
$query = "select * from comparison " ;
}

// execute the query 
$result = mysql_query($query) or die('Error, query failed. ' . mysql_error());

	while($row = mysql_fetch_array($result))
	{
		$compIntro1 = $row['url1'] ." (+" .$row['url1_votesUP'] ." | -" .$row['url1_votesDOWN'] .")";
		$compIntro2 = $row['url2'] ." (+" .$row['url2_votesUP'] ." | -" .$row['url2_votesDOWN'] .")";
		
	}


echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?".">"; 



 echo '
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="fr">

	<title>Voxpopuli.com - The voice of the people</title>
	<subtitle> [ ' .$compIntro1 ."   ] v/s     [ ".$compIntro2 .' ]</subtitle>
	<link rel="alternate" type="application/xml" href="http://localhost/voxpopuli/feed.php" />
	<link rel="self" type="application/atom+xml" href="http://localhost/voxpopuli/feed.php" />
	<author><name>Zeinabee Woozeer</name></author>
	<id>http://localhost/voxpopuli/feed.php</id>
	<updated>2008-03-26T13:54:00Z</updated>
';



if (isset($_REQUEST['id']))
{
// prepare the query string
$query = "select id, comp_id, name, title,message,entry_date 
		 from comment inner join comparison 
		where comparison.compid=comment.comp_id  
		and comp_id=".$_REQUEST['id'] ."
		order by id desc "; 
}
else
{
$query = "select id, comp_id, name, title,message,entry_date  
		 from comment inner join comparison 
		where comparison.compid=comment.comp_id  
		order by id desc "; 

}
// execute the query 
$result = mysql_query($query) or die('Error, query failed. ' . mysql_error());

	while($row = mysql_fetch_array($result))
	{

echo '
	<entry>
		<title>' .$row['title'] .'   --    By '.$row['name'] .'</title>
		<link rel="alternate" type="application/xml" href="http://localhost/voxpopuli/feed.php"/>
		<summary>' .$row['message'] .'</summary>	
		<updated>'.date(DATE_ATOM,strtotime($row['entry_date'])) .' </updated>
		<id>http://localhost/voxpopuli/feed.php</id>
	</entry> 
	';	
	}






echo '</feed> '; 

?>
