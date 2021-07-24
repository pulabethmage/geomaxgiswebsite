<?php

require('connection.php');

		$expirymemdate =$_GET['expirymemdate'];
		
		$exdatee = strtotime($expirymemdate);
		$expirydatee_s = date('Y-m-01',$exdatee);
		$expirydatee_l = date('Y-m-t',$exdatee);
		
				
		$sql = "SELECT * FROM memtb WHERE edate BETWEEN '$expirydatee_s' AND '$expirydatee_l'";
		
		$result = mysql_query($sql,$con);
		$num_rows = mysql_num_rows($result);

		
		//$row = mysql_fetch_array($result);
		
		echo "<table>";
		
		echo "<th  style='padding:5px'>Name</th>";
		echo "<th  style='padding:5px'>Memid</th>";
		echo "<th  style='padding:5px'>Joined Date</th>";
		echo "<th  style='padding:5px'>Expiry Date</th>";
		
		if ($num_rows > 0) 
		{
			// output data of each row
			while($row = mysql_fetch_array($result)) 
			{
				$memid =  $row["memno"];
				$memname = $row["memname"];
				$jdates = $row["jdate"];
				$edates = $row["edate"];
				
				$memamts = $row["memamt"];
				$pamts = $row["pamt"];
				$bamts = $row["bamt"];
				$rmarkss = $row["remark"];

				//echo $memname."|$|".$jdates."|$|".$edates."|$|".$memamts."|$|".$pamts."|$|".$bamts."|$|".$rmarkss."|$|<br><br>";
		
		
		
		  echo "<tr >";		  
			echo "<td style='padding:0 5px 0 5px'>$memname</td>";
			echo "<td style='padding:0 5px 0 5px'>$memid</td>";
			echo "<td style='padding:0 5px 0 5px'>$jdates</td>";
			echo "<td style='padding:0 5px 0 5px'>$edates</td>";
		 echo " </tr>";
		 
		 
		 //echo " <tr>";		 
//		echo "	<td>Row 2 Cell 1</td>";
//			echo "<td>Row 2 Cell 2</td>";
//		 echo " </tr>";
		 
		
				
				
			}
		} 
		else 
		{
			echo "0 results";
		}
		
		echo "</table>";
		



		mysql_close($con);

?>