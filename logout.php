<?
	session_start();

	/*if(isset($_SESSION['logged_in'])) {
		unset($_SESSION['logged_in']);
	}
	
	if(isset($_SESSION['logged_in_user_name'])) {
		unset($_SESSION['logged_in_user_name']);
	}
	
	if(isset($_SESSION['logged_in_user_access'])) {
		unset($_SESSION['logged_in_user_access']);
	}
		
	if(isset($_SESSION['logged_in_user_fname'])) {
		unset($_SESSION['logged_in_user_fname']);
	}
	
	if(isset($_SESSION['logged_in_user_lname'])) {
		unset($_SESSION['logged_in_user_lname']);
	}
	
	if(isset($_SESSION['logged_in_user_id'])) {
		unset($_SESSION['logged_in_user_id']);
	}*/
	
	$_SESSION = array(); // Destroy the variables.
	session_destroy(); // Destroy the session itself.
	setcookie (session_name(), '', time()-300); // Destroy the cookie.
	echo $_SESSION['logged_in_user_lname'];
	
	//header("Location: catalog.php?category=rings");
?>
