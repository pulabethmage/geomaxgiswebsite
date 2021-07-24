<?php

require('connection.php');

	$searchbyname =$_GET['searchbyname1'];
//$uname ='22';
	
	
	
$sql = "SELECT memname,memno FROM memtb WHERE memname LIKE '%$searchbyname%'";

$result = mysql_query($sql,$con);


while ($row = mysql_fetch_array($result))
{
	//$row = mysql_fetch_array($result);

	$memname = $row["memname"];
	$memno = $row["memno"];

	echo $memname."-->".$memno." <br>";
	
}




mysql_close($con);

?>