<?php
include 'lock1.php';
$ddval = @$_REQUEST['citydiv'];
$getvalue = mysql_query("Select username from requestpost where prioritynumber ='$ddval'");
if($rows = mysql_fetch_array($getvalue))
{
?>
<input type="text" name="sample" id="sample" value="<?php echo $rows['username']?>">   
<?php
}
?>

<input type="text" name="sample" id="sample" value="<?php echo $rows['username']?>">