<?php
include ('lock.php');

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

height: 540px;

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
                <a href="index-2.php"><span aria-hidden="true" class="glyphicon glyphicon-home"></span>Home</a>
              </li>
              <li><a href="fed.php">
                <span aria-hidden="true" class="glyphicon glyphicon-cog"></span>Facility and Engineering Department</a>
              </li>
              <li><a class="current" href="it.php">
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
                <i class="icon-table"></i>Performance Rating
				<a href="rating.php"><button class="btn btn-sm btn-primary-outline pull-right" type="submit">

    <i class="icon-plus"></i>

    Rate

</button></a>
				
              </div>
			  
              <div class="widget-content padded clearfix">
			  <div id="tablescroll">
                <table class="table table-bordered table-striped" id="dataTable1">
				
                  <thead>
                  
                    <th class="hidden-xs">
                     Number
                    </th>
                    <th class="hidden-xs" >
                     Questions
                    </th>
					<th class="hidden-xs">
                    
                    </th>
					<th class="hidden-xs">
                     Rating
                    </th>
                   
					
					
                  </thead>
                  <tbody>
				
                   <tr>
                   <td >1</td>
				   <td >Did we exhibit the correct skills needed for the Job Order?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
					  <tr>
                   <td >2</td>
				   <td >Were you confident in our ability to complete the Job Order?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
					<tr>
                   <td >3</td>
				   <td >Did we deliver your expected results? </td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
						<tr>
                   <td >4</td>
				   <td >Were we considerate?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
						<tr>
                   <td >5</td>
				   <td >Did staff listen to your questions and concerns and take interest in giving answers and solutions?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
						<tr>
                   <td >6</td>
				   <td >How was the quality of the information provided for the Job Order?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
						<tr>
                   <td >7</td>
				   <td >Was the information presented in terms you could understand?					</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
						<tr>
                   <td >8</td>
				   <td >Did we meet established deadlines? </td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
						<tr>
                   <td >9</td>
				   <td >Were we responsive to your questions and concerns?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
						<tr>
                   <td >10</td>
				   <td >Did staff provide a solution to your concerns that was resourceful and innovative?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
					 <td >11</td>
				   <td >What was your overall opinion of our services?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
					 <td >12</td>
				   <td >Were you kept up-to-date on issues or concerns?</td>
					<td >
					
    <select class="select2table" name="mydropdown" id="mydrop" onchange="">
     <option  value="5">5</option>
	 <option  value="4">4</option>
      <option value="3">3</option>
	   <option value="2">2</option>
       <option value="1">1</option>
   </div>
</td>

					<td><label id="mylabel"></label></td>
					
					
					</tr>
                  </tbody>
				  
                </table>
				<div align="center">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-primary-outline pull-right" type="submit">

    <i class="icon-plus"></i>

    Submit

</button></a></div>
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