<?php
 require('dbconf.inc');
 
 db_connect();
 
 /*print"<pre>";
 print_r($_POST);
 print"</pre>";*/

 $pipekey = $_POST['pipeprimary'];
 $pipelocation = $_POST['pipelocation'];
 $pipetype = $_POST['Pipe-Type'];
 $pipeamount = $_POST['amount'];
 $subkey = $_POST['subsectionid'];
 $pipeDiameter = $_POST['pipediameter'];
 $pipeLength = $_POST['pipelength'];
 
 if($pipelocation=='on' && $pipetype == 'on' && $pipeamount == 'on' && empty($pipekey)){

 	$qrySel="SELECT `Pipe_ID`, `Location`, `Amount`,`Material`, `Diameter`, `Length`, `Manufacturer` FROM pipe, pipe_type 
 			 WHERE `ID_Name` = `PipeType` order by Pipe_ID ASC";
 	$resSel = mysql_query($qrySel);
 	$pipeid = 1;

 	if($resSel){
 		
 		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>Pipe ID</th>";
		echo"<th>Location</th>";
		echo"<th>Amount</th>";
		echo"<th>Material</th>";
		echo"<th>Diameter</th>";
		echo"<th>Length</th>";
		echo"<th>Manufacturer</th>";
 		while($rowpipe = mysql_fetch_assoc($resSel)){
			echo'
			<tr>
			<td>'.$pipeid.'</td>
			<td>'.$rowpipe['Location'].'</td>
			<td>'.$rowpipe['Amount'].'</td>
			<td>'.$rowpipe['Material'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			<td>'.$rowpipe['Manufacturer'].'</td>
			</tr>
			';
			$pipeid++;
		}
		echo"</tr>";
		echo"</table>";			
 	}
 }
 else if($pipelocation=='on' && $pipetype == 'on' && $pipeamount == 'on' && !empty($pipekey)){

 	$qrySel="SELECT `Pipe_ID`, `Location`, `Amount`, `Material`, `Diameter`, `Length`, `Manufacturer` FROM pipe, pipe_type 
 	WHERE Pipe_ID= '$pipekey' AND `ID_Name` = `PipeType` order by Pipe_ID ASC";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Location</th>";
		echo"<th>Amount</th>";
		echo"<th>Material</th>";
		echo"<th>Diameter</th>";
		echo"<th>Length</th>";
		echo"<th>Manufacturer</th>";
 		while($rowpipe = mysql_fetch_array($resSel)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Location'].'</td>
			<td>'.$rowpipe['Amount'].'</td>
			<td>'.$rowpipe['Material'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			<td>'.$rowpipe['Manufacturer'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
 	}
 }
 else if($pipelocation=='on' && $pipetype == 'on' && empty($pipekey)){
 	$qrySel="SELECT `Pipe_ID`, `Location`,`Material`, `Diameter`, `Length`, `Manufacturer` 
 			FROM pipe, pipe_type
 			WHERE `ID_Name` = `PipeType`
 			ORDER BY Pipe_ID Asc";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Location</th>";
		echo"<th>Material</th>";
		echo"<th>Diameter</th>";
		echo"<th>Length</th>";
		echo"<th>Manufacturer</th>";
 		while($rowpipe = mysql_fetch_array($resSel)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Location'].'</td>
			<td>'.$rowpipe['Material'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			<td>'.$rowpipe['Manufacturer'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
 	}
 }
 else if($pipelocation=='on' && $pipetype == 'on' && !empty($pipekey)){
 	$qrySel="SELECT `Pipe_ID`, `Location`,`Material`, `Diameter`, `Length`, `Manufacturer` 
 			FROM pipe, pipe_type
 			WHERE `Pipe_ID` = $pipekey AND `ID_Name` = `PipeType`
 			ORDER BY Pipe_ID Asc";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Location</th>";
		echo"<th>Material</th>";
		echo"<th>Diameter</th>";
		echo"<th>Length</th>";
		echo"<th>Manufacturer</th>";
 		while($rowpipe = mysql_fetch_array($resSel)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Location'].'</td>
			<td>'.$rowpipe['Material'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			<td>'.$rowpipe['Manufacturer'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
 	}
}
else if($pipelocation=='on' && $pipeamount == 'on' && empty($pipekey)){
	$qrySel="SELECT `Pipe_ID`, `Location`,`Amount` 
 			FROM pipe
 			ORDER BY Pipe_ID Asc";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Location</th>";
		echo"<th>Amount</th>";
 		while($rowpipe = mysql_fetch_array($resSel)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Location'].'</td>
			<td>'.$rowpipe['Amount'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
 	}
}
else if($pipelocation=='on' && $pipeamount == 'on' && !empty($pipekey)){
	$qrySel="SELECT `Pipe_ID`, `Location`,`Amount` 
 			FROM pipe
 			WHERE `Pipe_ID` = $pipekey
 			ORDER BY Pipe_ID Asc";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Location</th>";
		echo"<th>Amount</th>";

 		while($rowpipe = mysql_fetch_array($resSel)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Location'].'</td>
			<td>'.$rowpipe['Amount'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
 	}
}
else if($pipetype == 'on' && $pipeamount == 'on' && empty($pipekey)){
	
	$qrySel="SELECT `Pipe_ID`, `Amount`,`Material`, `Diameter`, `Length`, `Manufacturer` 
 			FROM pipe, pipe_type
 			WHERE `ID_Name` = `PipeType`
 			ORDER BY Pipe_ID Asc";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>Pipe ID</th>";
    	echo"<th>Amount</th>";
		echo"<th>Material</th>";
		echo"<th>Diameter</th>";
		echo"<th>Length</th>";
		echo"<th>Manufacturer</th>";
 		while($rowpipe = mysql_fetch_array($resSel)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Amount'].'</td>
			<td>'.$rowpipe['Material'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			<td>'.$rowpipe['Manufacturer'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
 	}

}
else if($pipetype == 'on' && $pipeamount == 'on' && !empty($pipekey)){
	
	$qrySel="SELECT `Pipe_ID`, `Amount`,`Material`, `Diameter`, `Length`, `Manufacturer` 
 			FROM pipe, pipe_type
 			WHERE `Pipe_ID` = $pipekey AND `ID_Name` = `PipeType`
 			ORDER BY Pipe_ID Asc";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>Pipe ID</th>";
    	echo"<th>Amount</th>";
		echo"<th>Material</th>";
		echo"<th>Diameter</th>";
		echo"<th>Length</th>";
		echo"<th>Manufacturer</th>";
 		while($rowpipe = mysql_fetch_array($resSel)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Amount'].'</td>
			<td>'.$rowpipe['Material'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			<td>'.$rowpipe['Manufacturer'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
 	}

}
 else if($pipelocation=='on' && empty($pipekey)){

 	$qrySel="SELECT `Pipe_ID`, `Location` FROM pipe order by Pipe_ID ASC";
 	$resSel = mysql_query($qrySel);
 	$pipeid = 1;
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Location</th>";
 		while($rowpipe = mysql_fetch_array($resSel, MYSQL_ASSOC)){
			echo'
			<tr>
			<td>'.$pipeid.'</td>
			<td>'.$rowpipe['Location'].'</td>
			</tr>
			';
			$pipeid++;
		}
		echo"</tr>";
		echo"</table>";
			
 	}
 }
 else if($pipelocation=='on' && !empty($pipekey)){

 	$qrySel="SELECT `Pipe_ID`, `Location` FROM pipe WHERE Pipe_ID='$pipekey'";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Location</th>";
 		while($rowpipe = mysql_fetch_array($resSel, MYSQL_ASSOC)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Location'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table>";
			
 	}
 }
 else if($pipetype == 'on' && empty($pipekey)){

 	$qrySel="SELECT `Pipe_ID`,`Material`, `Diameter`, `Length`, `Manufacturer` FROM pipe, pipe_type 
 			 WHERE `ID_Name` = `PipeType` order by Pipe_ID ASC";
 	$resSel = mysql_query($qrySel);
 	$pipeid = 1;
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Material</th>";
		echo"<th>Diameter</th>";
		echo"<th>Length</th>";
		echo"<th>Manufacturer</th>";
 		while($rowpipe = mysql_fetch_array($resSel, MYSQL_ASSOC)){
			echo'
			<tr>
			<td>'.$pipeid.'</td>
			<td>'.$rowpipe['Material'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			<td>'.$rowpipe['Manufacturer'].'</td>
			</tr>
			';
			$pipeid++;
		}
		echo"</tr>";
		echo"</table";
			
 	}
 }
 else if($pipetype == 'on' && !empty($pipekey)){

 	$qrySel="SELECT `Pipe_ID`,`Material`, `Diameter`,`Length`,`Manufacturer` FROM pipe, pipe_type 
 			 WHERE Pipe_ID='$pipekey' AND `ID_Name` = `PipeType` order by Pipe_ID ASC";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>ID</th>";
		echo"<th>Material</th>";
		echo"<th>Diameter</th>";
		echo"<th>Length</th>";
		echo"<th>Manufacturer</th>";
 		while($rowpipe = mysql_fetch_array($resSel, MYSQL_ASSOC)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Material'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			<td>'.$rowpipe['Manufacturer'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table";
			
 	}
 }
 else if(!empty($pipeDiameter)){
 	
 	$qrySel = "SELECT `Pipe_ID` ,`Location`, `Diameter` FROM pipe, pipe_type 
 				WHERE `Diameter` = $pipeDiameter AND `PipeType` = `ID_Name` 
 				ORDER BY `Pipe_Id` ASC";
 				
 	$resSel = mysql_query($qrySel);
 	if($resSel){
		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>Pipe ID</th>";
    	echo"<th>Location</th>";
		echo"<th>Diameter</th>";
 		while($rowpipe = mysql_fetch_array($resSel, MYSQL_ASSOC)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Location'].'</td>
			<td>'.$rowpipe['Diameter'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table";
			
 	}
 }
 else if(!empty($pipeLength)){
 	
 	$qrySel = "SELECT `Pipe_ID` ,`Location`, `Length` FROM pipe, pipe_type 
 				WHERE `Length` = $pipeLength AND `PipeType` = `ID_Name` 
 				ORDER BY `Pipe_Id` ASC";
 				
 	$resSel = mysql_query($qrySel);
 	if($resSel){
		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>Pipe ID</th>";
    	echo"<th>Location</th>";
		echo"<th>Length</th>";
 		while($rowpipe = mysql_fetch_array($resSel, MYSQL_ASSOC)){
			echo'
			<tr>
			<td>'.$rowpipe['Pipe_ID'].'</td>
			<td>'.$rowpipe['Location'].'</td>
			<td>'.$rowpipe['Length'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table";
			
 	}
 	
 }
 else if(!empty($subkey)){
 	
 	$qrySel="SELECT `Pipe_ID`, `Sub_ID`, `NumConnectors` ,`ID_Connect`, `Starts_At`, `Ends_At`, 
 	`Activity` FROM subsection WHERE `Sub_ID` ='$subkey'";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
 		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>Pipe ID</th>";
    	echo"<th>Subsection ID</th>";
		echo"<th>Number of Connectors</th>";
		echo"<th>Connectors ID</th>";
		echo"<th>FE Starts At</th>";
		echo"<th>FE Ends At</th>";
		echo"<th>Activity</th>";
 		while($rowsub = mysql_fetch_array($resSel, MYSQL_ASSOC)){
			echo'
			<tr>
			<td>'.$rowsub['Pipe_ID'].'</td>
			<td>'.$rowsub['Sub_ID'].'</td>
			<td>'.$rowsub['NumConnectors'].'</td>
			<td>'.$rowsub['ID_Connect'].'</td>
			<td>'.$rowsub['Starts_At'].'</td>
			<td>'.$rowsub['Ends_At'].'</td>
			<td>'.$rowsub['Activity'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table";
			
 	}
 	
 }
 else if(empty($subkey) && empty($pipekey) && empty($pipeDiameter) && empty($pipeLength)){
 	$qrySel="SELECT `Pipe_ID`, `Sub_ID`, `NumConnectors` ,`ID_Connect`, `Starts_At`, `Ends_At`, 
 	`Activity` FROM subsection ORDER BY Pipe_ID ASC";
 	$resSel = mysql_query($qrySel);
 	
 	if($resSel){
		echo"<table border='1'>";
    	echo"<tr>";
    	echo"<th>Pipe ID</th>";
    	echo"<th>Subsection ID</th>";
		echo"<th>Number of Connectors</th>";
		echo"<th>Connectors ID</th>";
		echo"<th>FE Starts At</th>";
		echo"<th>FE Ends At</th>";
		echo"<th>Activity</th>"; 	
 		while($rowsub = mysql_fetch_array($resSel, MYSQL_ASSOC)){
			echo'
			<tr>
			<td>'.$rowsub['Pipe_ID'].'</td>
			<td>'.$rowsub['Sub_ID'].'</td>
			<td>'.$rowsub['NumConnectors'].'</td>
			<td>'.$rowsub['ID_Connect'].'</td>
			<td>'.$rowsub['Starts_At'].'</td>
			<td>'.$rowsub['Ends_At'].'</td>
			<td>'.$rowsub['Activity'].'</td>
			</tr>
			';
		}
		echo"</tr>";
		echo"</table";
			
 	}
 	
 }
 else if(!empty($pipekey) && empty($subkey) || empty($pipekey))
 {
 	echo "Please select output criteria";
 	echo "<br>";
 	echo " <br>";
 	
 }
 else{
 	
 	echo " Such Data Doesn't Exist";
 	echo "<br>";
 	echo " <br>";
 }

 db_close();
?>