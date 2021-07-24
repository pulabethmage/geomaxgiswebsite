<?php
require_once ("Database.php");
$db = new DBOperations();

$pinid = $_GET['pinid'];
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



$db->Exe_Qry("UPDATE markers_tbl SET marker_lat='$lat', marker_lng='$lng', marker_desc='$details', marker_img='$mkr', at_speed='$atspd', from_speed='$frspd', to_speed='$tospd', from_time='$frtme', to_time='$totme', buffer_radius='$bufrad' WHERE marker_id='$pinid';");

?>