<?php

	
	$con = mysql_connect("localhost","manelb3","bY6#kD3Cs@gT7");
	if (!$con) 
	{
		die('Could not connect: ' . mysql_error($con));
	}
	
	mysql_select_db("manelb3_ltfudb",$con);




?>