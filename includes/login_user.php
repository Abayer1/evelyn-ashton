<?php 
	include 'scripts.php';
	if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) {

		$select_query = "SELECT * FROM ea_users";
		$select_result = $mysqli->query($select_query);
		if($mysqli->error) {
			print "Select query error!  Message: ".$mysqli->error;
		}
		while($row = $select_result->fetch_object()) {
			if ((($_POST['username_input']) == ($row->username)) && (md5($_POST['password_input']) == ($row->password))) {
				$_SESSION['logged_in'] = true;
				$_SESSION['logged_in_user_id'] = $row->user_id;
				$_SESSION['logged_in_user_name'] = $row->username;
				$_SESSION['logged_in_user_lname'] = $row->last_name;
				$_SESSION['logged_in_user_fname'] =$row->first_name;
				$_SESSION['logged_in_user_access'] = $row->access_level;
			} else {};
		}
	}
	
	if (isset($_SESSION['logged_in']) && ($_SESSION['logged_in_user_access'] == 'administrator')) {
		header("Location: admin.php");
	}
	elseif (isset($_SESSION['logged_in']) && ($_SESSION['logged_in_user_access'] == 'restricted')) {
		header("Location: admin.php");
	}
	elseif (isset($_SESSION['logged_in']) && ($_SESSION['logged_in_user_access'] == 'user')) {
		header("Location: cart.php");
	}
	else{}
	
	
	<!--<script type="text/javascript">
			function validateForm() {
				var user_input_valid = false;
				var pass_input_valid = false;
				
				//Username validation check
				document.user_login_form.username.onblur = function() {
					var username_check = document.getElementById('username_input_container');
					var span_display = username_check.getElementsByTagName('span');
					if(this.value.length > 0) {
						if(span_display[0].firstChild.nodeValue == null) {
							span_display[0].appendChild(document.createTextNode('Success!'));
							user_input_valid = true;	
						} else {
							span_display[0].firstChild.nodeValue = "Success!";
							user_input_valid = true;
						}
					} else {
						if(span_display[0].firstChild.nodeValue == null) {
							span_display[0].appendChild(document.createTextNode('Error!'));
							user_input_valid = false;
						} else {
							span_display[0].firstChild.nodeValue = "Error!";
							user_input_valid = false;
						}
					}
				}
				
				document.user_login_form.username.onfocus = function() {
					var username_check = document.getElementById('username_input_container');
					var span_display = username_check.getElementsByTagName('span');
					span_display[0].firstChild.nodeValue = "Please enter something!";
				}
				
				//Password validation check
				
				document.user_login_form.password.onblur = function() {
					var password_check = document.getElementById('password_input_container');
					var span_display = password_check.getElementsByTagName('span');
					if(this.value.length > 0) {
						if(span_display[0].firstChild.nodeValue == null) {
							span_display[0].appendChild(document.createTextNode('Success!'));
							pass_input_valid = true;	
						} else {
							span_display[0].firstChild.nodeValue = "Success!";
							pass_input_valid = true;
						}
					} else {
						if(span_display[0].firstChild.nodeValue == null) {
							span_display[0].appendChild(document.createTextNode('Error!'));
							pass_input_valid = false;
						} else {
							span_display[0].firstChild.nodeValue = "Error!";
							pass_input_valid = false;
						}
					}
				}
				
				document.user_login_form.password.onfocus = function() {
					var password_check = document.getElementById('password_input_container');
					var span_display = password_check.getElementsByTagName('span');
					span_display[0].firstChild.nodeValue = "Please enter something!";
				}
				document.user_login_form.onsubmit = function() {
					processForm(user_input_valid, pass_input_valid);	
					return false;
				}
			}
			
			function processForm(user_input_valid, pass_input_valid) {
				if(user_input_valid && pass_input_valid) {
					return false;
				} else {	
					alert('something still is not valid');
					return false;
				}
			}
			window.onload = validateForm;
		</script>-->
?>