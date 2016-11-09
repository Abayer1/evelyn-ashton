<?php 
	/*session_start();

	include("includes/scripts.php");
	
	if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) {

		$select_query = "SELECT * FROM ea_users WHERE 1";
		$select_result = $connection->query($select_query);
		
		if($connection->error){
			print "Select query error!  Message: ".$connection->error;
		}

		while($row = $select_result->fetch_object()) {
			if ((($_POST['username']) == ($row->username)) && (md5($_POST['password']) == ($row->password))) { 
				$_SESSION['logged_in'] 				= true;
				$_SESSION['logged_in_user'] 			= $row->username;
				$_SESSION['logged_in_first'] 		= $row->first_name;
				$_SESSION['logged_in_last'] 			= $row->last_name;
				$_SESSION['logged_in_user_id'] 		= $row->user_id;
				$_SESSION['logged_in_user_access'] 	= $row->access_level;
				
				log($_SESSION['logged_in_user']);
			} 
			else {}
		}
	}	
	if (isset($_SESSION['logged_in'])) {
		header("Location: admin.php");
	}*/
	//session_start();
	include("includes/scripts.php");
	$access_level = "";
	
	if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) {

		$select_query = "SELECT * FROM ea_users";
		$select_result = $connection->query($select_query);
		
		if($connection->error){
			print "Select query error!  Message: ".$connection->error;
		}
	
		while($row = $select_result->fetch_object()) {
			if ((($_POST['username']) == ($row->username) && (md5($_POST['password']) == ($row->password)))){
				$_SESSION['logged_in'] 				= true;
				$_SESSION['logged_in_user_id'] 		= $row->user_id;
				$_SESSION['logged_in_user_name'] 	= $row->username;
				$_SESSION['logged_in_user_lname'] 	= $row->last_name;
				$_SESSION['logged_in_user_fname'] 	= $row->first_name;
				$_SESSION['logged_in_user_access'] 	= $row->access_level;
				
				$access_level = $_SESSION['logged_in_user_access'];
			}else {}
		}
	}
	if(isset($_SESSION['logged_in']) && $access_level == "admin") {
		header("Location: admin.php");
	}
	elseif(isset($_SESSION['logged_in']) && $access_level == 'priv') {
		header("Location: admin.php");
	}
	elseif(isset($_SESSION['logged_in']) && $access_level == 'user') {
		header("Location: cart.php");
	}
?>
    <?php include "includes/header.php"; ?>
    <section class="row">
        	<div class="content_heading">
            	<h1>Sign In</h1>
            	<hr>
            </div>
        	<div>
                <div class="columns medium-6 small-12">
                	<form name="user_login_form" method="post" action="">
                        <fieldset>
                        	<legend>User sign in</legend>
                            	<div id="username_input_container">
                                    <label for="username">Username</label>
                                    <input name="username" id="username" type="text"/><br />
                                    <span />
                                </div>
                                <div id="password_input_container">
                                    <label for="password">Password</label>
                                    <input name="password" id="password" type="password"/><br />
                                    <span />
                                </div>
                            <input name="submit" id="submit" type="submit" value="Login" />
                    	</fieldset>
        			</form>
                </div>
                <div class="column medium-6 small-12">
                    <form>
                        <fieldset>
                            <legend>Create Account</legend>
                           	<input type="submit" formaction="create_account.php" value="Create an acoount"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
	<?php include "includes/footer.php"; ?>
<? $connection->close(); ?>