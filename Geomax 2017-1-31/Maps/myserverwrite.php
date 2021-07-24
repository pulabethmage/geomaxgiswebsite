<?php
require_once ("Database.php");
$db = new DBOperations();

$lat = $_GET['lat'];
$lng = $_GET['lng'];
$details = $_GET['details'];
$mkr = $_GET['mkr'];
$atspd=$_GET['atspd'];
$frspd=$_GET['frspd'];
$tospd=$_GET['tospd'];
$frtme=$_GET['frtme'];
$totme=$_GET['totme'];
$bufrad=$_GET['bufrad'];


$db->Exe_Qry("INSERT INTO markers_tbl (marker_lat,marker_lng,marker_desc,marker_img,at_speed,from_speed,to_speed,from_time,to_time,buffer_radius) VALUES ('$lat','$lng','$details','$mkr','$atspd','$frspd','$tospd','$frtme','$totme','$bufrad');");

$myrslt = $db->Exe_Qry("SELECT MAX(marker_id) FROM markers_tbl;");
$myrow=$db->Next_Record($myrslt);

echo $myrow[0].'|'.$db->Row_Count($db->Exe_Qry("SELECT marker_id FROM markers_tbl;"));

?>