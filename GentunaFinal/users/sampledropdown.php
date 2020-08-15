
	<form name="form1" method="post">
						<input type="hidden" name="pid" />
						<input type="hidden" name="command" />
	</form>
	<select name="one" onchange="javascript:del(this.value)">
	<option value="" selected="selected">Select...</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="0">Other</option>
	</select>
	<?php

	$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	
	if(@$_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	?>
	
	<script language="javascript">
		function del(pid){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
	}
	</script>
	
	<?php
function remove_product($pid){
		$query = mysql_query("Select * from unit where tid = '".$pid."';");
		echo "<select>";
		while($row = mysql_fetch_array($query))
		{
		echo "<option>".$row['unitname']."</option>";
		}
		echo "</select>";
	}
	?>
