<?php
	$login_errors = array();
	if (filter_var($_POST['username'], FILTER_VALIDATE_USERNAME)) {
		$e = escape_data($_POST['username'], $dbc);
	}
	else{
		$login_errors['username'] = 'Not a valid username';
	}
	if (!empty($_POST['password'])){
		$p = $_POST['password'];
	}
	else{
		$login_errors['password'] = 'Not a valid password';
	}
	
	
	//query the database
	if (empty($login_errors)) {
		$q = "SELECT id, username, acces_level, password";
		$r = mysqli_query($dbc, $q);
		if (mysqli_num_rows($r) === 1 ) {
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			if (password_verify($p, $row['password'])) {
				if ($row['user_access'] === 'admin') {
					session_regenerate_id(true);
					$_SESSION['user_admin'] = true;
				}
				
?>