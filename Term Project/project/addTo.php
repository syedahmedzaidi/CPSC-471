<?php

 require('dbconf.inc');
 
 db_connect();
 /*print"<pre>";
 print_r($_POST);
 print"</pre>";*/
 
 $request = $_POST['submit'];
 
 //facility
 $AdminInput_Name = $_POST['facilityName'] ; 
 $AdminInput_Location = $_POST['facilityLocation']; 
 $AdminInput_Description = $_POST['facilityDescrip']; 
 $AdminInput_Company = $_POST['facilityCompany']; 
 $AdminInput_Connected_Pipe = $_POST['connectedPipe']; 
 //pipe
 $AdminInput_PipeLocation = $_POST['pipeLocation'];
 $AdminInput_PipeType = $_POST['pipeType'];
 $AdminInput_Product = $_POST['product'];
 //pipeType
 $material = $_POST['pipeMaterial'];
 $diameter = $_POST['pipeDiameter'];
 $length = $_POST['pipeLength'];
 $manufacturer = $_POST['pipeManuf'];
 //flow element
 $id_tag = $_POST['fe_id'];
 $upstream = $_POST['upstream'];
 $downstream = $_POST['downstream'];
 $feLocation = $_POST['felocation'];
 $fedescrip = $_POST['fedescription'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 //subsection
 $pipe_id =	$_POST['pipe_id'];
 $sub_id = $_POST['sub_id'];
 $connectors = $_POST['connectors'];
 $connects_id = $_POST['connects_id'];
 $starts_at = $_POST['starts_At'];
 $ends_at = $_POST['ends_At'];
 
 if($request == 'Add Facility')
 {
 	echo"<h1>$request</h1>";
 	echo'<form method ="post">
 	Facility Name: <input type="text" name="facilityName" id="name"><br>
 	Facility Location: <input type="text" name="facilityLocation" id="location"><br>
 	Facility Description: <input type="text" name="facilityDescrip" id="descrip"><br>
 	Company: <input type="text" name="facilityCompany" id="company"><br>
 	Connected Pipe ID: <input type="text" name="connectedPipe" id="pipeID"><br>
 	<input id="Add" type="submit" name="submit" value="AddFacility">
 	</form>
 	';
 }
 if($request == 'AddFacility'){
 	$qryIns = "INSERT INTO Facility(`Name`, `Location`, `Description`, `Company`, `Connected_Pipe`)
				VALUES('$AdminInput_Name', '$AdminInput_Location', '$AdminInput_Description', '$AdminInput_Company', $AdminInput_Connected_Pipe)";
	$resIns = mysql_query($qryIns);
	if($resIns){
		echo"<h3>A new facility has been added. Redirecting in 5 seconds.<h3>";
	}
	header('Refresh: 5; url=admin_mainpage.html');
	db_close();
	exit;
 }
 if($request == 'Add A Pipe'){
 	
 	echo"<h1>$request</h1>";
 	echo'<form method ="post">
 	Pipe Location: <input type="text" name="pipeLocation" id="location"><br>
 	Pipe Type: <input type="text" name="pipeType" id="type"><br>
 	Product: <input type="text" name="product" id="product"><br>
 	<input id="Add" type="submit" name="submit" value="AddPipe">
 	</form>
 	';
 	
 }
 if($request == 'AddPipe'){
 	$qryIns = "INSERT INTO Pipe(`Location`, `PipeType`, `Product`)VALUES('$AdminInput_PipeLocation', $AdminInput_PipeType, '$AdminInput_Product')";
 	$resIns = mysql_query($qryIns);
	if($resIns){
		echo"<h3>A new pipe has been added. Redirecting in 5 seconds.<h3>";
		header('Refresh: 5; url=admin_mainpage.html');
		db_close();
		exit;
	}
 }
 
 if($request == 'Add Pipe Type'){
 	
 	echo"<h1>$request</h1>";
 	echo'<form method ="post">
 	Pipe Material: <input type="text" name="pipeMaterial" id="material"><br><br>
 	Pipe Diameter: <input type="text" name="pipeDiameter" id="diameter"><br><br>
 	Pipe Length: <input type="text" name="pipeLength" id="length"><br><br>
 	Pipe Manufacturer: <input type="text" name="pipeManuf" id="manufacturer"><br><br>
 	<input id="Add" type="submit" name="submit" value="AddPipeType">
 	</form>
 	';
 }
 if($request == 'AddPipeType'){
 	$qryIns = "INSERT INTO pipe_type(`Material`, `Diameter`, `Length`, `Manufacturer`)VALUES('$material',$diameter ,$length ,'$manufacturer')";
 	$resIns = mysql_query($qryIns);
	if($resIns){
		echo"<h3>A new pipe type has been added. Redirecting in 5 seconds.<h3>";
		header('Refresh: 5; url=admin_mainpage.html');
		 db_close();
		exit;
	}
 }
 if($request == 'Add Flow Element'){
 	
 	echo"<h1>$request</h1>";
 	echo'<form method ="post">
 	Flow Element ID: <input type="text" name="fe_id" ><br><br>
 	Upstream: <input type="text" name="upstream" ><br><br>
 	Downstream: <input type="text" name="downstream"><br><br>
 	Location: <input type="text" name="felocation"><br><br>
 	Description: <input type="text" name="fedescription"><br><br>
 	Date: <input type="date" name="date"><br><br>
 	Time: <input type="time" name="time"><br><br>
 	<input id="Add" type="submit" name="submit" value="AddFlowElement">
 	</form>
 	';
 	
 	
 }
 if($request == 'AddFlowElement'){
 	$qryIns = "INSERT INTO Flow_Element(`ID_Tag`, `Upstream`, `Downstream`, `Location`, `Description`, `Date`,`Time`)
				VALUES ($id_tag, $upstream, $downstream, '$feLocation', '$fedescrip', '$date' , '$time')";
	$resIns = mysql_query($qryIns);
	if($resIns){
		echo"<h3>A new flow element has been added. Redirecting in 5 seconds<h3>";
		header('Refresh: 5; url=admin_mainpage.html');
		 db_close();
		exit;
	}
	else{
		echo"Whoops! One of the entries you entered was incorrect.";
	}

 }
 if($request == 'Add Sub Section'){
 	
 	echo"<h1>$request</h1>";
 	echo'<form method ="post">
 	Pipe ID: <input type="text" name="pipe_id" ><br><br>
 	Sub ID: <input type="text" name="sub_id" ><br><br>
 	Number of Connectors: <input type="text" name="connectors"><br><br>
 	Connects at ID: <input type="text" name="connects_id"><br><br>
 	Starts At: <input type="text" name="starts_At"><br><br>
 	Ends At: <input type="text" name="ends_At"><br><br>
 	<input id="Add" type="submit" name="submit" value="AddSubSection">
 	</form>
 	';
 	
 }
 if($request == 'AddSubSection'){
 	$qryIns = "INSERT INTO Subsection(`Pipe_ID`,`Sub_ID`,`NumConnectors`,`ID_Connect`,`Starts_At`,`Ends_At`)
 				VALUES($pipe_id, $sub_id, $connectors, $connects_id, $starts_at, $ends_at)";
	$resIns = mysql_query($qryIns);
	if($resIns){
		echo"<h3>A new Subsection has been created.<h3>";
	}
	else{
		echo"Please verify your inputs again. Redirecting in 5 seconds.";
		header('Refresh: 5; url=admin_mainpage.html');
		db_close();
		exit;
	}
 }
?>