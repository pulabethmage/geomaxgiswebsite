<?php
require_once ("Database.php");
$db = new DBOperations();

/*$lat = $_GET['lat'];
$lng = $_GET['lng'];
$details = $_GET['details'];
$mkr = $_GET['mkr'];*/

$myrslt = $db->Exe_Qry("SELECT * FROM markers_tbl;");
if ($db->Row_Count($myrslt)>0)
{
	while($myrow=$db->Next_Record($myrslt))	
	{
		echo $myrow[0]."#|*@".$myrow[1]."#|*@".$myrow[2]."#|*@".$myrow[3]."#|*@".$myrow[4]."#|*@".$myrow[5]."#|*@".$myrow[6]."#|*@".$myrow[7]."#|*@".$myrow[8]."#|*@".$myrow[9]."#|*@".$myrow[10]."\n";
	}
}
?>