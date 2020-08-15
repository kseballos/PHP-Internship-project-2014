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
	$depta = $_POST['departmentid'];
	$busse = $_POST['businessunitid'];
	$unita = $_POST['unitid'];
	$trouba = $_POST['tid'];
	$adate = $_POST['availdate'];
	$rem = $_POST['remarks'];
	
	if($adate != ""){
	$sql= "INSERT INTO requestpost (title, username, departmentid, businessunitid, unitid, tid, availdate, datetime, remarks) VALUES ('$title', '$user', '$depta', '$busse', '$unita', '$trouba' , '$adate', NOW() , '$rem')";
	}else{
	$sql= "INSERT INTO requestpost (title, username, departmentid, businessunitid, unitid, tid,  datetime, remarks) VALUES ('$title', '$user',
	'$depta', '$busse', '$unita', '$trouba' ,  NOW() , '$rem')";
	}

	//echo $sql;
	$result = mysql_query($sql);
	
	if($result){
echo "<script type=\"text/javascript\">window.location.href='it.php' </script>";
}
else {
echo 'Warning: An error has occurred.';
					}	

}
?>