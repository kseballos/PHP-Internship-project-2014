 <?php
 		include './../dbconnection/connect.php';
	  include('lock1.php');
if(!isset($_SESSION['user']))
{
    header("Location: ../home.php");
}
	  ?>
<!DOCTYPE html>
<html>
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
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="apphome.php"><img src="logo.png" ></a> 
           
        </div>
        <div class="container-fluid main-nav clearfix" >
          <div class="nav-collapse">
            <ul class="nav">
              <li>
                <a href="apphome.php"><span aria-hidden="true" class="glyphicon glyphicon-home"></span>Home</a>
              </li>
              <li><a href="fed.php">
                <span aria-hidden="true" class="glyphicon glyphicon-cog"></span>Facility and Engineering Department</a>
              </li>
			   <li><a href="rating.php"><span aria-hidden="true" class="glyphicon glyphicon-list-alt"></span>Performance Rating</a>
              </li>
              <li><a  class="current"href="it.php">
                <span aria-hidden="true" class="glyphicon glyphicon-globe"></span>Information Technology</a>
              </li>
			  <li><a href="about.php">
                <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>About</a>
              </li>
                    
            
    <!-- End Navigation   
    -->
	  
	  <div class="row">
  <div class="col-lg-12">
<div class="widget-container fluid-height clearfix">
	             

	  
	   <div class="heading">
        <i class="icon-reorder"></i>Edit Priority for Requests
		
      </div>
	  
	 
      <div class="widget-content padded">
	 <div id="tablescroll">
        <form action=" " class="form-horizontal" method="POST">
        <div class="form-group">
            <label class="control-label col-md-2">Description<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="title" value="<?php echo $title; ?>"required readonly>
            </div>
			</div>
			<div class="form-group">
            <label class="control-label col-md-2">Username</label>
            <div class="col-md-7">
              <div class="input-group">
                <span class="input-group-addon">@</span><input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo $user;?>" readonly>
              </div>
            </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-2">Estimated Cost</label>
            <div class="col-md-7"><div class="input-group">
              <span class="input-group-addon">&#8369;</span><input class="form-control" placeholder="Estimated Cost" type="number" name="cost" value="<?php echo $cost; ?>" readonly><span class="input-group-addon">.00</span></input>
            </div>
			</div>
			</div>
		  
		   <div class="form-group">
            <label class="control-label col-md-2" for="depta">Department<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <select class="form-control" name="departmentid" required readonly>
			  						<option ><?php echo $dept; ?></option>
									
								</select>
          </div>
		  </div>
		  <div class="form-group">
            <label class="control-label col-md-2">Location<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="businessunitid" value=" <?php echo $businessunitid; ?>" required readonly>
            </div>
			</div>
		   
		   <div class="form-group">
            <label class="control-label col-md-2" for="trouba">Problem(Nature)<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="tid" value="<?php echo $trou; ?>"required readonly>
			  			  			
            </div>
          </div>
		    <div class="form-group">
            <label class="control-label col-md-2" for="unita">Unit<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="unitid" value="<?php echo $unit; ?>"required readonly>			  			
            </div>
          </div>
		    <div class="form-group">
            <label class="control-label col-md-2" for="depta">Priority Number</label>
            <div class="col-md-7">
              <select class="form-control" name="pris" >
			  			  			<option> <?php echo $pri; ?>
									<?php
									$college="SELECT * FROM requestpost where statusid!='CANCELLED' ORDER BY prioritynumber ASC";
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
            <label class="control-label col-md-2" for="trouba">Status<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <select class="form-control" name="statu" readonly>
			   			  			<option ><?php echo $stat; ?></option>

									</select>
            </div>
          
            </div>
			 <div class="form-group">
            <label class="control-label col-md-2" for="adate">Date Started (YYYY-MM-DD)<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="esti" value="<?php echo $esti; ?>" required readonly>
            </div>
			</div>
			 <div class="form-group">
            <label class="control-label col-md-2" for="adate">Date Completed (YYYY-MM-DD)<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="enddate" value="<?php echo $end; ?>" required readonly>
            </div>
			</div>
			<div class="form-group">
            <label class="control-label col-md-2" for="adate">Assigned Personnel<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="assign" value="<?php echo $assi; ?>" required readonly>
            </div>
			</div>
		 <div class="form-group">
            <label class="control-label col-md-2" for="adate">Date Required (YYYY-MM-DD)<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Text" type="text" name="adate" value="<?php //($adate ==""){
																								//ho 0000/00/00;
																							//else {
																							echo $adate;
																							//
																							?>" required readonly>
            </div>
			</div>
		      <div class="form-group">
            <label class="control-label col-md-2" for="rem">Intruction/Remarks</label>
            <div class="col-md-7">
              <input class="form-control" rows="2" name="remarks"  value=" <?php echo $remarks; ?>" readonly></input>
            </div class="form-group">
			</div>
			
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
        </div>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$pro = $_POST['pris'];

		include './../dbconnection/connect.php';
	

$id_na_i_edit= $p; // ito yung nasa P

$id_na_i_exchange  = $pro;

//pagSubmit / Approve

$query_get_i_edit = "SELECT * FROM requestpost WHERE prioritynumber= '$id_na_i_edit' ";
$sql = mysql_query($query_get_i_edit);
$row = mysql_fetch_array($sql);

$_SESSION['qpri']=$row['prioritynumber'];
$_SESSION['qdept']=$row['departmentid'];
$_SESSION['qdate']=$row['datetime'];
$_SESSION['qstat']=$row['statusid'];
$_SESSION['qtitle']=$row['title'];
$_SESSION['qcost']=$row['cost'];
$_SESSION['qadate']=$row['availdate'];
$_SESSION['qremarks']=$row['remarks'];
$_SESSION['qunit']=$row['unitid'];
$_SESSION['qbusinessunitid']=$row['businessunitid'];
$_SESSION['qtrou']=$row['tid'];
$_SESSION['qinst']=$row['instruct'];
$_SESSION['qusername']=$row['username'];
$_SESSION['qdelete']=$row['date_to_delete'];
$_SESSION['qrate']=$row['rateequivalent'];
$_SESSION['qassi']=$row['assignedper'];
$_SESSION['qesti']=$row['estimateddate'];
$_SESSION['qhours']=$row['hourscompleted'];
$_SESSION['qend']=$row['enddate'];





//===================================================================================




//===================================================================================
$query_get_i_exchange = "SELECT * FROM requestpost WHERE prioritynumber = '$id_na_i_exchange' ";
$sql2 = mysql_query($query_get_i_exchange);
$row2 = mysql_fetch_array($sql2);

$_SESSION['pri']=$row2['prioritynumber'];
$_SESSION['dept']=$row2['departmentid'];
$_SESSION['date']=$row2['datetime'];
$_SESSION['stat']=$row2['statusid'];
$_SESSION['title']=$row2['title'];
$_SESSION['cost']=$row2['cost'];
$_SESSION['adate']=$row2['availdate'];
$_SESSION['remarks']=$row2['remarks'];
$_SESSION['unit']=$row2['unitid'];
$_SESSION['businessunitid']=$row2['businessunitid'];
$_SESSION['trou']=$row2['tid'];
$_SESSION['inst']=$row2['instruct'];
$_SESSION['username']=$row2['username'];
$_SESSION['delete']=$row2['date_to_delete'];
$_SESSION['rate']=$row2['rateequivalent'];
$_SESSION['assi']=$row2['assignedper'];
$_SESSION['esti']=$row2['estimateddate'];
$_SESSION['hours']=$row2['hourscompleted'];
$_SESSION['end']=$row2['enddate'];



//delete both
$delete_query = "DELETE FROM requestpost WHERE prioritynumber in ('$id_na_i_exchange','$id_na_i_edit')";
$sql_delete = mysql_query($delete_query);

$pri=$_SESSION['pri'];
$dept=$_SESSION['dept'];
$date=$_SESSION['date'];
$stat=$_SESSION['stat'];
$title=$_SESSION['title'];
$cost=$_SESSION['cost'];
$adate=$_SESSION['adate'];
$remarks=$_SESSION['remarks'];
$unit=$_SESSION['unit'];
$businessunitid=$_SESSION['businessunitid'];
$trou=$_SESSION['trou'];
$inst=$_SESSION['inst'];
$username=$_SESSION['username'];
$delete=$_SESSION['delete'];
$rate=$_SESSION['rate'];
$assi=$_SESSION['assi'];
$esti=$_SESSION['esti'];
$hours=$_SESSION['hours'];
$end=$_SESSION['end'];

$qpri=$_SESSION['qpri'];
$qdept=$_SESSION['qdept'];
$qdate=$_SESSION['qdate'];
$qstat=$_SESSION['qstat'];
$qtitle=$_SESSION['qtitle'];
$qcost=$_SESSION['qcost'];
$qadate=$_SESSION['qadate'];
$qremarks=$_SESSION['qremarks'];
$qunit=$_SESSION['qunit'];
$qbusinessunitid=$_SESSION['qbusinessunitid'];
$qtrou=$_SESSION['qtrou'];
$qinst=$_SESSION['qinst'];
$qusername=$_SESSION['qusername'];
$qdelete=$_SESSION['qdelete'];
$qrate=$_SESSION['qrate'];
$qassi=$_SESSION['qassi'];
$qesti=$_SESSION['qesti'];
$qhours=$_SESSION['qhours'];
$qend=$_SESSION['qend'];

//Insert na na naInterChange
if($adate != "" || $qdate != ""){
$insert_query = "INSERT INTO requestpost (prioritynumber, departmentid, datetime, title, cost, availdate, remarks, unitid, businessunitid, tid, instruct, username,date_to_delete,statusid,rateequivalent,assignedper,hourscompleted,enddate,estimateddate) VALUES('$id_na_i_exchange','$qdept','$qdate', '$qtitle','$qcost','$qadate','$qremarks','$qunit', '$qbusinessunitid', '$qtrou' , '$qinst', '$qusername', '$qdelete' ,'$stat','$rate','$assi','$hours','$end','$esti')"; // Diretso na ang Status is APPROVED
$insert1 = mysql_query($insert_query);

//$updatestat = "UPDATE requestpost SET statusid='APPROVED' where prioritynumber = '$id_na_i_exchange'";
//$update1 = mysql_query($updatestat);
$insert_query2 = "INSERT INTO requestpost (prioritynumber,departmentid,datetime,title,cost,availdate,remarks,unitid,businessunitid,tid, instruct,username,date_to_delete,statusid,rateequivalent,assignedper,hourscompleted,enddate,estimateddate) VALUES('$id_na_i_edit','$dept','$date', '$title','$cost','$adate','$remarks','$unit', '$businessunitid', '$trou' , '$inst', '$username', '$delete','$stat','$rate','$assi','$hours','$end','$esti')";
$insert2 = mysql_query($insert_query2);
}
else {
$insert_query = "INSERT INTO requestpost (prioritynumber, departmentid, datetime, title, cost,  remarks, unitid, businessunitid, tid, instruct, username,date_to_delete,statusid,rateequivalent,assignedper,hourscompleted,enddate,estimateddate) VALUES('$id_na_i_exchange','$qdept','$qadate', '$qtitle','$qcost','$qremarks','$qunit', '$qbusinessunitid', '$qtrou' , '$qinst', '$qusername', '$qdelete' ,'$qstat','$qrate','$qassi','$qhours','$qend','$qesti')"; // Diretso na ang Status is APPROVED
$insert1 = mysql_query($insert_query);

//$updatestat = "UPDATE requestpost SET statusid='APPROVED' where prioritynumber = '$id_na_i_exchange'";
//$update1 = mysql_query($updatestat);
$insert_query2 = "INSERT INTO requestpost (prioritynumber,departmentid,datetime,title,cost,availdate,remarks,unitid,businessunitid,tid, instruct,username,date_to_delete,statusid,rateequivalent,assignedper,hourscompleted,enddate,estimateddate) VALUES('$id_na_i_edit','$dept','$date', '$title','$cost','$adate','$remarks','$unit', '$businessunitid', '$trou' , '$inst', '$username', '$delete','$qstat','$qrate','$qassi','$qhours','$qend','$qesti')";
$insert2 = mysql_query($insert_query2);
//$updatestat2 = "UPDATE requestpost SET statusid='APPROVED' where prioritynumber = '$id_na_i_edit'";
//$update2 = mysql_query($updatestat2);
}	
	
	if($insert2){
echo "<script type=\"text/javascript\">window.location.href='it.php' </script>";
}

else if($insert1){
echo "<script type=\"text/javascript\">window.location.href='it.php' </script>";
}
else {
echo 'Warning: An error has occurred.';
					}	

}

?>
		</form>
      <div class="container-fluid main-content">
        </div>
      </div>
    </div>
	
  </body>
  
  </html>