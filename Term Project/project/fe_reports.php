<?php
 require('dbconf.inc');
 
 db_connect(); 
 
 /*print"<pre>";
 print_r($_POST);
 print"</pre>";*/
 
$flag = $_POST['Flag'];


if($_POST['submit'] == 'View'){
	
	echo"<h3>All Reported Flow Elements</h3>";
 	echo"<br>";
	$qrySel="SELECT `ID_Tag`,`Report`,`Flag` FROM flow_element
			WHERE `Report` = 1";
 	$resSel = mysql_query($qrySel);
 	if($resSel){
		echo"<table border='1'>";
 		echo"<tr>";
 		echo"<th>ID Tag</th>";
		echo"<th>Flag</th>";
		echo"<th>Report</th>";
		echo"<th>Flag</th>";
 		while($flow_element = mysql_fetch_assoc($resSel)){
				echo'<form method="post">
				<tr>
				<td>'.$flow_element['ID_Tag'].'</td>
				<td>'.$flow_element['Flag'].'</td>
				<td>'.$flow_element['Report'].'</td>
				<td>'.'<input id="flag" type="submit" name= "Flag" value="'.$flow_element['ID_Tag'].'">'.'</td>
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
			$qrySel = "UPDATE `flow_element` SET `Flag` = 1 WHERE `ID_Tag` = $flag";
			$resSel = mysql_query($qrySel);
			if($resSel)
			{
				echo"<h3>Flow Element #$flag has been flagged!</h3>";
			}
}

 db_close();
?>