<?php
//$con=mysql_connect('localhost','root','root') or die('Mysql not connected');
//mysql_select_db('location',$con) or die('DataBase not connected');

$tid = $_REQUEST['tid'];

$query="select * from unit where tid='$tid'";

?>
<select name="unitid"  style="padding:10px;width:200px;font-size:20px;">
<option value="" selected="selected">-- Select city --</option>
<?php
$query_result=mysql_query($query)or mysql_error();
while($row=mysql_fetch_array($query_result))
{
?>
<option value="<?php echo $row['tid']; ?>"><?php echo $row['unitname']; ?></option>
<?php
}
?>
</select>
