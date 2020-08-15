<?php
		include './../dbconnection/connect.php';
	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	
	
	
	
	//if($adate != ""){
	//$sql= "INSERT INTO requestpost (title, username, departmentid, businessunitid, unitid, tid, availdate, datetime, remarks, cost) VALUES ('$title', '$user', '$depta', '$busse', '$unita', '$trouba' , '$adate', NOW() , '$rem' , '$cost')";
	//}else{
	//$sql= "INSERT INTO requestpost (title, username, departmentid, businessunitid, unitid, tid,  datetime, remarks , cost) VALUES ('$title', '$user',
	//'$depta', '$busse', '$unita', '$trouba' ,  NOW() , '$rem' ,  '$cost')";
	//}

	//echo $sql;
	//$result = mysql_query($sql);
	
	//if($result){
//echo "<script type=\"text/javascript\">window.location.href='it.php' </script>";
//}
//else {
//echo 'Warning: An error has occurred.';
					


?>

<?Php
while (list ($key,$val) = each ($_POST)) {
echo "\$$key = $val";
echo "<br>";
} 

?>