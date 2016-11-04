<?php
 require('dbconf.inc');
 
 db_connect(); 
 
 /*print"<pre>";
 print_r($_POST);
 print"</pre>";*/
 $input = $_POST['Update'];
 $felocation = $_POST['felocation'];
 $fedescription = $_POST['fedescription'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $idtag = $_POST['idtag'];
 
if($_POST['submit'] == 'Update'){
 	echo"<h3>All Flagged Flow Elements</h3>";
 	echo"<br>";
	$qrySel="SELECT `ID_Tag`,`Upstream`,`Downstream`,`Location`,`Date`, `Time`,`Flag` FROM flow_element
			WHERE `Flag` = 1";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID Tag</th>";
 		echo"<th>Upstream</th>";
 		echo"<th>Downstream</th>";
 		echo"<th>Location</th>";
 		echo"<th>Date</th>";
 		echo"<th>Time</th>";
		echo"<th>Flag</th>";
		echo"<th>Update</th>";
 		while($flow_element = mysql_fetch_assoc($resSel)){
				echo'<form method="post">
				<tr>
				<td>'.$flow_element['ID_Tag'].'</td>
				<td>'.$flow_element['Upstream'].'</td>
				<td>'.$flow_element['Downstream'].'</td>
				<td>'.$flow_element['Location'].'</td>
				<td>'.$flow_element['Date'].'</td>
				<td>'.$flow_element['Time'].'</td>
				<td>'.$flow_element['Flag'].'</td>
				<td>'.'<input id="update" type="submit" name= "Update" value="'.$flow_element['ID_Tag'].'">'.'</td>
				</tr>
				';
			}
		
		echo"</tr>";
		echo"</table>";
		echo"</form>";
	}
 }
else if($_POST['submit2'] == 'Update Flow Element' && !empty($idtag) &&!empty($felocation) && !empty($fedescription) && !empty($date)&&
		!empty($time)){
	$qrySel="UPDATE Flow_Element
			SET `Location` = '$felocation', `Description` = '$fedescription',
			`Date` = '$date', `Time` = '$time', `Flag` = 0, `Report` = 0
			WHERE ID_Tag = $idtag";
	$resSel = mysql_query($qrySel);
	if($resSel){
		echo"<h3>Flow Element #$idtag has been Updated.</h3>";
	}
}
else if($_POST['Update'] == $input){
 	
 	echo'<form method ="post">
 	ID Tag = <input type="text" name="idtag" value="'.$input.'" readonly><br><br>
 	Location: <input type="text" name="felocation"><br><br>
 	Description: <input type="text" name="fedescription"><br><br>
 	Date: <input type="date" name="date"><br><br>
 	Time: <input type="time" name="time"><br><br>
 	<input id="Add" type="submit" name="submit2" value="Update Flow Element">
 	</form>
 	';
 	
}
 
 db_close();
?>