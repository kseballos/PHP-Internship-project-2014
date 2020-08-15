<?php
		include './../dbconnection/connect.php';

	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

	
	$deptaid = $_POST['deptaid'];	
	$deptaname = $_POST['deptaname'];
	
	//$temp =  '0000/00/00' ;
	
	
	$sql= "INSERT INTO department (departmentid, deptname) VALUES ('$deptaid', '$deptaname')";
	}

	//echo $sql;
	$result = mysql_query($sql);
	
	if($result){
echo "<script type=\"text/javascript\">window.location.href='department.php' </script>";
}
else {
echo 'Warning: An error has occurred.';
					}	


?>

<?Php
while (list ($key,$val) = each ($_POST)) {
echo "\$$key = $val";
echo "<br>";
} 

?>