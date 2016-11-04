<?php
		 	require('dbconf.inc');
 
 			db_connect();
 			
 			echo"<h3>List Of All Facilities</h3>";
 			echo"<br>";
 			
 			$qrySel="SELECT `Facility_ID`, `Name`, `Location`, `Description`, `Company`, `Connected_Pipe`
					 FROM Facility";
 			$resSel = mysql_query($qrySel);
 			if($resSel){
 		
	 			echo"<table border='1'>";
	 			echo"<tr>";
	 			echo"<th>Facility ID</th>";
				echo"<th>Name</th>";
				echo"<th>Location</th>";
				echo"<th>Description</th>";
				echo"<th>Company</th>";
				echo"<th>Connected Pipes</th>";
	 			while($facility = mysql_fetch_assoc($resSel)){
					echo'
					<tr>
					<td>'.$facility['Facility_ID'].'</td>
					<td>'.$facility['Name'].'</td>
					<td>'.$facility['Location'].'</td>
					<td>'.$facility['Description'].'</td>
					<td>'.$facility['Company'].'</td>
					<td>'.$facility['Connected_Pipe'].'</td>
					</tr>
				';
				}
			}
			echo"</tr>";
			echo"</table>";			
 			db_close();
 					
?>