<?php

		
require('connection.php');
		
	$uname = $_GET['uname'];
	$pass = $_GET['pass'];	
	
	
	

$sql = "SELECT name,type FROM logintb WHERE uname = '$uname' AND pass = '$pass'";

$result = mysql_query($sql,$con);

$row = mysql_fetch_array($result);
$name = $row["name"];
$type = $row["type"];


// Start the session.$_SESSION["username"]."|$|"

session_start();
$_SESSION["username"] = $name;


echo $name."|$|".$type."|$|";

mysql_close($con);

?>