<?php
require_once ("Database.php");
$db = new DBOperations();

$pid = $_GET['pid'];

if ($pid==' ')
{
	$myrslt = $db->Exe_Qry("SELECT marker_lat,marker_lng FROM markers_tbl WHERE marker_id<>'$pid';");
}
else
{
	$myrslt = $db->Exe_Qry("SELECT marker_lat,marker_lng FROM markers_tbl;");
}
if ($db->Row_Count($myrslt)>0)
{
	while($myrow=$db->Next_Record($myrslt))	
	{
		echo $myrow[0]."|".$myrow[1]."\n";
	}
}
?>