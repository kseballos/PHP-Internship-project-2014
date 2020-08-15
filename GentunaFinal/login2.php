<!DOCTYPE html>
<html>
  
<head>
    <title>
IRequest- Online JO/Service/Support Submission    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><script src="../../../code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script><script src="../../../code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><script src="javascripts/bootstrap.min.js" type="text/javascript"></script><script src="javascripts/modernizr.custom.js" type="text/javascript"></script><script src="javascripts/main.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body class="login2">
    <!-- Login Screen -->
    <div class="login-wrapper">
      <a href="Home.php"> <center><img width="420" src="logo.png" /></center></a>
      <form method="POST" action=" ">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-envelope"></i></span><input class="form-control" placeholder="Username" type="text" name="user">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-lock"></i></span><input id="password" class="form-control" placeholder="Password" type="password" name="pass">
          </div>
        </div>
		<!-- <div class="form-group" >
            <div class="col-md-7">
              <center><label class="radio-inline"><input name="work" type="radio" value="joborder"><span>Job Order</span></label>
			  <label class="radio-inline"><input name="work" type="radio" value="request"><span>Request</span></label></center>
			  </div></div>-->
		
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">
        <?php
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
	echo "<script type=\"text/javascript\">window.location.href='admin/adminhome.php' </script>";
	//
	}
	else if ($count ==1 && $we == 'scheduler'){
	$_SESSION['user']=$myusername;
	echo "<script type=\"text/javascript\">window.location.href='scheduler/schedHome.php' </script>";
	}
	else if ($count ==1 && $we == 'approver'){
	$_SESSION['user']=$myusername;
	echo "<script type=\"text/javascript\">window.location.href='approver/apphome.php' </script>";
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
      </form>
	
    <!-- End Login Screen -->
  </body>
</html>