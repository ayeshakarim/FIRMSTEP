
<html >
<head>
<title>Add new record</title>
</head>
<body>
<a href="FIRMSTEP.html">Please click here to go back to the form </a>
<br>
<?php
	$service = $_POST['service'];
	
	if(isset($_POST['anon'])){
		$type = $_POST['anon'];
	}else if (isset($_POST["cit"])){
		$type = $_POST['cit'];
		
	}else if (isset($_POST["orgn"])){
		$type = $_POST['orgn'];
	}else{exit;}
	
	$title = $_POST['title'];
	
	if (!empty ($_POST['firstname']))
		$firstname = $_POST['firstname'];
	else{
		echo "Enter a valid first name. <br>";
		exit;
	}
	
	if (!empty ($_POST['surname']))
		$surname = $_POST['surname'];
	else{
		echo "Enter a valid surname. <br>";
		exit;
	}
	if (!empty ($_POST['organisation']))
		$org = $_POST['organisation'];
	else{
		echo "Enterthe name of your organisation. <br>";
		exit;
	}
		try{
		$db = new PDO("mysql:karima5_db;host=  http://www.karima5.eas-cs2410-1617.aston.ac.uk/", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		// use the form data to create a insert SQL and  add a student record  
		$exec = "INSERT INTO FirmStep(#, Type, Name, Service, Queued at) VALUES ($id,'".$type. "','". $firstname $surname."','".$service."',CURRENT_TIME())";
		$db->exec($exec);
		echo " Well Done, you just add one student record! <br><br>"; 
?>


</body>
</html>