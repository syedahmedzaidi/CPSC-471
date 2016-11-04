<?php
 require('dbconf.inc');
  db_connect();
 /*print"<pre>";
 print_r($_POST);
 print"</pre>";*/
 
 $flag = $_POST['Flag'];

if($_POST['submit'] == 'View'){
	
	echo"<h3>All Reported Integrated Technology</h3>";
 	echo"<br>";
	$qrySel="SELECT `ID`,`Report`,`Flag` FROM integrated_technology
			WHERE `Report` = 1";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Flag</th>";
 		while($row_it = mysql_fetch_assoc($resSel)){
				echo'<form method="post">
				<tr>
				<td>'.$row_it['ID'].'</td>
				<td>'.$row_it['Flag'].'</td>
				<td>'.$row_it['Report'].'</td>
				<td>'.'<input id="flag" type="submit" name= "Flag" value="'.$row_it['ID'].'">'.'</td>
				</tr>
				';
			}
		
		echo"</tr>";
		echo"</table>";
		echo"</form>";	
	}
	else{
		echo"<h3>No Reported Items to be displayed.</h3>";
	}
	
}
else if($_POST['Flag'] == $flag)
{
			$qrySel = "UPDATE `integrated_technology` SET `Flag` = 1 WHERE `ID` = $flag";
			$resSel = mysql_query($qrySel);
			if($resSel)
			{
				echo"<h3>IT #$flag has been flagged!</h3>";
			}
}

 db_close();
?>