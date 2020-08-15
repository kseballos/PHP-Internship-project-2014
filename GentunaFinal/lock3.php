<?php
include '././dbconnection/connect.php';
$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	session_start();


//$username1 =  $_SESSION['user'];

//$sql2=mysql_query("select * from loginacc la, admin a where a.username= la.username='$username1'");
//$row2=mysql_fetch_array($sql2);
//$username=$row2['username'];
//$first=$row2['first'];



?>