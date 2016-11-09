<?php
	//$servername = "sulley.cah.ucf.edu";
	//$username = "dig4530c_006";
	//$password = "knights123!";
	//$database = "dig4530c_006";
	$servername = "localhost";
	$username = "root";
	$password = null;
	$database = "evelyn_ashton";
	
	$connection = new mysqli($servername, $username, $password, $database);
	if ($connection->connect_error) {
		die("Connection to database failed: " . $connection->connect_error);
	}
	else {}
	
	$exploded_self = explode("/", $_SERVER["PHP_SELF"]);
	$current_page = array_pop($exploded_self);
?>

