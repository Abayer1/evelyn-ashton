<?php

	$servername = "sulley.cah.ucf.edu";
	$username = "al690622";
	$password = "B@yeral12";
	$database = "al690622";

	$connection = new mysqli($servername, $username, $password, $database);

	if ($connection->connect_error) {
		die("Connection to database failed: " . $connection->connect_error);
	}

	$exploded_self = explode("/", $_SERVER["PHP_SELF"]);
	$current_page = array_pop($exploded_self);

?>