<?php 
	session_start();
	include "includes/scripts.php";
	//include "includes/session.php"; 
	$select_games_query = "SELECT * FROM ea_users";
	$select_games_result = $connection->query($select_games_query);
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<title>Evelyn Ashton - Admin</title>
        
        <!--Stylesheets-->
		<link rel="icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/foundation-icons.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="css/admin.css">
	</head>
	<body>
    	<?php include "includes/admin_header.php"; ?>
        <section>
        	<?
        	//OUTPUT ACCOUNT INFORMATION
				$sql = "SELECT username, password FROM ea_users";
				$result = $connection->query($sql);
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "Username: " . $row["username"]. "<br>Password: " . $row["password"]. "<br><br>";
					}
				} else {
					echo "0 results";
				}
				
				
				
				?>
            <h2> Edit An Account </h2>
            <form method="POST" action="">
              <label for="currentusername">Select User Account (Current Username):</label>
              <input type="text" name="currentusername" placeholder="users username">
              <br>
              <br>
              <label for="editusername">New Username:</label>
              <input type="text" name="editusername" placeholder="new username">
              <br>
              <br>
              <label for="editpassword">New Password:</label>
              <input type="text" name="editpassword" placeholder="new password">
              <br>
              <br>
              <input type="submit" name="update">
              <br>
              <br>
              <?php
            
            //UPDATE ACCOUNT
            if(isset($_POST['update'])){ 
            $newusername = $_POST['editusername'];
            $newpassword = $_POST['editpassword'];
            $oldusername = $_POST['currentusername'];
                
            $sql = "UPDATE users SET username='$newusername', password='$newpassword'  WHERE username='$oldusername'";
                
                if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully!";
                header("Refresh: 1; url=welcome.php");
            } else {
                echo "Error updating record: " . $conn->error;
            }
            }
            ?>
            </form>
        </section>  
        <footer>
        <p id="contact"><?php print(date("Y")); ?> &copy; Evelyn Ashton. All rights reserved.&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;(555) 123-4567&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;contact@evelynashton.com&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;1234 Example St. Lake Mary, FL 32771&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="admin.php">Administrator Access</a></p>
				</div>
			</div>
			<div id="disclaimer">
				<p>This site is not official and is an assignment for a UCF Digital Media course. Designed by Alexander Bayer.</p>
			</div>
		</footer>
		<script src="js/vendor/jquery.js"></script>
	    <script src="js/vendor/what-input.js"></script>
	    <script src="js/vendor/foundation.js"></script>
	    <script src="js/app.js"></script>
	</body>
</html>
<? $connection->close(); ?>