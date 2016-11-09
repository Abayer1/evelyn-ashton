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
        <section id="users_table" class="row">
        	<h2>Users</h2>
        	<table border="1" role="grid" class="column">
                <tr>
                    <td>User id</td>
                    <td>Username</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                </tr>
        	<?php 
				while($row = $select_games_result->fetch_object()) {
                    print "<tr>";
                    print "<td>".$row->user_id."</td>"; 
                    print "<td>".$row->username."</td>"; 
                    print "<td>".$row->first_name."</td>"; 
                    print "<td>".$row->last_name."</td>"; 
                    print "</tr>";
                }
			?>
            </table>
        </section>
        <section class="row">
            <h2> Edit An Account </h2>
            <form method="POST" action="">
              <label for="currentusername">Select User Account (Current Username):</label>
              <input type="text" name="currentusername" placeholder="users username">
       
              <label for="editusername">New Username:</label>
              <input type="text" name="editusername" placeholder="new username">
           
              <label for="editpassword">New Password:</label>
              <input type="text" name="editpassword" placeholder="new password">
         
              <input type="submit" name="update">
        
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