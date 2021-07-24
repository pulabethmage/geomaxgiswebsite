<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
<script src="jquery.mobile-1.4.5/jquery-1.12.0.min.js"></script>
<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>

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


function login()
{
	
	var uname = document.getElementById('uname').value;
	var pass = document.getElementById('pass').value;
	
	  if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			 
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
						
				var details = new Array();
			
				details = xmlhttp.responseText.split("|$|");
			
				var logname = details[0];			
			    var logtype = details[1];
				
				if("admin"==details[1])
				{
								
					document.getElementById('loginbtn').hidden = "true";
					document.getElementById('loginbtn').className = "";
					
					document.getElementById('logoutbtn').hidden = "false";
					document.getElementById('logoutbtn').className = "ui-btn";
					
					document.getElementById('mebtn').className = "ui-btn";
					
					
									
									
				}
				
					
					
			    
            }
        };
        xmlhttp.open("GET","php/login.php?uname="+uname+"&pass="+pass,true);
        xmlhttp.send();
	
}


function logout()
{
		
		 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			 
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
						
				
			
				details = xmlhttp.responseText;				
								
			    
					alert (details);
						
					document.getElementById('loginbtn').hidden = "false";
					document.getElementById('loginbtn').className = "ui-btn";
					
					document.getElementById('logoutbtn').hidden = "true";
					document.getElementById('logoutbtn').className = "";
					
					document.getElementById('mebtn').hidden = "true";
					document.getElementById('mebtn').className = "";
									
					
			    
            }
        };
        xmlhttp.open("GET","php/logout.php",true);
        xmlhttp.send();	
	
	
	
}


function searchmem()
{
	
	
	var idno = document.getElementById('memnos').value;
	
		 if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			 
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
						
				
					var details = new Array();
					details = xmlhttp.responseText.split("|$|");
					
					var memimage = details[0];			
			   		var memname = details[1];
					var jdates = details[2];
					var rdates = details[3];
					var memamts = details[4];
					var pamts = details[5];
					var bamts = details[6];
					var rmarkss = details[7];
			
				
				document.getElementById('img001').src ="php/image.php?id="+idno;	
				document.getElementById('memname').value= memname;	
				document.getElementById('jdates').value= jdates;	
				document.getElementById('rdates').value= rdates;
				
				document.getElementById('memamts').value= memamts;	
				document.getElementById('pamts').value= pamts;	
				document.getElementById('bamts').value= bamts;	
				document.getElementById('rmarkss').value= rmarkss;	
				
				
												
					
			    
            }
        };
        xmlhttp.open("GET","php/image.php?id="+idno,true);
        xmlhttp.send();	
	
	
}



</script>





</head>
<body>


<!-- Login Page -->
<!-- Login Page -->
<!-- Login Page -->

<div data-role="page" id="login_pg">
  <div data-role="header">
    <h1 style="font-size:18px; margin-left:0;margin-right:0;padding-bottom:0;">LIFETIME FITNESS</h1>
    <p style="text-align:center; font-size:12px; margin-left:0;margin-right:0; padding-top:0;" >Udahamulla</p>
  </div>

   <div data-role="main" class="ui-content">
    <p>Please Login!!</p>
    
    <form>
      <label for="uname" class="ui-hidden-accessible">Username</label>
      <input type="text" name="uname" id="uname" placeholder="User name...">
      
      <label for="pass" class="ui-hidden-accessible">Password</label>
      <input type="password" name="pass" id="pass" placeholder="Password...">
      
      
       <a hidden="false" id="loginbtn" onClick="login()" class="ui-btn">Login</a>
       <a hidden="true" id="logoutbtn" onClick="logout()">Logout</a>
       <a hidden="false" id="mebtn" href="#home_pg" class="ui-btn">Home</a>
      
    </form>
            
  </div>

  <div data-role="footer">
    <h1></h1>
  </div>
</div> 

<!-- End Login Page -->


<!-- Home Page -->
<!-- Home Page -->
<!-- Home Page -->


<div data-role="page" id="home_pg">
  <div data-role="header">
  	<a href="index.php" class="ui-btn ui-icon-home ui-btn-icon-left">Logout</a>
    <h1 style="font-size:15px; padding-left:20px; padding-right:20px;">Home</h1>
  </div>

   <div data-role="main" class="ui-content">
	<div id="ss">Welcome <b><?php session_start(); echo $_SESSION["username"];?></b>!!!.. </div>
    
    <a href="#newmem_pg" class="ui-btn ui-btn-b">New Membership</a>
    <a href="#search_pg" class="ui-btn ui-btn-b">Search Member<br>(Edit,Delete)</a>
    <a href="#search_pg" class="ui-btn ui-btn-b">Memberships to be Expired</a> 
    
    
  </div>

  <div data-role="footer">
    <h1 style="font-size:10px;">powered by ssnnetworking</h1>
  </div>
</div> 

<!-- End Home Page -->


<!-- search Member Page -->
<!-- search Member Page -->

<div data-role="page" id="search_pg">
  <div data-role="header">
  	<a href="#home_pg" class="ui-btn ui-icon-home ui-btn-icon-left">Home</a>   
    <h1 style="font-size:15px; margin:auto;"></h1>
    <a href="index.php" class="ui-btn ui-icon-power ui-btn-icon-right">Logout</a>
  </div>
  <h1 style="font-size:15px; margin:auto; text-align:center;">Search Membership</h1>
   
   <div data-role="main" class="ui-content">
      
       <form>
              <div class="ui-field-contain">
              
                <input type="text" name="memnos" id="memnos" placeholder="Membership no"/>
                <a class="ui-btn ui-btn-b" onClick="searchmem()">Search</a>
                
               <div align="center"> <img id="img001" style="max-height:100%;max-width:100%;" ></div>
                
                <label>Member Name :</label>
                 <input type="text" name="memname" id="memname" placeholder="Member Name"/><br>
                 
                 <label>Joined Date :</label>
                 <input type="date" id="jdates" placeholder="Joined Date" /><br>
                 <label>Expiry Date :</label>
                 <input type="date" id="rdates" placeholder="Ending Date" /><br>
                 
                 <label>Membership Amount :</label>
                 <input type="text" id="memamts" placeholder="Mem Amount" /><br>
                 <label>Paid Amount :</label>
                 <input type="text" id="pamts" placeholder="Paid Amount" /><br>
                 <label>Balance Amount :</label>
                 <input type="text" id="bamts" placeholder="Bal Amount" /><br>
                 <label>Remarks :</label>
                 <input type="text" id="rmarkss" placeholder="Remarks" /><br>
                 
                  <a class="ui-btn ui-btn-b" onClick="update()">Update</a><br>
                  <a class="ui-btn ui-btn-b" onClick="delete()">Delete</a>              
                
                       
              </div>
      </form>   
  
       
    
  </div>

  <div data-role="footer">
    <h1 style="font-size:10px;">powered by ssnnetworking</h1>
  </div>
</div> 


<!-- search Member Page -->


<!-- New Member Page -->
<!-- New Member Page -->

<div data-role="page" id="newmem_pg">
  <div data-role="header">
  	<a href="#home_pg" class="ui-btn ui-icon-home ui-btn-icon-left">Home</a>   
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
	  
	  require('php/connection.php');
	  
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
