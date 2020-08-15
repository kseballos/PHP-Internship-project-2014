<?php
		include './../dbconnection/connect.php';
	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

	$title = $_POST['title'];
	$user = $_POST['username'];
	$cost = $_POST['cost'];
	$departmentid = $_POST['departmentid'];
	$controlnum = $_POST['connum'];
	$section = $_POST['section'];
	$cerpnum = $_POST['cerpnum'];
	$datereq = $_POST['datereq'];
	$remarks = $_POST['remarks'];
	$proj = $_POST['proj'];
	$nat= $_POST['nat'];

	if( $cost == "" ){
	$sql1= "INSERT INTO joborderdetails (projectname, username, estimatedcost, departmentid, controlnum, datereq, section,  cerpnum, datetime, remarks, projectman, nature) VALUES ('$title', '$user', '0', '$departmentid', '$controlnum','$datereq', '$section' , '$cerpnum' ,NOW() , '$remarks', '$proj', '$nat')";
	$result = mysql_query($sql1) or die(mysql_error());
	if($result){
echo "<script type=\"text/javascript\">window.location.href='fed.php' </script>";
}
else {
echo 'Warning: An error has occurred.';
					}	
	}else{ 
	$sql1= "INSERT INTO joborderdetails (projectname, username, estimatedcost, departmentid, controlnum, datereq, section,  cerpnum, datetime, remarks, projectman, nature) VALUES ('$title', '$user','$cost', '$departmentid', '$controlnum','$datereq', '$section' , '$cerpnum' ,NOW() , '$remarks', '$proj', '$nat')";
	$result = mysql_query($sql1) or die(mysql_error());
	if($result){
echo "<script type=\"text/javascript\">window.location.href='fed.php' </script>";
}
else {
echo 'Warning: An error has occurred.';
					}	
	}
	}


	//echo $sql1;
	


?>