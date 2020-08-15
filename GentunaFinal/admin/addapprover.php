<?php
include ('lock3.php');
	if(!isset($_SESSION['user']))
{
    header("Location: ../home.php");
}
?>



<!DOCTYPE html>
<html>
  <style type="text/css">

#tablescroll {

height: 550px;

width: 100%;

overflow:auto;

}

</style>
<head>
    <title>
     IRequest- Online JO/Service/Support Submission
    </title>
	<!-- jQuery: required (tablesorter works with jQuery 1.2.3+) -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<!-- Pick a theme, load the plugin & initialize plugin -->
	<link href="css/datatables.css" rel="stylesheet">
	<script src="javascripts/jquery.tablesorter.min.js"></script>
	<script src="javascripts/jquery.tablesorter.widgets.min.js"></script>
	<script>
	$(function(){
		$('table').tablesorter({
			widgets        : ['zebra', 'columns'],
			usNumberFormat : false,
			sortReset      : true,
			sortRestart    : true
		});
	});
	</script>
	
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" /><script src="../../../code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script><script src="../../../code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><script src="javascripts/bootstrap.min.js" type="text/javascript"></script><script src="javascripts/raphael.min.js" type="text/javascript"></script><script src="javascripts/selectivizr-min.js" type="text/javascript"></script><script src="javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="javascripts/gcal.js" type="text/javascript"></script><script src="javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="javascripts/datatable-editable.js" type="text/javascript"></script><script src="javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="javascripts/excanvas.min.js" type="text/javascript"></script><script src="javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="javascripts/isotope_extras.js" type="text/javascript"></script><script src="javascripts/modernizr.custom.js" type="text/javascript"></script><script src="javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="javascripts/select2.js" type="text/javascript"></script><script src="javascripts/styleswitcher.js" type="text/javascript"></script><script src="javascripts/wysiwyg.js" type="text/javascript"></script><script src="javascripts/summernote.min.js" type="text/javascript"></script><script src="javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="javascripts/jquery.validate.js" type="text/javascript"></script><script src="javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="javascripts/typeahead.js" type="text/javascript"></script><script src="javascripts/daterange-picker.js" type="text/javascript"></script><script src="javascripts/date.js" type="text/javascript"></script><script src="javascripts/morris.min.js" type="text/javascript"></script><script src="javascripts/skycons.js" type="text/javascript"></script><script src="javascripts/fitvids.js" type="text/javascript"></script><script src="javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="javascripts/main.js" type="text/javascript"></script><script src="javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body>
    <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown notifications hidden-xs"> 
                  <li><a href="account.php">
                    <i class="icon-user"></i> <?php echo $first; ?></a>
                  </li>
                  <li><a href="changepass.php">
                    <i class="icon-gear"></i>Change Password</a>
                  </li>
                  <li><a href="../logout.php">
                    <i class="icon-signout"></i>Logout</a>
                  </li>
                </ul>
              </li>
                <ul class="dropdown-menu">
                  <li>
                    <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>Blue</a>
                  </li>
                  <li>
                    <a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span>Green</a>
                  </li>
                  <li>
                    <a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span>Orange</a>
                  </li>
                  <li>
                    <a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span>Magenta</a>
                  </li>
                  <li>
                    <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>Gray</a>
                  </li>
                </ul>
              </li>
              
                </ul>
              </li>
            </ul>
          </div>
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index-2.html"><img src="logo.png" ></a> 
           
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
               <li>
                <a href="adminhome.php"><span aria-hidden="true" class="glyphicon glyphicon-home"></span>Home</a>
              </li>
              <li><a  href="fed.php">
                <span aria-hidden="true" class="glyphicon glyphicon-cog"></span>Facility & Engineering Dept</a>
              </li>
              <li><a  href="it.php">
                <span aria-hidden="true" class="glyphicon glyphicon-globe"></span>Info Tech</a>
              </li>
			    <li><a href="rating.php"><span aria-hidden="true" class="glyphicon glyphicon-list-alt"></span>Performance Rating</a>
              </li>
			  <li><a href="rating.php">
                <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>About</a>
              </li>
			  <li><a class="current" href="useraccounts.php">
                <span aria-hidden="true" class="glyphicon glyphicon-user"></span>User Accounts</a>
              </li>
			   <li><a href="department.php">
                <span aria-hidden="true" class="glyphicon glyphicon-th-large"></span>Departments</a>
              </li>
			   
             </ul>
                    
                    
                    
              
             
                  
      <!-- End Navigation -->
	  <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading" align="center">
                <i class="icon-table"></i> Add Approver Account
				
				<a href="manageapp.php"><button class="btn btn-sm btn-primary-outline pull-right" type="submit">

    <i class="glyphicon glyphicon-chevron-left"></i>

    Back

</button></a>
				
              </div>
			  
              <div class="widget-content padded clearfix">
			  <div id="tablescroll">
                  
				 <form action=" " class="form-horizontal" method="POST">
				<div class="form-group">
            <label class="control-label col-md-2">Username</label>
            <div class="col-md-7">
              <div class="input-group">
                <span class="input-group-addon">@</span><input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo $user;?>">
              </div>
            </div>
          </div>
			<div class="form-group">
            <label class="control-label col-md-2">First Name<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="first" value="<?php echo $first1; ?>"required>
            </div>
			</div>
			<div class="form-group">
            <label class="control-label col-md-2">Last Name<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="last" value="<?php echo $last1; ?>"required>
            </div>
			</div>
			<div class="form-group">
            <label class="control-label col-md-2">Password<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="pass" value="<?php echo $pass1; ?>"required>
            </div>
				</div>
				<div class="form-group">
            <label class="control-label col-md-2" for="depta">Department<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <select class="form-control" name="departmentid" required>
			  						<option ><?php echo $dept1 ; ?></option>
									<?php
									$college="SELECT * FROM department ORDER BY deptname ASC";
									$resultcoll=mysql_query($college);
									?>
									<?php
									while($rows1=mysql_fetch_array($resultcoll)){
									?>
									<option ><?php echo $rows1['deptname'];  ?></option>
									<?php
								}
								?>
								</select>
          </div></div>
		  <div>&nbsp;</div>
		
		  <div align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <button class="btn btn-primary" type="submit">

    Submit

</button>
</div>
		  </div><?php

	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

	
	$user = $_POST['username'];
	$first = $_POST['first'];
	$deptid = $_POST['departmentid'];
	$last = $_POST['last'];
	$pass = $_POST['pass'];

	
	
	$sql= "INSERT into approver (username,first,departmentid,last) VALUES ('$user', '$first', '$deptid','$last') ";
	$insert1 = mysql_query($sql);
	$sql1= "INSERT into loginacc (username,usertype,password) VALUES ('$user','approver','$pass' )";
	$insert2 = mysql_query($sql1);
	
if($insert1){
echo "<script type=\"text/javascript\">window.location.href='manageapp.php' </script>";
}
else if($insert2){
echo "<script type=\"text/javascript\">window.location.href='manageapp.php' </script>";
}
else {
echo"WARNING";
	}
	}
	
	


?>
								
                  </tbody>
                </table>
				</div>
              </div>
            </div>
          </div>
        </div>
      <div class="container-fluid main-content">
        
        </div>
      </div>
    </div>
  </body>

</html>