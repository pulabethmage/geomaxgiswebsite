<?php

require('connection.php');

	//$uname =$_GET['id'];
//$uname ='22';
	
	
	
$sql = "SELECT * FROM memtb WHERE bamt > 0 ";

$result = mysql_query($sql,$con);

$num_rows = mysql_num_rows($result);





		 echo "<table>";
		//echo "<th  style='padding:5px'>Image</th>";
		echo "<th  style='padding:5px'>Name</th>";
		echo "<th  style='padding:5px'>Memid</th>";
		echo "<th  style='padding:5px'>Bal Amount</th>";
		echo "<th  style='padding:5px'>Remarks</th>";
		if ($num_rows > 0) 
		{
			// output data of each row
			while($row = mysql_fetch_array($result)) 
			{
				$image = $row["image"];
				$memno = $row["memno"];
				$memname = $row["memname"];
				$jdates = $row["jdate"];
				$edates = $row["edate"];
				
				$memamts = $row["memamt"];
				$pamts = $row["pamt"];
				$bamts = $row["bamt"];
				$rmarkss = $row["remark"];

						
		
			//echo $image;
			
		  echo "<tr >";		  
		  	echo "<td style='padding:0 5px 0 5px'>$memname</td>";
			echo "<td style='padding:0 5px 0 5px'>$memno</td>";
			echo "<td style='padding:0 5px 0 5px'>$bamts</td>";
			echo "<td style='padding:0 5px 0 5px'>$rmarkss</td>";
		 echo " </tr>";
		 

				
			}
		} 
		else 
		{
			echo "0 results";
		}
		
		echo "</table>";
		 
		 
		 
		 


mysql_close($con);

?>