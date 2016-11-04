<?php
 require('dbconf.inc');
 
 db_connect(); 
 
 /*print"<pre>";
 print_r($_POST);
 print"</pre>";*/
 $input = $_POST['Update'];
 $feid = $_POST['feid'];
 $temperature = $_POST['temperature'];
 $pressure = $_POST['pressure'];
 $flow = $_POST['flow'];
 $amount = $_POST['amount'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $idtag = $_POST['idtag'];
 
if($_POST['submit'] == 'Update'){
 	echo"<h3>All Flagged Integrated Technologies</h3>";
 	echo"<br>";
	$qrySel="SELECT `ID`,`Fe_ID`,`Temperature`,`Pressure`,`Flow`, `Amount`,`Date`,`Time`,`Flag`
			FROM integrated_technology
			WHERE `Flag` = 1";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID</th>";
 		echo"<th>Fe_ID</th>";
 		echo"<th>Temperature</th>";
 		echo"<th>Pressure</th>";
 		echo"<th>Flow</th>";
 		echo"<th>Amount</th>";
 		echo"<th>Date</th>";
 		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Update</th>";
 		while($row_it = mysql_fetch_assoc($resSel)){
				echo'<form method="post">
				<tr>
				<td>'.$row_it['ID'].'</td>
				<td>'.$row_it['Fe_ID'].'</td>
				<td>'.$row_it['Temperature']. ' Fahrenheit'.'</td>
				<td>'.$row_it['Pressure']. ' psi'.'</td>
				<td>'.$row_it['Flow']. ' m^3/s'.'</td>
				<td>'.$row_it['Amount'].'</td>
				<td>'.$row_it['Date'].'</td>
				<td>'.$row_it['Time'].'</td>
				<td>'.$row_it['Flag'].'</td>
				<td>'.'<input id="update" type="submit" name= "Update" value="'.$row_it['ID'].'">'.'</td>
				</tr>
				';
			}
		echo"</tr>";
		echo"</table>";
		echo"</form>";
	}
 }
else if($_POST['submit2'] == 'Update Integrated Technology' && !empty($idtag) && !empty($feid) && !empty($temperature) && !empty($pressure) && !empty($flow) && !empty($amount) && !empty($date) && !empty($time)){
	
	$qrySel="UPDATE integrated_technology
			SET `Temperature` = $temperature, `Pressure` = $pressure ,`Flow` = $flow ,`Amount` = $amount,
			`Date` = '$date', `Time` = '$time', `Flag` = 0, `Report` = 0
			WHERE ID = $idtag AND Fe_ID = $feid";
	$resSel = mysql_query($qrySel);
	if($resSel){
		echo"<h3>Integrated Technology #$idtag has been Updated.</h3>";
	}
}
else if($_POST['Update'] == $input){
 	
 	echo'<form method ="post">
 	ID = <input type="text" name="idtag" value="'.$input.'" readonly><br><br>
 	FE ID: <input type="text" name="feid"><br><br>
 	Temperature: <input type="text" name="temperature"><br><br>
 	Pressure: <input type="text" name="pressure"><br><br>
 	Flow: <input type="text" name="flow"><br><br>
 	Amount: <input type="text" name="amount"><br><br>
 	Date: <input type="date" name="date"><br><br>
 	Time: <input type="time" name="time"><br><br>
 	<input id="Add" type="submit" name="submit2" value="Update Integrated Technology">
 	</form>
 	';
 	
}
 
 db_close();
?>