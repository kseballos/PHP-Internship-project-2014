<?php
$username = "root";
	$password = "root";
	$hostname = "localhost";
	$database = "gentuna";
	$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
	
	$connect = mysql_select_db($database , $dbhandle);
	@session_start();


$username1 =  $_SESSION['user'];

$sql2=mysql_query("select * from user  where  username='$username1'");
$row2=mysql_fetch_array($sql2);
$username=$row2['username'];
$first=$row2['first'];
$last=$row2['last'];
$dept=$row2['departmentid'];

//COUNT OF JO
	$sql6=mysql_query("select count(projectname) as countBDA from joborderdetails ");
									$row6=mysql_fetch_array($sql6);
									if(@$countBDA == ''){
									@$countBDA++;
									}else{
									$countBDA=$row6['countBDA'];
}
									$sql7=mysql_query("select count(projectname) as count from joborderdetails j where j.rateequivalent= 'RATED'");
									$row7=mysql_fetch_array($sql7);
									$count=$row7['count'];
									
									$sql8=mysql_query("select count(projectname) as count1 from joborderdetails j  where j.rateequivalent= '1'");
									$row1=mysql_fetch_array($sql8);
									$count1=$row1['count1'];
               
			   
			 //SUM

			 $sql9=("select sum(ratevalue) from rating where departmentid = 'FED'");
				$new = mysql_query($sql9);
				while($rows = mysql_fetch_array($new)){
				$b= number_format($rows['sum(ratevalue)'],2);
				$rate = number_format(($count/$countBDA),2);
				$per = $rate * 100 ;

					//COUNT FOR RATE EQUI
					$sql10=mysql_query("select count(rateequivalent) as count3 from rating   where rateequivalent= 'UNACCEPTABLE' and departmentid='FED'");
									$row2=mysql_fetch_array($sql10);
									$count3=$row2['count3'];
									
									$sql3=mysql_query("select count(rateequivalent) as acc from rating   where rateequivalent= 'ACCEPTABLE' and departmentid='FED'");
									$row4=mysql_fetch_array($sql3);
									$acc=$row4['acc'];
									
									$sql5=mysql_query("select count(rateequivalent) as su from rating   where rateequivalent= 'SOMEWHAT UNACCEPTABLE' and departmentid='FED'");
									$row5=mysql_fetch_array($sql5);
									$su=$row5['su'];
									
									$sql11=mysql_query("select count(rateequivalent) as ex from rating   where rateequivalent= 'EXCELLENT' and departmentid='FED'");
									$row11=mysql_fetch_array($sql11);
									$ex=$row11['ex'];
									
									//PERCENTAGE
						 $sql11=mysql_query("select count(rateequivalent) as fedco from rating where departmentid='FED'");
						$row11=mysql_fetch_array($sql11);
						$fedco = $row11['fedco'];
						
					  
					  $result = ($count3/$fedco);
					  $num = number_format($result,2);
					  $final = $num *100 ;
					  
					   
					  $result1 = ($acc/$fedco);
					  $num1 = number_format($result1,2);
					  $final1 = $num1 *100 ;
					  
					  $som = ($su/$fedco);
					  $num2 = number_format($som,2);
					  $final2 = $num2 *100 ;
					  
					  $exc = ($ex/$fedco);
					  $num3 = number_format($exc,2);
					  $final3 = $num3 *100 ;
					}
					
					
					
					//------------------------------------------------------------------
					//REQUESTS
					  
								
									
									$rsql=mysql_query("select count(title) as rcount1 from requestpost ");
									$rrow=mysql_fetch_array($rsql);
									if(@$rcount1 == ''){
									@$rcount1++;
									}else{
									$rcount1=$rrow['rcount1'];
									}

									$rsql1=mysql_query("select count(title) as rcount2 from requestpost j where j.rateequivalent= 'RATED'");
									$rrow1=mysql_fetch_array($rsql1);
									$rcount2=$rrow1['rcount2'];
									
									$rsql2=mysql_query("select count(title) as rcount3 from requestpost j  where j.rateequivalent= '1'");
									$rrow2=mysql_fetch_array($rsql2);
									$rcount3=$rrow2['rcount3'];
									
									
									$sql9=("select sum(ratevalue) from rating where departmentid = 'IT'");
									$new = mysql_query($sql9);
									while($rows = mysql_fetch_array($new)){
									//$count4= number_format($row8);
									
									 //SUM

			 $rsql9=("select sum(ratevalue) from rating where departmentid = 'IT'");
				$rnew = mysql_query($rsql9);
				while($rrows = mysql_fetch_array($rnew)){
				$rb= number_format($rrows['sum(ratevalue)'],2);
				$rate1 = number_format(($rcount2/$rcount1),2);
				$per1 = $rate1 * 100 ;

					//COUNT FOR RATE EQUI
					$rsql10=mysql_query("select count(rateequivalent) as rcounts from rating   where rateequivalent= 'UNACCEPTABLE' and departmentid='IT'");
									$rrows2=mysql_fetch_array($rsql10);
									$rcounts=$rrows2['rcounts'];
									
									$rsql3=mysql_query("select count(rateequivalent) as racc from rating   where rateequivalent= 'ACCEPTABLE' and departmentid='IT'");
									$rrow4=mysql_fetch_array($rsql3);
									$racc=$rrow4['racc'];
									
									$rsql5=mysql_query("select count(rateequivalent) as rsu from rating   where rateequivalent= 'SOMEWHAT UNACCEPTABLE' and departmentid='IT'");
									$rrow5=mysql_fetch_array($rsql5);
									$rsu=$rrow5['rsu'];
									
									$rsql11=mysql_query("select count(rateequivalent) as rex from rating   where rateequivalent= 'EXCELLENT' and departmentid='IT'");
									$rrow11=mysql_fetch_array($rsql11);
									$rex=$rrow11['rex'];
									
									//PERCENTAGE
						 $rsql11=mysql_query("select count(rateequivalent) as rfedco from rating where departmentid='IT'");
						$rrow11=mysql_fetch_array($rsql11);
						$rfedco = $rrow11['rfedco'];
						
					  
					  $rresult = ($rcounts/$fedco);
					  $num = number_format($rresult,2);
					  $rfinal = $num *100 ;
					  
					   
					  $rresult1 = ($racc/$fedco);
					  $num1 = number_format($rresult1,2);
					  $rfinal1 = $num1 *100 ;
					  
					  $rsom = ($rsu/$rfedco);
					  $rnum2 = number_format($rsom,2);
					  $rfinal2 = $rnum2 *100 ;
					  
					  $rexc = ($rex/$rfedco);
					  $rnum3 = number_format($rexc,2);
					  $rfinal3 = $rnum3 *100 ;
					}
									
				}					
              
					?>		
					
					
					




