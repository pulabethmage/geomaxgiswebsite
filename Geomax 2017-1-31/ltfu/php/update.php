<?php
	    
	  if(isset($_POST['submit']))
	  {
		$memnou = $_POST['memnos'];
		 		  
		$memnameu = $_POST['memnames'];
					
		$jdateu = $_POST['jdates'];
		$datejju = strtotime($jdateu);
		$dateju = date('Y-m-d',$datejju);
			
		$edateu = $_POST['rdates'];
		$dateeeu = strtotime($edateu);
		$dateeu = date('Y-m-d',$dateeeu);
		
		$memamtu = $_POST['memamts'];
		$pamtu = $_POST['pamts'];
		$bamtu = $_POST['bamts'];
		$remarku = $_POST['rmarkss'];										
	
	
	
			
				
				require('connection.php');
				// echo $_FILES['userfile']['name'];
				
				
				
				
				if($_FILES['userfileu']['name'] == "")
			{	
				//$imagenameu = $_FILES['userfileu']['name'];
				//$imagedatau = addslashes(file_get_contents($_FILES['userfileu']['tmp_name']));
				
				
				$sql = "UPDATE memtb SET memname ='".$memnameu."',edate='".$dateeu."',rdate='".$dateju."',memamt='".$memamtu."',pamt='".$pamtu."',bamt='".$bamtu."',remark='".$remarku."' WHERE memno='".$memnou."' ";
						
						//$result = mysql_query($sql,$con);
						
						if (mysql_query($sql,$con))
						{
							echo "Record updated successfully";
						} else {
							echo "Error updating record: " . mysql_error($con);
						}
												
						
						//echo "Successfull...";
									
						mysql_close($con);
				
			}
			else
			{
				$imagenameu = $_FILES['userfileu']['name'];
				$imagedatau = addslashes(file_get_contents($_FILES['userfileu']['tmp_name']));
				
				
				$sql = "UPDATE memtb SET memname ='".$memnameu."',edate='".$dateeu."',rdate='".$dateju."',memamt='".$memamtu."',pamt='".$pamtu."',bamt='".$bamtu."',remark='".$remarku."',imgname='".$imagenameu."',image='".$imagedatau."' WHERE memno='".$memnou."' ";
						
						//$result = mysql_query($sql,$con);
						
						if (mysql_query($sql,$con))
						{
							echo "Record updated successfully";
						} else {
							echo "Error updating record: " . mysql_error($con);
						}
												
						
						//echo "Successfull...";
									
						mysql_close($con);
				
				
			}
			
				
				
				
			
						
					  
					  
			
		  
		}
		else 
		{
		echo "update fail...";
		}
	  
	  
	  
	  
	  ?>  