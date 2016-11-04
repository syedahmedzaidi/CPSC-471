<?php
 require('dbconf.inc');
 
 db_connect();

 /*print"<pre>";
 print_r($_POST);
 print"</pre>";*/
 
 $itkey = $_POST['itprimary'];
 $isTemperature = $_POST['temperature'];
 $isPressure = $_POST['pressure'];
 $isFlow = $_POST['flow'];
 $input =  $_POST['Flag'];
 $feid = $_POST['feprimary'];
 $itkey2 = $_POST['new2'];
 $alltime =  $_POST['alltimes'];
 $sametime =  $_POST['sametime'];
 $starttime = $_POST['starttime'];
 $startdate =  $_POST['startdate'];
 $enddate =  $_POST['enddate'];
 $endtime =  $_POST['endtime'];
 
 
 if($isTemperature == 'on' && $isPressure == 'on' && $isFlow == 'on' && empty($itkey)){
 	
 	$qrySel = "SELECT `ID`,`Temperature`,`Pressure`, `Flow`,`Date`,`Time`,`Flag`,`Report` FROM integrated_technology";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
 }
 else if($isTemperature == 'on' && $isPressure == 'on' && $isFlow == 'on' && !empty($itkey)){
 	$qrySel = "SELECT `ID`,`Temperature`,`Pressure`, `Flow`,`Date`,`Time`, `Flag`, `Report`
 				FROM integrated_technology
 				WHERE `ID` = $itkey";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
 }
else if($isTemperature == 'on' && $isPressure == 'on' && empty($itkey)){
 	$qrySel = "SELECT `ID`,`Temperature`,`Pressure`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Pressure</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
 	
}
else if($isTemperature == 'on' && $isPressure == 'on' && !empty($itkey)){
	$qrySel = "SELECT `ID`,`Temperature`,`Pressure`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology
				WHERE `ID` = $itkey";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Pressure</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}	
}
else if($isTemperature == 'on' && $isFlow == 'on' && empty($itkey)){
 	$qrySel = "SELECT `ID`,`Temperature`,`Flow`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
 	
}
else if($isTemperature == 'on' && $isFlow == 'on' && !empty($itkey)){
 	$qrySel = "SELECT `ID`,`Temperature`,`Flow`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology
				WHERE `ID` = $itkey";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}	
 	
}
else if($isPressure == 'on' && $isFlow == 'on' && empty($itkey)){
 	$qrySel = "SELECT `ID`,`Pressure`,`Flow`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
 	
}
else if($isPressure == 'on' && $isFlow == 'on' && !empty($itkey)){
 	$qrySel = "SELECT `ID`,`Pressure`,`Flow`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology
				WHERE `ID` = $itkey";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}	
 	
}
else if($isTemperature == 'on' && empty($itkey)){
	$qrySel = "SELECT `ID`,`Temperature`, `Date`,`Time`, `Flag`, `Report` FROM integrated_technology";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if($isTemperature == 'on' && !empty($itkey)){
	$qrySel = "SELECT `ID`,`Temperature`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology WHERE `ID` = $itkey";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if($isPressure == 'on' && empty($itkey)){
	$qrySel = "SELECT `ID`,`Pressure`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Pressure</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if($isPressure == 'on' && !empty($itkey)){
	$qrySel = "SELECT `ID`,`Pressure`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology WHERE `ID` = $itkey";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Pressure</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if($isFlow == 'on' && empty($itkey)){
	$qrySel = "SELECT `ID`,`Flow`, `Date`,`Time`,`Flag`, `Report` FROM integrated_technology";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if($isFlow == 'on' && !empty($itkey)){
	$qrySel = "SELECT `ID`,`Flow`,`Date`,`Time`, `Flag`, `Report` FROM integrated_technology WHERE `ID` = $itkey";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if(!empty($feid)){
	$qrySel = "SELECT `Fe_ID`,`ID`, `Temperature`,`Pressure`,`Flow`, `Date`,`Time`,`Flag`, `Report` FROM integrated_technology WHERE `Fe_ID` = $feid";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>FE ID</th>";
 		echo"<th>IT ID</th>";
 		echo"<th>Temperature</th>";
 		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['Fe_ID'].'</td>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
	
}
else if(empty($itkey2) && !empty($startdate) && !empty($starttime) && !empty($enddate) && !empty($endtime) && $alltime != 'on' && $sametime != 'on'){
	echo"<h3>All Integrated Technologies between $startdate/$starttime And $enddate/$endtime</h3>";
 	echo"<br>";
	$qrySel="SELECT `ID`, `Fe_ID`, `Temperature`,`Pressure`, `Amount`, `Date`, `Time`, `Flag`, `Report`
			FROM integrated_technology
 			WHERE `Date` BETWEEN '$startdate' AND '$enddate' AND `Time` BETWEEN '$starttime' AND '$endtime' ";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>FE ID</th>";
 		echo"<th>IT ID</th>";
 		echo"<th>Temperature</th>";
 		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['Fe_ID'].'</td>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";	
	}
				
}
else if(empty($itkey2)&& $alltime == 'on'){
	$qrySel = "SELECT `ID`,`Fe_ID`,`Temperature`,`Pressure`, `Flow`,`Date`,`Time`,`Flag`,`Report` FROM integrated_technology";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
 		echo"<th>FE ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Fe_ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if(!empty($itkey2)&& $alltime == 'on'){
	$qrySel = "SELECT `ID`,`Fe_ID`,`Temperature`,`Pressure`, `Flow`,`Date`,`Time`,`Flag`,`Report` 
			FROM integrated_technology
			WHERE `ID` = $itkey2";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
 		echo"<th>FE ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Fe_ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
}
else if(empty($itkey2) && !empty($startdate) && !empty($starttime) && $sametime == 'on'){
	echo"<h3>All Integrated Technologies with Date = $startdate And Time = $starttime</h3>";
	echo"<br>";
 	$qrySel="SELECT `ID`,`Fe_ID`, `Temperature`,`Pressure`, `Flow`, `Date`, `Time`, `Flag`, `Report` 
 			FROM integrated_technology
 			WHERE `Date` = '$startdate' AND `Time` = '$starttime'";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>IT ID</th>";
 		echo"<th>FE ID</th>";
		echo"<th>Temperature</th>";
		echo"<th>Pressure</th>";
		echo"<th>Flow</th>";
		echo"<th>Date</th>";
		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Report/Flag</th>";
 		while($rowit = mysql_fetch_assoc($resSel)){
 			echo'<form method="post">
			<tr>
			<td>'.$rowit['ID'].'</td>
			<td>'.$rowit['Fe_ID'].'</td>
			<td>'.$rowit['Temperature']. ' Fahrenheit'.'</td>
			<td>'.$rowit['Pressure']. ' psi'.'</td>
			<td>'.$rowit['Flow']. ' m^3/s'.'</td>
			<td>'.$rowit['Date'].'</td>
			<td>'.$rowit['Time'].'</td>
			<td>'.$rowit['Flag'].'</td>
			<td>'.$rowit['Report'].'</td>
			<td>'.'<input type="submit" name= "Flag" value="Report '.$rowit['ID'].'">'.'</td>
			</tr>
			';
 		}
 		echo"</tr>";
		echo"</table>";
		echo"</form>";		
 	}
 	
}
else if(empty($itkey2) && empty($startdate) && empty($starttime) && empty($enddate) && empty($endtime) && $alltime != 'on' && $sametime != 'on'){
	
	echo"<h3>Please select a criteria for output!</h3>";
}
else if($_POST['Flag'] == $input ){
				 $qrySel = "UPDATE `integrated_technology` SET `Report` = 1 WHERE `ID` = $input";
				 $resSel = mysql_query($qrySel);
				 if($resSel)
				 {
				 	echo"<h3>$input has been Reported.<h3>";
				 }	 
}
else{
	echo"<h3>Such Data Doesn't Exist<h3>";
 	echo "<br>";
 	echo "<br>";
}
 db_close();
?>