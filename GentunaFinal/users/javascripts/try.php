<html> 
<table> 
<thead> 
<tr> 
<th>title</th> 

<th>date time</th>
 <th>username</th> 
 <th>department</th> 
 <th>business</th> 
 <th>Status</th> 
 <th>available</th> 
 </tr> 
 </thead> 
 <tbody> 
 <?php require('config.php');
 $sql="SELECT r.title, r.datetime , r.username , r.departmentid, r.businessunitid, r.statusid, r.availdate FROM requestpost r, loginacc la WHERE la.username=r.username"; $result=mysql_query($sql); ?>

 <?php while($rows=mysql_fetch_array($result)){ 
 echo '<tr>'; 
 echo "<td>" .$rows['title']."</td>"; 
 echo "<td>".$rows['datetime']. "</td>"; 
 echo "<td>".$rows['username']."</td>"; 
 echo "<td>".$rows['departmentid']."</td>"; 
 echo "<td>".$rows['businessunitid']."</td>"; 
 echo "<td>".$rows['statusid']."</td>"; 
 echo "<td>".$rows['availdate']."</td>"; 
 echo "</tr>"; 
 
 } ?> 
 </tbody> 
 </table> 
</html>