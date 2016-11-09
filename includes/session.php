<?php
	//mimics a form
		
	if(!isset($_SESSION['logged_in'])) {
		print "You must login to view this page.  Click here to login: <a href=\"login.php\">login.php";
	} else {
		print "Welcome";
	}
?>