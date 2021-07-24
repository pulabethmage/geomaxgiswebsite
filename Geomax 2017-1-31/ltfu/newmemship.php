<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<!-- Functions Area -->
<script>
function fillmemno()
{
	document.getElementById("memno").value = document.getElementById("memtype").value + "-";
	
}
function calbalamt()
{
	document.getElementById("bamt").value = parseInt(document.getElementById("memamt").value) - parseInt(document.getElementById("pamt").value);
}



</script>





</head>
<body>


<!-- New Member Page -->
<!-- New Member Page -->

<div data-role="page" id="newmem_pg">
  <div data-role="header">
  	<a href="home.php" class="ui-btn ui-icon-home ui-btn-icon-left">Home</a>   
    <h1 style="font-size:15px; margin:auto;"></h1>
    <a href="index.php" class="ui-btn ui-icon-power ui-btn-icon-right">Logout</a>
  </div>
  <h1 style="font-size:15px; margin:auto; text-align:center;">Add new Membership</h1>
   
   <div data-role="main" class="ui-content">
      <div class="ui-field-contain">
       <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-ajax="false">
              
                 
              
               <input type="text" name="name" id="name" placeholder="Full Name"/>
               
               	<select name="memtype" id="memtype" onChange="fillmemno()">
                      <optgroup label="Annual">
                      <option value="" selected>Select</option>
                        <option value="AIM">AIM</option>
                        <option value="ADM">ADM</option>
                        <option value="ACM">ACM</option>
                        <option value="AFM">AFM</option>
                      </optgroup>
                      <optgroup label="Monthly">
                        <option value="MM">MM</option>
                        <option value="TMM">TMM</option>
                        <option value="SMM">SMM</option>
                        <option value="TWMM">TWMM</option>                        
                      </optgroup>
        		</select>
                
                <input type="text" name="memno" id="memno" placeholder="Membership no"/><br>
                
                <hr>
                <label for="jdate">Joined Date</label>
                <input type="date" name="jdate" id="jdate"/><br>
                
                <label for="edate">Expiry Date</label>
                <input type="date" name="edate" id="edate"/>
                <br>
                <hr>
                
                <input type="text" name="memamt" id="memamt" placeholder="Amount"/>
                
                <input type="text" name="pamt" id="pamt" placeholder="Paid Amount" onChange="calbalamt()" />
                
                <input type="text" name="bamt" id="bamt" placeholder="Balance Amount" /><br>
                
                <textarea name="remark" id="remark" placeholder="Remarks"></textarea>
                
                <hr>
                
                     <input name="userfile" type="file" /><br>
                               
               <input type="submit" name="submit" value="Insert" />         
                       
             
      </form> 
       </div>
      
      <?php
	  
	  if(isset($_POST['submit']))
	  {
		 		  
	$memname = $_POST['name'];
	$memtype = $_POST['memtype'];
	$memno = $_POST['memno'];	
			
	$jdate = $_POST['jdate'];
	$datejj = strtotime($jdate);
	$datej = date('Y-m-d',$datejj);
		
	$edate = $_POST['edate'];
	$dateee = strtotime($edate);
	$datee = date('Y-m-d',$dateee);
	
	$memamt = $_POST['memamt'];
	$pamt = $_POST['pamt'];
	$bamt = $_POST['bamt'];
	$remark = $_POST['remark'];
	
	
	
if(!isset($_FILES['userfile']))
{
    echo '<p>Please select a file</p>';
}
else
{
	
	// echo $_FILES['userfile']['name'];
	

	$imagename = $_FILES['userfile']['name'];
	$imagedata = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
	
		
		
	$con = mysql_connect("localhost","root","");
	if (!$con) 
	{
		die('Could not connect: ' . mysql_error($con));
	}
	
	mysql_select_db("test",$con);

			$sql = "INSERT INTO memtb(memname,memtype,memno,jdate,edate,rdate,memamt,pamt,bamt,remark,imgname,image) VALUES ('".$memname."','".$memtype."','".$memno."','".$datej."','".$datee."','".$datej."','".$memamt."','".$pamt."','".$bamt."','".$remark."','".$imagename."','".$imagedata."')";
			
			$result = mysql_query($sql,$con);
			
			echo $imagename;
						
			mysql_close($con);
		  
		  
		  }
		  
		}
	  
	  
	  
	  
	  ?>  
  
       
    
  </div>

  <div data-role="footer">
    <h1 style="font-size:10px;">powered by ssnnetworking</h1>
  </div>
</div> 


<!-- End New Member Page -->

</body>
</html>
