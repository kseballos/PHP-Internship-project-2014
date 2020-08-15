<?Php
@$cat_id=$_GET['cat_id'];
//$cat_id=2;
/// Preventing injection attack //// 
if(!is_numeric($cat_id)){
echo "Data Error";
exit;
 }
/// end of checking injection attack ////
require "config.php";
$str='';
$sql="select * from subcategory where cat_id='$cat_id'";
foreach ($dbo->query($sql) as $row) {
$str=$str . "$row[subcategory]".",";
}
$str=substr($str,0,(strLen($str)-1)); // Removing the last char , from the string

$main = array($str);
echo json_encode($str); 
//echo $str;
?>