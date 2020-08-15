<?php
include '././dbconnection/connect.php';
	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	session_start();

	$connect = mysql_select_db($database , $dbhandle);
	
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	
		if(!isset($_POST['user']) || !isset($_POST['pass'])){
		}else if($_POST['user']=="" || $_POST['pass']==""){
		}else{
		$myusername = $_POST['user'];
		$mypassword = $_POST['pass'];
	//	$work = $_POST['work']    $work == 'joborder';
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	
	$query  = "SELECT * FROM loginacc WHERE username='$myusername' and password='$mypassword' ";
	$result = mysql_query($query);
	
	$row=mysql_fetch_array($result);
	$count = mysql_num_rows($result);
	$we=$row['usertype'];
	
	
	if($count ==1 && $we == 'admin' ) {
	$_SESSION['user']=$myusername;
	echo "<script type=\"text/javascript\">window.location.href='admin/adminHome.php' </script>";
	//
	}
	else if ($count ==1 && $we == 'scheduler'){
	$_SESSION['user']=$myusername;
	echo "<script type=\"text/javascript\">window.location.href='scheduler/schedHome.php' </script>";
	}
	else if ($count ==1 && $we == 'approver'){
	$_SESSION['user']=$myusername;
	echo "<script type=\"text/javascript\">window.location.href='approver/appHome.php' </script>";
	}
	else if ($count ==1 && $we == 'user') {
	$_SESSION['user']=$myusername;
	echo "<script type=\"text/javascript\">window.location.href='users/index-2.php' </script>";
	}
	else {
	echo "<section><div style=\"color: #FF0000\"> Incorrect Username or Password</div></section>";
	}
	}
	}
	
	
	?>