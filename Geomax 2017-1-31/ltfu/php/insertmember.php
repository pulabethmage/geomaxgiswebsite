<?php

//memname;
//memtype;
//memno;
//jdate;
//edat;
//memamt;
//pamt;
//bamt;
//remark
//imgname
//image

	$memname = $_GET['memname'];
	$memtype = $_GET['memtype'];
	$memno = $_GET['memno'];	
			
	$jdate = $_GET['jdate'];
	$datejj = strtotime($jdate);
	$datej = date('Y-m-d',$datejj);
		
	$edate = $_GET['edate'];
	$dateee = strtotime($edate);
	$datee = date('Y-m-d',$dateee);
	
	$memamt = $_GET['memamt'];
	$pamt = $_GET['pamt'];
	$bamt = $_GET['bamt'];
	$remark = $_GET['remark'];
	
	$imgname = $_GET['imagename'];
	
	
	
	
	$imagename = mysql_real_escape_string($_FILES[$imgname]["name"]);
	$imagecontent = mysql_real_escape_string(file_get_contents($_FILES[$imgname]["tmp_name"]));
	//$imagetype = mysql_real_escape_string($_FILE[$imgname]["type"]);
	
	
	
	
		
	require('connection.php');

//memname;
//memtype;
//memno;
//jdate;
//edat;
//memamt;
//pamt;
//bamt;
//remark
	

$sql = "INSERT INTO memtb(memname,memtype,memno,jdate,edate,rdate,memamt,pamt,bamt,remark,imgname,image) VALUES ('".$memname."','".$memtype."','".$memno."','".$datej."','".$datee."','".$datej."','".$memamt."','".$pamt."','".$bamt."','".$remark."','".$imagename."','".$imagecontent."')";

$result = mysql_query($sql,$con);

echo "Successfully Inserted";
echo $imgname;




mysql_close($con);

?>