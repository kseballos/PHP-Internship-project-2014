 
 
 <?php
	  include('lock1.php');
if(!isset($_SESSION['user']))
{
    header("Location: ../home.php");
}
	  ?>
<!DOCTYPE html>
<html>
  
<head>
    <title>
      IRequest- Online JO/Service/Support Submission
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/font-awesome.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/isotope.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/fullcalendar.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/wizard.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/select2.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/morris.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/datatables.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/datepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/timepicker.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/colorpicker.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/daterange-picker.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/typeahead.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/summernote.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/pygments.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><link href="stylesheets/color/green.css" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" /><link href="stylesheets/color/orange.css" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" /><link href="stylesheets/color/magenta.css" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" /><link href="stylesheets/color/gray.css" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" /><script src="../../../code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script><script src="../../../code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><script src="javascripts/bootstrap.min.js" type="text/javascript"></script><script src="javascripts/raphael.min.js" type="text/javascript"></script><script src="javascripts/selectivizr-min.js" type="text/javascript"></script><script src="javascripts/jquery.mousewheel.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.min.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.sampledata.js" type="text/javascript"></script><script src="javascripts/jquery.vmap.world.js" type="text/javascript"></script><script src="javascripts/jquery.bootstrap.wizard.js" type="text/javascript"></script><script src="javascripts/fullcalendar.min.js" type="text/javascript"></script><script src="javascripts/gcal.js" type="text/javascript"></script><script src="javascripts/jquery.dataTables.min.js" type="text/javascript"></script><script src="javascripts/datatable-editable.js" type="text/javascript"></script><script src="javascripts/jquery.easy-pie-chart.js" type="text/javascript"></script><script src="javascripts/excanvas.min.js" type="text/javascript"></script><script src="javascripts/jquery.isotope.min.js" type="text/javascript"></script><script src="javascripts/isotope_extras.js" type="text/javascript"></script><script src="javascripts/modernizr.custom.js" type="text/javascript"></script><script src="javascripts/jquery.fancybox.pack.js" type="text/javascript"></script><script src="javascripts/select2.js" type="text/javascript"></script><script src="javascripts/styleswitcher.js" type="text/javascript"></script><script src="javascripts/wysiwyg.js" type="text/javascript"></script><script src="javascripts/summernote.min.js" type="text/javascript"></script><script src="javascripts/jquery.inputmask.min.js" type="text/javascript"></script><script src="javascripts/jquery.validate.js" type="text/javascript"></script><script src="javascripts/bootstrap-fileupload.js" type="text/javascript"></script><script src="javascripts/bootstrap-datepicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-timepicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-colorpicker.js" type="text/javascript"></script><script src="javascripts/bootstrap-switch.min.js" type="text/javascript"></script><script src="javascripts/typeahead.js" type="text/javascript"></script><script src="javascripts/daterange-picker.js" type="text/javascript"></script><script src="javascripts/date.js" type="text/javascript"></script><script src="javascripts/morris.min.js" type="text/javascript"></script><script src="javascripts/skycons.js" type="text/javascript"></script><script src="javascripts/fitvids.js" type="text/javascript"></script><script src="javascripts/jquery.sparkline.min.js" type="text/javascript"></script><script src="javascripts/main.js" type="text/javascript"></script><script src="javascripts/respond.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body >
    <div class="modal-shiftfix" >
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">
              <li class="dropdown notifications hidden-xs"><p>
			 
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
        <div class="container-fluid main-nav clearfix" >
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a href="appHome.php"><span aria-hidden="true" class="glyphicon glyphicon-home"></span>Home</a>
              </li>
              <li><a href="fed.php">
                <span aria-hidden="true" class="glyphicon glyphicon-cog"></span>Facility and Engineering Department</a>
              </li>
              <li><a  class="current"href="it.php">
                <span aria-hidden="true" class="glyphicon glyphicon-globe"></span>Information Technology</a>
              </li>
			  <li><a href="about.php">
                <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>About</a>
              </li>
                    
            
    <!-- End Navigation -->
	  
	  <div class="row">
  <div class="col-lg-12">
  

	   <div class="heading">
        <i class="icon-reorder"></i>Edit Priority for Requests
		
      </div>
	  <div class="heading">
        <i class="icon-reorder"></i>Edit Priority for Requests
		
      </div>
	  <div class="heading">
        <i class="icon-reorder"></i>Edit Priority for Requests
		
      </div>
      <div class="widget-content padded">
	 
        <form action=" " class="form-horizontal" method="POST">
        <div class="form-group">
            <label class="control-label col-md-2">Title</label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="title" value="<?php echo $title;?>"required readonly>
            </div>
			</div>
			<div class="form-group">
            <label class="control-label col-md-2">Username</label>
            <div class="col-md-7">
              <div class="input-group">
                <span class="input-group-addon">@</span><input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo $username1;?>" readonly>
              </div>
            </div>
          </div>
		   <div class="form-group">
            <label class="control-label col-md-2">Cost</label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="number" name="cost"  value="<?php echo $cost; ?>" readonly>
            </div>
			</div>
		   <div class="form-group">
            <label class="control-label col-md-2" for="depta">Department</label>
            <div class="col-md-7">
              <select class="form-control" name="departmentid"readonly >
			  						<option ><?php echo $dept; ?></option>
									
								</select>
          </div>
		  </div>
		    <div class="form-group">
            <label class="control-label col-md-2" for="depta">Priority Number</label>
            <div class="col-md-7">
              <select class="form-control" name="pris" >
			  			  			<option disabled> <?php echo $pri; ?> - Current</option>
									<?php
									$college="SELECT * FROM requestpost ORDER BY prioritynumber ASC  ";
									$resultcoll=mysql_query($college);
									?>
									<?php
									while($rows1=mysql_fetch_array($resultcoll)){
									?>
									<option ><?php echo $rows1['prioritynumber'];  ?></option>
									<?php
								}
								?>
								</select>
          </div>
		  </div>
		   <div class="form-group">
            <label class="control-label col-md-2" for="trouba">Interface</label>
            <div class="col-md-7">
              <select class="form-control" name="tid" readonly>
			  			  			<option ><?php echo $trou; ?></option>
									</select>
									</div>
									</div>
			
          
          
		  <div class="form-group">
            <label class="control-label col-md-2" for="unita">Unit</label>
            <div class="col-md-7">
              <select class="form-control" name="unitid" readonly>			  						
									<option ><?php echo $unit; ?></option>
									</select>
            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2" for="trouba">Status</label>
            <div class="col-md-7">
              <select class="form-control" name="statu" readonly>
			   			  			<option ><?php echo $stat; ?></option>

									</select>
            </div>
          
            </div>
		  <div class="form-group">
            <label class="control-label col-md-2" for="adate">Available Date (YYYY/MM/DD)</label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="adate" value="<?php echo $adate; ?>" readonly>
            </div>
			</div>
		      <div class="form-group">
            <label class="control-label col-md-2" for="rem">Technical Recommendation</label>
            <div class="col-md-7">
              <input class="form-control" rows="2" name="remarks"  value="<?php echo $remarks; ?>" readonly></input>
            </div class="form-group">
			
				<div>
			<button class="btn btn-primary" type="submit">

			

Approve

</button></div>
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
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

	$prip = $_POST['pris'];
	

	
	//if($adate1 != ""){
	//$sql= "UPDATE requestpost SET title='$title', username='$user', departmentid='$depta', businessunitid='$businessunitid', unitid='$unitid', tid='$tid', availdate='$adate', statusid='APPROVED', remarks='$remarks' , cost='$cost',instruct='$inst'  where prioritynumber ='$p' ";

	//}else  {
	//$sql= "UPDATE requestpost SET title='$title', username='$user', departmentid='$depta', businessunitid='$businessunitid', unitid='$unitid', tid='$tid', availdate= NULL ,statusid='APPROVED',  remarks='$remarks' , cost='$cost',instruct='$inst' where prioritynumber ='$p' ";

	//}

	//echo $sql;
	



//ito ang magRun pagApprove button
//ang Priority number sa DB kay nakaPrimary Key at dapat AutoIncrement. 

$id_na_i_edit= $p; // ito yung nasa P

$id_na_i_exchange  = $prip;

//pagSubmit / Approve

$query_get_i_edit = "SELECT * FROM requestpost WHERE prioritynumber= '$id_na_i_edit' ";
$sql = mysql_query($query_get_i_edit);
$row = mysql_fetch_array($sql);

$qpri=$row['prioritynumber'];
$qdept=$row['departmentid'];
$qdate=$row['datetime'];
$qstat=$row['statusid'];
$qtitle=$row['title'];
$qcost=$row['cost'];
$qadate=$row['availdate'];
$qremarks=$row['remarks'];
$qunit=$row['unitid'];
$qbusinessunitid=$row['businessunitid'];
$qtrou=$row['tid'];
$qinst=$row['instruct'];
$qusername=$row['username'];
$qdelete=$row['date_to_delete'];


//===================================================================================
$query_get_i_exchange = "SELECT * FROM requestpost WHERE prioritynumber = '$id_na_i_exchange' ";
$sql2 = mysql_query($query_get_i_exchange);
$row2 = mysql_fetch_array($sql2);

$pri=$row2['prioritynumber'];
$dept=$row2['departmentid'];
$date=$row2['datetime'];
$stat=$row2['statusid'];
$title=$row2['title'];
$cost=$row2['cost'];
$adate=$row2['availdate'];
$remarks=$row2['remarks'];
$unit=$row2['unitid'];
$businessunitid=$row2['businessunitid'];
$trou=$row2['tid'];
$inst=$row2['instruct'];
$username=$row2['username'];
$delete=$row2['date_to_delete'];



//delete both
//$delete_query = "DELETE FROM requestpost WHERE prioritynumber IN ($id_na_i_edit,$id_na_i_exchange)";
//$sql_delete = mysql_query($delete_query);

//Insert na na naInterChange
$insert_query = "Update requestpost set departmentid = '$qdept', datetime = '$qdate', title = '$qtitle', cost = '$qcost', availdate = '$qadate', remarks = '$qremarks', unitid = '$qunit', businessunitid = '$qbusinessunitid', tid = '$qtrou', instruct ='$qinst', username ='$qusername',date_to_delete ='$qdelete',statusid = 'APPROVED' where prioritynumber = '$id_na_i_exchange'"; // Diretso na ang Status is APPROVED
$insert1 = mysql_query($insert_query);


//$updatestat = "UPDATE requestpost SET statusid='APPROVED' where prioritynumber = '$id_na_i_exchange'";
//$update1 = mysql_query($updatestat);

$insert_query2 = "update requestpost ser departmentid='$dept',datetime='$date',title='$title',cost='$cost',availdate='$adate',remarks='$remarks',unitid='$unit',businessunitid='$businessunitid',tid='$trou', instruct='$inst',username='$username',date_to_delete='$delete',statusid='APPROVED'  where prioritynumber='$id_na_i_edit'";
$insert2 = mysql_query($insert_query2);

//$updatestat2 = "UPDATE requestpost SET statusid='APPROVED' where prioritynumber = '$id_na_i_edit'";
//$update2 = mysql_query($updatestat2);


}

?>

		</form>
      <div class="container-fluid main-content">
        </div>
      </div>
    </div>
	
  </body>
  
  </html>
  
  