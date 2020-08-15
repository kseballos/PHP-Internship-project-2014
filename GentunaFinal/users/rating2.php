<?php
		include './../dbconnection/connect.php';
include ('lock1.php');
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
	<!-- jQuery: required (tablesorter works with jQuery 1.2.3+) -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<!-- Pick a theme, load the plugin & initialize plugin -->
	<link href="css/datatables.css" rel="stylesheet">
	<script src="javascripts/jquery.tablesorter.min.js"></script>
	<script src="javascripts/jquery.tablesorter.widgets.min.js"></script>
	 <style type="text/css">

#tablescroll {

height: 600px;

width: 100%;

overflow:auto;

}

</style>
	<script>
 window.onload = function()
 {
    document.getElementsByName('mydropdown')[0].onchange = function(e)
    {
      document.getElementById('mylabel').innerHTML = this.value;
    };
 }
</script>

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
                  <li><a >
                    <i class="icon-user"></i> <?php echo $first; ?></a>
                  </li>
                  <li><a >
                    <i class="icon-gear"></i>Change Password</a>
                  </li>
                  <li><a >
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
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index-2.php"><img src="logo.png" ></a> 
           
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
            <ul class="nav">
               <li>
                <a ><span aria-hidden="true" class="glyphicon glyphicon-home"></span>Home</a>
              </li>
              <li><a >
                <span aria-hidden="true" class="glyphicon glyphicon-cog"></span>Facility and Engineering Department</a>
              </li>
			   <li><a class="current" ><span aria-hidden="true" class="glyphicon glyphicon-list-alt"></span>Performance Rating</a>
              </li>
              <li><a  >
                <span aria-hidden="true" class="glyphicon glyphicon-globe"></span>Information Technology</a>
              </li>
			  <li><a >
                <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>About</a>
              </li>
                    
                    
              
             
                  
      <!-- End Navigation -->
	  <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div id="tablescroll">
              <div class="heading">
                <i class="icon-table"></i>Customer Satisfaction Evaluation
				<br></br>
				<p><font color="#676700">We appreciate your cooperation and patience during the planning and completion of your Job Order.  We appreciate the opportunity to work with you to improve the quality of your work, your area and your services to the company, its employees and other partners. Because we want to make sure we are providing the level of service needed, we would like your inputs on the work or services we provided. Please take a few minutes to complete this customer satisfaction evaluation. Thank you for your cooperation and help in improving our services.</font></p>
              </div>
			  <br></br>
              <div class="widget-content padded clearfix">
			   <br></br>
			  <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="datatable-editable">
                  
                     <div ><b> Rating scale to be used during Evaluation:</b> </div>
                    
				<tbody>
                    <tr>
                      <td align="left">
                       4.0 &ndash;  Accomplished 105% and above of agreed performance standards 
                      </td>
                      <td align="left">
                      3.5 &ndash;  Accomplished 96-104% of agreed performance standards
                      </td>
					  </tr>
					  <tr>
                      <td align="left">
                      3.0 &ndash;  Accomplished 85-95% of agreed performance standards
                      </td>
                      <td align="left">
                     2.5 &ndash;  Accomplished 75-84% of agreed performance standards
					  </tr>
					  <tr>
                      <td align="left">
                     2.0 &ndash;  Accomplished 50-74% of the agreed performance standards 
                      </td>
                      <td align="left">
                     1.0 &ndash;  Accomplished only 49% and below of agreed performance standard
                      </td>
					  </tr>
                  </tbody>
                </table>
              </div>
			  <div class="form-group" >
			  
			 <form action=" " class="form-horizontal" method="POST"   onsubmit="return confirm('Do you really want to submit the form?');">
 <div class="heading" align="left"> <font face="calibri" color="#FF0000">* </font>Workmanship
				
              </div>
			  <br>
			  <div>
            <label class="col-md-5" align="left">1. <b><u>Quality</u></b></label><br>
<label class="col-md-5" align="left"><i>Work successfully met user requirements and all standards of operations.</i>
</label>
            <label class="radio-inline"><input name="optionsRadios1" type="radio" value="4" required><span>4</span></label> <label class="radio-inline"><input name="optionsRadios1" type="radio" value="3.5" required><span>3.5</span></label><label class="radio-inline"><input name="optionsRadios1" type="radio" value="3.0" required><span>3</span></label> <label class="radio-inline"><input name="optionsRadios1" type="radio" value="2.5" required><span>2.5</span></label><label class="radio-inline"><input name="optionsRadios1" type="radio" value="2" required><span>2</span></label><label class="radio-inline"><input name="optionsRadios1" type="radio" value="1" required><span>1</span></label><?php 
			  	@$choice = $_POST['optionsRadios1'];
			 ?> </br>
			</div>
			<div><br>
			<label class="col-md-5" align="left">2. <b><u>Accuracy</u></b></label><br>
<label class="col-md-5" align="left"><i> Work is free from errors or omissions.</i>
</label>
            <label class="radio-inline"><input name="optionsRadios2" type="radio" value="4" required><span>4</span></label> <label class="radio-inline"><input name="optionsRadios2" type="radio" value="3.5" required><span>3.5</span></label><label class="radio-inline"><input name="optionsRadios2" type="radio" value="3.0" required><span>3</span></label> <label class="radio-inline"><input name="optionsRadios2" type="radio" value="2.5" required><span>2.5</span></label><label class="radio-inline"><input name="optionsRadios2" type="radio" value="2" required><span>2</span></label><label class="radio-inline"><input name="optionsRadios2" type="radio" value="1" required><span>1</span></label><?php 
			  @$choice1 = $_POST['optionsRadios2'];
			  ?>
			</br>
			</div>
				<div><br>
			<label class="col-md-5" align="left">3. <b><u>Thoroughness</u></b></label><br>
<label class="col-md-5" align="left"><i>The extent to which work is completed, with all details covered, avoiding the necessity to perform further work to complete it.</i>
</label>
            <label class="radio-inline"><input name="optionsRadios3" type="radio" value="4" required><span>4</span></label> <label class="radio-inline"><input name="optionsRadios3" type="radio" value="3.5" required><span>3.5</span></label><label class="radio-inline"><input name="optionsRadios3" type="radio" value="3.0" required><span>3</span></label> <label class="radio-inline"><input name="optionsRadios3" type="radio" value="2.5" required><span>2.5</span></label><label class="radio-inline"><input name="optionsRadios3" type="radio" value="2" required><span>2</span></label><label class="radio-inline"><input name="optionsRadios3" type="radio" value="1" required><span>1</span></label><?php 
				@$choice2 = $_POST['optionsRadios3'];
				 ?></br>
			</div>
				<div><br>
				<label class="col-md-5" align="left">4. <b><u>Neatness of Work Product</u></b></label><br>
<label class="col-md-5" align="left"><i>Work product exceeds the acceptable standard for legibility, cleanliness and orderliness.</i>
</label>
</label>
            <label class="radio-inline"><input name="optionsRadios4" type="radio" value="4" required><span>4</span></label> <label class="radio-inline"><input name="optionsRadios4" type="radio" value="3.5" required><span>3.5</span></label><label class="radio-inline"><input name="optionsRadios4" type="radio" value="3.0" required><span>3</span></label> <label class="radio-inline"><input name="optionsRadios4" type="radio" value="2.5" required><span>2.5</span></label><label class="radio-inline"><input name="optionsRadios4" type="radio" value="2" required><span>2</span></label><label class="radio-inline"><input name="optionsRadios4" type="radio" value="1" required><span>1</span></label><?php 
				@$choice3 = $_POST['optionsRadios4'];
				 ?><br></br>
			</div>
			 <div class="heading" align="left"> <font face="calibri" color="#FF0000">* </font>Timeliness
				
              </div>
			<div><br>
					<label class="col-md-5" align="left">5. <b><u>Work was completed within given or reasonable time limits</u></b></label>

            <label class="radio-inline"><input name="optionsRadios5" type="radio" value="4" required><span>4</span></label> <label class="radio-inline"><input name="optionsRadios5" type="radio" value="3.5" required><span>3.5</span></label><label class="radio-inline"><input name="optionsRadios5" type="radio" value="3.0" required><span>3</span></label> <label class="radio-inline"><input name="optionsRadios5" type="radio" value="2.5" required><span>2.5</span></label><label class="radio-inline"><input name="optionsRadios5" type="radio" value="2" required><span>2</span></label><label class="radio-inline"><input name="optionsRadios5" type="radio" value="1" required><span>1</span></label><?php 
				@$choice4 = $_POST['optionsRadios5'];
				 ?></br>
			</div>
			
				<div class="heading" align="left"> <font face="calibri" color="#FF0000">* </font>Cost Effectiveness
				
              </div>
			<div><br>
			<label class="col-md-5" align="left">6. <b>Work was completed on time and on budget.</b></label><br>
<label class="col-md-5" align="left"><b>During work completion, company asset or equipment used were properly expended, utilized and cared for.</b>
</label>
            <label class="radio-inline"><input name="optionsRadios6" type="radio" value="4" required><span>4</span></label> <label class="radio-inline"><input name="optionsRadios6" type="radio" value="3.5" required><span>3.5</span></label><label class="radio-inline"><input name="optionsRadios6" type="radio" value="3.0" required><span>3</span></label> <label class="radio-inline"><input name="optionsRadios6" type="radio" value="2.5" required><span>2.5</span></label><label class="radio-inline"><input name="optionsRadios6" type="radio" value="2" required><span>2</span></label><label class="radio-inline"><input name="optionsRadios6" type="radio" value="1" required><span>1</span></label><?php 
				@$choice5 = $_POST['optionsRadios6'];
				 ?></br>
			</div>
			
			
				<?php 
			$sumwork = ($choice + $choice1 + $choice2 +$choice3 );
			

			$sum1 = number_format($sumwork,2);
			$sum2 = number_format($choice4,2);
			$sum3 = number_format($choice5,2);
			?>
			
			<br></br>
			<div class="form-group" align ="left">
            <label class="control-label col-md-1" for="adate"><i class="icon-file-text"></i>&nbsp;Remarks<font face="calibri" color="#FF0000">* </font></label>
            <div class="col-md-5">
              <input class="form-control" placeholder="Text" type="text" name="remarks" required >
            </div>
			</div></div>
			<div align="center">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-primary-outline pull-right" type="submit">

    <i class="icon-plus"></i>

    Submit

</button></a></div>

									
<?php

	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	
		//$sql6=mysql_query("select count(departmentid) as fedco from rating where departmentid='FED'");
		//$row6=mysql_fetch_array($sql6);
		//	$fedco = $row6['fedco'];
	
	
	//$result = ($sum/$fedco);
	//$num = number_format($result,2);
	
	$resultw = (($sumwork/4)* 0.6);
	$resultt = (($choice4/1)* 0.2);
	$resultc = (($choice5/1)* 0.2);

	$final = ($resultw + $resultt + $resultc);
	$num = number_format($final,2);
	
	if ($num >= 1.00 && $num <= 1.99){
	$equi = '49% and below of agreed performance standard'; 
	}else if ($num >= 2.00 && $num <= 2.49){
	$equi = '50-74% of the agreed performance standards'; 
	}else if ($num >= 2.50 && $num <= 2.99){
	$equi = '75-84% of agreed performance standards'; 
	}else if ($num >= 3.00 && $num <= 3.49){
	$equi = '85-95% of agreed performance standards'; 
	}else if ($num >= 3.50 && $num <= 3.99){
	$equi = '96-104% of agreed performance standards'; 
	}else if ($num >= 4.00){
	$equi = '105% and above of agreed performance standards'; 
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	$remarks = $_POST['remarks'];
	
	$sql= "INSERT INTO rating (username, departmentid , ratevalue , rateequivalent , prioritynumber, remarks) VALUES ('$username1' , 'IT' , '$num', '$equi','$p', '$remarks')"; 
	$result = mysql_query($sql);
	$sql1= "UPDATE requestpost SET rateequivalent= 'RATED' where prioritynumber='$p'"; 
	$result1 = mysql_query($sql1);
	

	
	if($result){
echo "<script type=\"text/javascript\">window.location.href='it.php' </script>";
}else if($result1){
echo "<script type=\"text/javascript\">window.location.href='it.php' </script>";
}
else {
echo 'Warning: An error has occurred.';
					}	
}



	?>
			</form>
			
			</div>
			
			</div>
            </div>
          </div>
		  </div>
			
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