<?php

require('connection.php');

	$uname =$_GET['id'];
//$uname ='22';
	
	
	
$sql = "SELECT * FROM memtb WHERE memno = '$uname'";

$result = mysql_query($sql,$con);

$row = mysql_fetch_array($result);
$image = $row["image"];
$memname = $row["memname"];
$jdates = $row["jdate"];
$edates = $row["edate"];

$memamts = $row["memamt"];
$pamts = $row["pamt"];
$bamts = $row["bamt"];
$rmarkss = $row["remark"];



// Start the session.$_SESSION["username"]."|$|"

//header("content-type: image/jpeg");


echo $image."|$|".$memname."|$|".$jdates."|$|".$edates."|$|".$memamts."|$|".$pamts."|$|".$bamts."|$|".$rmarkss."|$|";



mysql_close($con);

?>