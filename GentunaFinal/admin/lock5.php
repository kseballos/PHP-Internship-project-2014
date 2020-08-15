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

$p=@$_GET['p'];	
$sql=mysql_query("SELECT s.username,s.departmentid, s.first,s.last FROM user s ,department d where  s.departmentid=d.deptname and s.username = '$p'");
$row=mysql_fetch_array($sql);
$user=$row['username'];
$first1=$row['first'];
$last1=$row['last'];
$dept1=$row['departmentid'];
$sql1=mysql_query("SELECT password FROM loginacc where username = '$p'");
$row3=mysql_fetch_array($sql1);
$pass1=$row3['password'];



$sql2=mysql_query("select * from loginacc la, admin a where a.username= la.username='$username1'");
$row2=mysql_fetch_array($sql2);
$username=$row2['username'];
$first=$row2['first'];
$last=$row2['last'];
$dept=$row2['departmentid'];



?>