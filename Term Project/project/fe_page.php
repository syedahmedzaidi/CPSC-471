<?php
 
 require('dbconf.inc');
 
 db_connect();
 
 /*print"<pre>";
 print_r($_POST);
 print"</pre>";*/

 $alltime = $_POST['alltimes'];
 $sametime = $_POST['sametime'];
 $fekey = $_POST['feprimarykey'];
 $startdate = $_POST['startdate'];
 $enddate = $_POST['enddate'];
 $starttime = $_POST['starttime'];
 $endtime = $_POST['endtime'];
 $input =  $_POST['Flag'];

if($alltime == 'on' && empty($fekey)){
 	echo"<h3>All Flow Elements for All Times</h3>";
 	echo"<br>";
	$qrySel="SELECT `ID_Tag`,`Location`, `Upstream`,`Downstream`, `Date`, `Time`, `Flag`, `Report` FROM flow_element";
 	$resSel = mysql_query($qrySel);

 	if($resSel){
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID Tag</th>";
		echo"<th>Location</th>";
		echo"<th>Upstream</th>";
		echo"<th>Downstream</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report</th>";
 		while($flow_element = mysql_fetch_assoc($resSel)){
				echo'<form method="post">
				<tr>
				<td>'.$flow_element['ID_Tag'].'</td>
				<td>'.$flow_element['Location'].'</td>
				<td>'.$flow_element['Upstream'].'</td>
				<td>'.$flow_element['Downstream'].'</td>
				<td>'.$flow_element['Date'].'</td>
				<td>'.$flow_element['Time'].'</td>
				<td>'.$flow_element['Flag'].'</td>
				<td>'.$flow_element['Report'].'</td>
				<td>'.'<input type="submit" name= "Flag" value="'.$flow_element['ID_Tag'].'">'.'</td>
				</tr>
				';
			}
		
		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
	
 }
else if($alltime == 'on' && !empty($fekey))
 {
 	echo"<h3>All Time for Flow Element #$fekey</h3>";
 	echo"<br>";
 	$qrySel="SELECT `ID_Tag`,`Location`, `Upstream`,`Downstream`, `Date`, `Time`, `Flag`, `Report` FROM flow_element
 			WHERE `ID_Tag` = $fekey";
 	$resSel = mysql_query($qrySel);

 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID Tag</th>";
		echo"<th>Location</th>";
		echo"<th>Upstream</th>";
		echo"<th>Downstream</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report</th>";
 		while($flow_element = mysql_fetch_assoc($resSel)){
			echo' <form method="post">
			<tr>
			<td>'.$flow_element['ID_Tag'].'</td>
			<td>'.$flow_element['Location'].'</td>
			<td>'.$flow_element['Upstream'].'</td>
			<td>'.$flow_element['Downstream'].'</td>
			<td>'.$flow_element['Date'].'</td>
			<td>'.$flow_element['Time'].'</td>
			<td>'.$flow_element['Flag'].'</td>
			<td>'.$flow_element['Report'].'</td>
			<td>'.'<input type="submit" name="Flag" value="'.$flow_element['ID_Tag'].'">'.'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
		echo"</form>";				
 	}
 }
 else if(empty($fekey) && $sametime == 'on' && !empty($startdate) && !empty($starttime))
 {
 	echo"<h3>All Flow Elements with Same Time</h3>";
 	echo"<br>";
 	$qrySel="SELECT `ID_Tag`, `Location`, `Upstream`,`Downstream`, `Date`, `Time`, `Flag`, `Report` FROM flow_element
 			WHERE `Date` = '$startdate' AND `Time` = '$starttime'";
 	$resSel = mysql_query($qrySel);

 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID Tag</th>";
		echo"<th>Location</th>";
		echo"<th>Upstream</th>";
		echo"<th>Downstream</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report</th>";
 		while($flow_element = mysql_fetch_assoc($resSel)){
			echo' <form method="post">
			<tr>
			<td>'.$flow_element['ID_Tag'].'</td>
			<td>'.$flow_element['Location'].'</td>
			<td>'.$flow_element['Upstream'].'</td>
			<td>'.$flow_element['Downstream'].'</td>
			<td>'.$flow_element['Date'].'</td>
			<td>'.$flow_element['Time'].'</td>
			<td>'.$flow_element['Flag'].'</td>
			<td>'.$flow_element['Report'].'</td>
			<td>'.'<input type="submit" name="Flag" value="'.$flow_element['ID_Tag'].'">'.'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";	
		echo"</form>";			
 	}
 }
 else if(!empty($fekey) && $sametime == 'on' && !empty($startdate) && !empty($starttime))
 {
 	echo"<h3>Flow Elements #$fekey with Same Time</h3>";
 	echo"<br>";
 	$qrySel="SELECT `ID_Tag`, `Location`, `Upstream`,`Downstream`, `Date`, `Time`, `Flag`, `Report` FROM flow_element
 			WHERE `ID_Tag` = $fekey AND `Date` = '$startdate' AND `Time` = '$starttime'";
 	$resSel = mysql_query($qrySel);

 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID Tag</th>";
		echo"<th>Location</th>";
		echo"<th>Upstream</th>";
		echo"<th>Downstream</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report</th>";
 		while($flow_element = mysql_fetch_assoc($resSel)){
			echo' <form method="post">
			<tr>
			<td>'.$flow_element['ID_Tag'].'</td>
			<td>'.$flow_element['Location'].'</td>
			<td>'.$flow_element['Upstream'].'</td>
			<td>'.$flow_element['Downstream'].'</td>
			<td>'.$flow_element['Date'].'</td>
			<td>'.$flow_element['Time'].'</td>
			<td>'.$flow_element['Flag'].'</td>
			<td>'.$flow_element['Report'].'</td>
			<td>'.'<input type="submit" name="Flag" value="'.$flow_element['ID_Tag'].'">'.'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
		echo"</form>";			
 	}
 }
 else if(empty($fekey) && !empty($startdate) && !empty($starttime) && !empty($enddate) && !empty($endtime) && $alltime != 'on' && $sametime != 'on'){
	
	echo"<h3>All Flow Elements between $startdate/$starttime And $enddate/$endtime</h3>";
 	echo"<br>";
	$qrySel="SELECT `ID_Tag`, `Location`, `Upstream`,`Downstream`, `Date`, `Time`, `Flag`, `Report` FROM flow_element
 			WHERE `Date` BETWEEN '$startdate' AND '$enddate' AND `Time` BETWEEN '$starttime' AND '$endtime' ";
 	$resSel = mysql_query($qrySel);

 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID Tag</th>";
		echo"<th>Location</th>";
		echo"<th>Upstream</th>";
		echo"<th>Downstream</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report</th>";
 		while($flow_element = mysql_fetch_assoc($resSel)){
			echo' <form method="post">
			<tr>
			<td>'.$flow_element['ID_Tag'].'</td>
			<td>'.$flow_element['Location'].'</td>
			<td>'.$flow_element['Upstream'].'</td>
			<td>'.$flow_element['Downstream'].'</td>
			<td>'.$flow_element['Date'].'</td>
			<td>'.$flow_element['Time'].'</td>
			<td>'.$flow_element['Flag'].'</td>
			<td>'.$flow_element['Report'].'</td>
			<td>'.'<input type="submit" name="Flag" value="'.$flow_element['ID_Tag'].'">'.'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
		echo"</form>";			
 	}
				
}
else if(!empty($fekey) && empty($startdate) && empty($starttime) && empty($enddate) && empty($endtime)){
	
	echo"<h3>Flow Element #$fekey between $startdate/$starttime And $enddate/$endtime</h3>";
 	echo"<br>";
	$qrySel="SELECT `ID_Tag`,`Location`, `Upstream`,`Downstream`, `Date`, `Time`, `Flag`, `Report` FROM flow_element
 			 WHERE `ID_Tag` = $fekey";
 	$resSel = mysql_query($qrySel);

 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID Tag</th>";
		echo"<th>Location</th>";
		echo"<th>Upstream</th>";
		echo"<th>Downstream</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag<th>";
 		while($flow_element = mysql_fetch_assoc($resSel)){
			echo' <form method="post">
			<tr>
			<td>'.$flow_element['ID_Tag'].'</td>
			<td>'.$flow_element['Location'].'</td>
			<td>'.$flow_element['Upstream'].'</td>
			<td>'.$flow_element['Downstream'].'</td>
			<td>'.$flow_element['Date'].'</td>
			<td>'.$flow_element['Time'].'</td>
			<td>'.$flow_element['Flag'].'</td>
			<td>'.$flow_element['Report'].'</td>
			<td>'.'<input type="submit" name="Flag" value="'.$flow_element['ID_Tag'].'">'.'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if($_POST['Flag'] == $input ){
				 $qrySel = "UPDATE `flow_element` SET `Report` = 1 WHERE `ID_Tag` = $input";
				 $resSel = mysql_query($qrySel);
				 
}
else{
 	echo"<h3> You can not have that. Review your Options</h3>";
 }

 db_close();
 
?>
