<?php
		include './../dbconnection/connect.php';
$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	session_start();


$username1 =  $_SESSION['user'];

$sql2=mysql_query("select * from  user a where a.username='$username1'");
$row2=mysql_fetch_array($sql2);
$username=$row2['username'];
$first=$row2['first'];

$p=$_GET['p'];
$sql=mysql_query("SELECT * FROM joborderdetails r  WHERE r.prioritynumber = $p");
$row=mysql_fetch_array($sql);
$pri=$row['prioritynumber'];
$departmentid=$row['departmentid'];
$date=$row['datetime'];
$stat=$row['statusid'];
$projectname=$row['projectname'];
$cost=$row['estimatedcost'];
$datereq=$row['datereq'];
$remarks=$row['remarks'];
$controlnum=$row['controlnum'];
$section=$row['section'];
$cerpnum=$row['cerpnum'];
$instruct=$row['instruct'];
$proj=$row['projectman'];
$esti=$row['estimateddate'];
$end=$row['enddate'];
$assi=$row['assignedper'];
$natt=$row['nature'];

?>