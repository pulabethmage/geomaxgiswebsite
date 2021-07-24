	
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<!-- Functions Area -->


<script>


function searchmem()
{
	
	
	var idno = document.getElementById('memno').value;
	
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
			
				
				document.getElementById('img001').src ="php/image.php?id="+idno;	
				document.getElementById('memname').value= memname;		
												
					
			    
            }
        };
        xmlhttp.open("GET","php/image.php?id="+idno,true);
        xmlhttp.send();	
	
	
}



</script>





</head>
<body>


<!-- search Member Page -->
<!-- search Member Page -->

<div data-role="page">
  <div data-role="header">
  	<a href="home.php" class="ui-btn ui-icon-home ui-btn-icon-left">Home</a>   
    <h1 style="font-size:15px; margin:auto;"></h1>
    <a href="#login_pg" class="ui-btn ui-icon-power ui-btn-icon-right">Logout</a>
  </div>
  <h1 style="font-size:15px; margin:auto; text-align:center;">Search Membership</h1>
   
   <div data-role="main" class="ui-content">
      
       <form>
              <div class="ui-field-contain">
              
                <input type="text" name="memno" id="memno" placeholder="Membership no"/><br>
                <a class="ui-btn ui-btn-b" onClick="searchmem()">Search</a>
                
                
                
                <img id="img001" >
                
                <input type="text" name="memname" id="memname" placeholder="Member Name"/>
                
                
                       
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
