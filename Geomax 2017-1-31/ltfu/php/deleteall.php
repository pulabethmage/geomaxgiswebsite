<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete all rows</title>
</head>

<?php 
	  require('connection.php');
	  
	  if(isset($_POST['submit']))
	  {
	
	$sql = "DELETE FROM memtb";

if (mysql_query($sql,$con) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
	

	
	// echo $_FILES['userfile']['name'];
	
	
						
			mysql_close($con);
		  
		  
		  		  
		}
	  
	  
	  
	  
	  




?>

<body>

<form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-ajax="false">


<input type="submit" name="submit" />

</form>





</body>
</html>