<?php
function db_connect(){
	
	//database server information
	$dbServer='localhost';
	$dbName ='cpsc471project';
	$dbUser = 'root';
	$dbPwd='admin123';
	
	$dbCon=mysql_connect($dbServer, $dbUser, $dbPwd) or die('Could Not connect to database'.mysql_error());
	mysql_select_db($dbName, $dbCon);
}

function db_close(){
	
	mysql_close();
	
}
?>