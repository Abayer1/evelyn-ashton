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
        <section class="row">
        </section>
        <h2>Create Product</h2>
        <section class="row">
        	<form method="post" action="">
            	<div class="columns medium-6">
                <label for="product_name">product name</label>
                <input name="product_name" id="product_name" type="text"/>
                <label for="sku">sku</label>
                <input name="sku" id="sku" type="number"/>
                <label for="description">description</label>
                <textarea name="message" rows="10" cols="30">The cat was playing in the garden.
                </textarea>
                <label for="category">category</label>
                <input list="category">
                  <datalist id="category">
                    <option value="Earings"></option>
                    <option value="Bracelets"></option>
                    <option value="Rings"></option>
                    <option value="Necklaces"></option>
                    <option value="Watches"></option>
                  </datalist> 
            </div>
            <div class="columns medium-6">
                <label for="stock">stock</label>
                <input name="stock" id="stock" type="number" min="0"/>
                <label for="price">price</label>
                <input name="price" id="price" type="number"/>
                <label for="cost">cost</label>
                <input name="cost" id="cost" type="number"/>
                <label for="product_image">product_image_url</label>
                <input name="product_image" id="product_image" type="url"/>
                <label for="weight">weight</label>
                <input name="weight" id="weight" type="text"/>
                <label for="size">size</label>
                <input name="size" id="size" type="text"/>
                <label for="rating">rating</label>
                <input name="rating" id="rating" type="text"/>
                
                
                <input name="submit" id="submit" type="submit" value="Submit Review" />
                </div>
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