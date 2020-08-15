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

$sql2=mysql_query("select * from approver a where a.username='$username1'");
$row2=mysql_fetch_array($sql2);
$username=$row2['username'];
$first=$row2['first'];

$p=@$_GET['p'];
$sql=mysql_query("SELECT * FROM requestpost r  WHERE r.prioritynumber = '$p'");
$row=mysql_fetch_array($sql);
$user = $row['username'];
$pri=$row['prioritynumber'];
$dept=$row['departmentid'];
$date=$row['datetime'];
$stat=$row['statusid'];
$title=$row['title'];
$cost=$row['cost'];
$adate=$row['availdate'];
$remarks=$row['remarks'];
$unit=$row['unitid'];
$businessunitid=$row['businessunitid'];
$trou=$row['tid'];
$inst=$row['instruct'];
$esti=$row['estimateddate'];
$end=$row['enddate'];
$assi=$row['assignedper'];

?>