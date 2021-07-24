<?php 
	  require('connection.php');
	  
	  $memnodelete = $_GET['memnodelete'];  
	  
	
	$sql = "DELETE FROM memtb WHERE memno = '$memnodelete'";

if (mysql_query($sql,$con) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}
	

					
			mysql_close($con);




?>

