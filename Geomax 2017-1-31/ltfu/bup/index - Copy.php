<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<!-- Functions Area -->
<script>
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

function menu()
{
	
	window.location.assign("#home_pg");
	location.reload();
	
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
       <a hidden="false" id="mebtn" onClick="menu()" class="ui-btn">Home</a>
      
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
  	<a href="#login_pg" class="ui-btn ui-icon-home ui-btn-icon-left">Logout</a>
    <h1 style="font-size:15px; padding-left:20px; padding-right:20px;">Home</h1>
  </div>

   <div data-role="main" class="ui-content">
	<div id="ss">Welcome <b><?php session_start(); echo $_SESSION["username"];?></b>!!!.. </div>
    
    <a href="#" class="ui-btn ui-btn-b">New Membership</a>
    <a href="#" class="ui-btn ui-btn-b">Search Member<br>(Edit,Delete)</a>
    <a href="#" class="ui-btn ui-btn-b">Memberships to be Expired</a> 
    
    
  </div>

  <div data-role="footer">
    <h1 style="font-size:10px;">powered by ssnnetworking</h1>
  </div>
</div> 

<!-- End Home Page -->

<!-- Menu Page -->
<!-- Menu Page -->
<!-- Menu Page -->

<div data-role="page" id="home_pg">
  <div data-role="header">
  	<a href="#login_pg" class="ui-btn ui-icon-power ui-btn-icon-left">Logout</a>
    <h1 style="font-size:15px; padding-left:20px; padding-right:20px;">Home</h1>
  </div>

   <div data-role="main" class="ui-content">
	<div id="ss">Welcome <b><?php echo $_SESSION["username"];?></b>!!!.. </div>
    
    <a href="#newmem_pg" class="ui-btn ui-btn-b">New Membership</a>
    <a href="#" class="ui-btn ui-btn-b">Search Member<br>(Edit,Delete)</a>
    <a href="#" class="ui-btn ui-btn-b">Memberships to be Expired</a> 
    
    
  </div>

  <div data-role="footer">
    <h1 style="font-size:10px;">powered by ssnnetworking</h1>
  </div>
</div> 

<!-- End Menu Page -->

<!-- New Member Page -->
<!-- New Member Page -->

<div data-role="page" id="newmem_pg">
  <div data-role="header">
  	<a href="#home_pg" class="ui-btn ui-icon-home ui-btn-icon-left">Home</a>   
    <h1 style="font-size:15px; margin:auto;"></h1>
    <a href="#login_pg" class="ui-btn ui-icon-power ui-btn-icon-right">Logout</a>
  </div>
  <h1 style="font-size:15px; margin:auto; text-align:center;">Add new Membership</h1>
   
   <div data-role="main" class="ui-content">
      
       <form>
              <div class="ui-field-contain">
              
               <input type="text" name="name" id="name" placeholder="Full Name">
               
               	<select name="memytp" id="memtype" onChange="fillmemno()">
                      <optgroup label="Annual">
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
                
                <input type="text" name="memno" id="memno" placeholder="Membership no"><br>
                
                <hr>
                <label for="jdate">Joined Date</label>
                <input type="date" name="jdate" id="jdate"><br>
                
                <label for="edate">Expiry Date</label>
                <input type="date" name="edate" id="edate">
                <br>
                <hr>
                
                <input type="text" name="memamt" id="memamt" placeholder="Amount" >
                
                <input type="text" name="pamt" id="pamt" placeholder="Paid Amount" onChange="calbalamt()" >
                
                <input type="text" name="bamt" id="bamt" placeholder="Balance Amount" ><br>
                
                <textarea name="remark" id="remark" placeholder="Remarks"></textarea>
                
                <hr>
                <input type="file" id="memimage" name="memimage" class="ui-btn ui-btn-b"> <br>
                
                
                
                <a class="ui-btn ui-btn-b" onClick="insert()">Insert</a>
                
                       
              </div>
      </form>   
  
       
    
  </div>

  <div data-role="footer">
    <h1 style="font-size:10px;">powered by ssnnetworking</h1>
  </div>
</div> 


<!-- End New Member Page -->





</body>
</html>
