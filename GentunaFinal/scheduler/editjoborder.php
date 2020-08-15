 <?php
 		include './../dbconnection/connect.php';
	  include('lock2.php');	
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
                <a  href="schedHome.php"><span aria-hidden="true" class="glyphicon glyphicon-home"></span>Home</a>
              </li>
              <li><a class="current"href="fed.php">
                <span aria-hidden="true" class="glyphicon glyphicon-cog"></span>Facility and Engineering Department</a>
              </li>
			   <li><a href="rating.php"><span aria-hidden="true" class="glyphicon glyphicon-list-alt"></span>Performance Rating</a>
              </li>
              <li><a href="it.php">
                <span aria-hidden="true" class="glyphicon glyphicon-globe"></span>Information Technology</a>
              </li>
			  <li><a href="about.php">
                <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>About</a>
              </li>
                    
            
    <!-- End Navigation -->
	  
	  <div class="row">
  <div class="col-lg-12">


    <div class="widget-container fluid-height clearfix">
	  <div class="heading">
        <i class="icon-reorder"></i>Edit Schedule for Job Order
      </div>
	 <div id="tablescroll">
      <div class="widget-content padded">
	 
	 
        <form action=" " class="form-horizontal" method="POST">
           <div class="form-group">
            <label class="control-label col-md-2">Job Order<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="projectname" value="<?php echo $projectname; ?>"required readonly>
            </div>
			</div>
			<div class="form-group">
            <label class="control-label col-md-2">Username</label>
            <div class="col-md-7">
              <div class="input-group">
                <span class="input-group-addon">@</span><input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo $user; ?>" readonly>
              </div>
            </div>
          </div>
		   <div class="form-group">
            <label class="control-label col-md-2" for="depta">Department<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <select class="form-control" name="departmentid" readonly>
			  						<option ><?php echo $departmentid; ?></option>
									
								</select>
          </div>
		  </div>
		  <div class="form-group">
            <label class="control-label col-md-2">Project/CER Number<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="CER Number" type="text" name="cerpnum" value="<?php echo $cerpnum; ?>" required readonly>
            </div>
			</div>
			 <div class="form-group">
			<label class="control-label col-md-2">PR Number<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
                <input class="form-control" placeholder="PR Number" type="number" name="connum" value="<?php echo $controlnum; ?>" required readonly>
              </div>
            </div>
		 
		     <div class="form-group">
            <label class="control-label col-md-2">Estimated Cost</label>
            <div class="col-md-7"><div class="input-group">
              <span class="input-group-addon">&#8369;</span><input class="form-control" placeholder="Estimated Cost" type="number" name="estimatedcost" value="<?php echo $estimatedcost; ?>" readonly><span class="input-group-addon">.00</span></input>
            </div>
			</div>
			</div>
		  
		  
		  <div class="form-group">
            <label class="control-label col-md-2">Location<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="section" value=" <?php echo $section; ?>" required readonly>
            </div>
			</div>
		   
		 <div class="form-group">
			<label class="control-label col-md-2">Project Manager<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
                <input class="form-control" placeholder="Project Manager" type="text" name="proj"value="<?php echo $proj; ?>" required readonly>
              </div>
            </div>
		  
		 <div class="form-group">
            <label class="control-label col-md-2" for="trouba">Status</label>
            <div class="col-md-7">
              <select class="form-control" name="statu" required >
			  			  			
									 
			  <?php 			if($stat == 'CANCELLED'){
									echo 'readonly>';
									echo "<option >$stat</option>";
								}else if($stat == 'APPROVED'){
								echo '>';
									echo "<option >$stat</option>";
									echo "<option >ON-GOING</option>";	
									echo "<option >HOLD</option>";
									echo "<option >CANCELLED</option>";
									echo "<option >COMPLETED</option>";

								}else if($stat == 'ON-GOING'){
								echo '>';
									echo "<option >$stat</option>";
									echo "<option >HOLD</option>";
									echo "<option >CANCELLED</option>";
									echo "<option >COMPLETED</option>";
								}else if($stat == 'HOLD'){
								echo '>';
									echo "<option >$stat</option>";
									echo "<option >ON-GOING</option>";
									echo "<option >CANCELLED</option>";
									echo "<option >COMPLETED</option>";
									}else if($stat == 'COMPLETED'){
									echo "<option >$stat</option>";	
								}else{
								echo 'readonly>';
									echo "<option >$stat</option>";	
								}
								
									?>
									</select>
            </div>
          
            </div>
			 <div class="form-group">
            <label class="control-label col-md-2" for="depta">Nature<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <select class="form-control" name="nat" required>
			  <option ><?php echo $natt; ?></option><?php
									echo "<option >Electrical</option>";	
									echo "<option >Mechanical</option>";
									echo "<option >Civil</option>";
									echo '>';
								?>
								</select>
          </div>
		  </div>
          <div class="form-group">
            <label class="control-label col-md-2" for="adate">Date Started (YYYY-MM-DD)<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="esti" value="<?php echo $esti; ?>" required >
            </div>
			</div>
			 <div class="form-group">
            <label class="control-label col-md-2" for="adate">Date Completed (YYYY-MM-DD)<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="enddate" value="<?php echo $end; ?>" >
            </div>
			</div>
			<div class="form-group">
            <label class="control-label col-md-2" for="adate">Assigned Personnel<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="assign" value="<?php echo $assi; ?>" required >
            </div>
			</div>
		   <div class="form-group">
            <label class="control-label col-md-2" for="adate">Date Required (YYYY-MM-DD)<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="datereq" value="<?php echo $datereq; ?>" required readonly>
            </div>
			</div>
		      <div class="form-group">
            <label class="control-label col-md-2" for="rem">Instruction/Remarks</label>
            <div class="col-md-7">
              <input class="form-control" rows="2" name="remarks"  value="<?php echo $remarks; ?>" readonly></input>
            </div class="form-group">
			</div>
			
			<div class="form-group">
            <label class="control-label col-md-2" for="rem">Technical Recommendation</label>
            <div class="col-md-7">
              <input class="form-control" rows="2" name="instruct"  value="<?php echo $instruct; ?>"></input>
            </div class="form-group">
			<div>
			<button class="btn btn-primary" type="submit">

    Submit

</button></div>
          </div>
		  </div>
          </div>

          </div>
              </div>
            </div>
          </div>
        </div>
<?php

	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	
	$sql = "SELECT * FROM joborderdetails";
	$result = mysql_query($sql);
	while($rows = mysql_fetch_array($result)){
	$adate1 = $rows['datereq'];
	
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

	$projectname = $_POST['projectname'];
	//$user = $_POST['username'];
	$departmentid = $_POST['departmentid'];
	$section = $_POST['section'];
	$datereq = $_POST['datereq'];
	$remarks = $_POST['remarks'];
	$estimatedcost = $_POST['estimatedcost'];
	$inst = $_POST['instruct'];
	$statu = $_POST['statu'];
	$esti = $_POST['esti'];
	$assign = $_POST['assign'];
	$enddate= $_POST['enddate'];
	$nat= $_POST['nat'];

	
	if(empty($_POST['cost']) && $estimatedcost == ""){
	$sql= "UPDATE joborderdetails SET projectname='$projectname', departmentid='$departmentid', section='$section', datereq='$datereq', remarks='$remarks' ,statusid='$statu', estimatedcost='$estimatedcost',instruct='$inst', estimateddate='$esti' , assignedper='$assign', enddate='$enddate' , nature='$nat' where prioritynumber ='$p' ";

	}else {
	$sql= "UPDATE joborderdetails SET projectname='$projectname',  departmentid='$departmentid', section='$section', datereq='$datereq', remarks='$remarks' ,statusid='$statu',estimatedcost='$estimatedcost',instruct='$inst' ,estimateddate='$esti' , enddate='$enddate' ,assignedper='$assign' , nature='$nat' where prioritynumber ='$p' ";

	}

	//echo $sql;
	$result = mysql_query($sql);
	
	if($result){
echo "<script type=\"text/javascript\">window.location.href='fed.php' </script>";
}
else {
echo 'Warning: An error has occurred.';
					}	

}
?>

<?Php
while (list ($key,$val) = each ($_POST)) {
echo "\$$key = $val";
echo "<br>";
} 

?>
		</form>
      <div class="container-fluid main-content">
        </div>
      </div>
    </div>
	
  </body>
  </html>