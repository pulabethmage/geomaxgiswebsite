<?php
require_once ("Database.php");
$db = new DBOperations();

$pinid = $_GET['pinid'];

$db->Exe_Qry("DELETE FROM markers_tbl WHERE marker_id='$pinid';");

$myrslt = $db->Exe_Qry("SELECT marker_id FROM markers_tbl;");
echo $db->Row_Count($myrslt);
?>