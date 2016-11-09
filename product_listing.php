<?php 
	session_start();
	include "includes/scripts.php";
	if(isset($_POST['submit'])	&& !empty($_POST['product_name'])
								&& !empty($_POST['sku'])
								&& !empty($_POST['description'])
								&& !empty($_POST['category'])
								&& !empty($_POST['stock'])
								&& !empty($_POST['cost'])
								&& !empty($_POST['price'])
								&& !empty($_POST['product_image'])
								&& !empty($_POST['weight'])
								&& !empty($_POST['size'])
								&& !empty($_POST['rating'])){		
			$insert_products_query = "INSERT INTO products(product_name, sku, description, category, stock, cost, price, product_image, weight, size, rating)				VALUES ('".$_POST['product_name']."''".$_POST['sku']."', '".$_POST['description']."','".$_POST['category']."','".$_SESSION['stock'].",'".$_SESSION['cost'].",
'".$_SESSION['price'].",'".$_SESSION['product_image'].",'".$_SESSION['weight'].",'".$_SESSION['size'].",'".$_SESSION['rating']."')";
			$connection->query($insert_products_query);
			
			//Testing input
			if ($connection->query($insert_products_query) === TRUE) {
				echo alert("Record updated successfully");
			} elseif (error){
				echo "Error updating record: " . $connection->error;
			}
			else{
				echo "fail";
				}
			
			//creates an rss out of submitted reviews. link is broken. Need to change link creation 
			
				/*$rss = "rss.xml";
	
				$xml = simplexml_load_file($rss);
		
				$submitted_product_name = $_POST['product_name'];
				$submitted_product_name_description = $_POST['description'];
				$submitted_product_name_link = $_SERVER['PHP_SELF'];
				
				$newItem = $xml->channel->addChild("item");
				$newItem->addChild("title",$submitted_product_name);
				$newItem->addChild("description",$submitted_product_name_description);
				$newItem->addChild("link",$submitted_product_name_link);
		
				$xml->asXML('rss.xml'); */
			}
			
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
        <?
			$select_products_query = "SELECT * FROM products ORDER BY product_name ";
			$select_products_result = $connection->query($select_products_query);
		?>
        	<h2>Product Listing</h2>
        	<table border="1" role="grid" class="column">
            	<tr>
                    <td>Product Name</td>
                    <td>sku</td>
                    <td>category</td>
                    <td>stock</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
         
		  				<? while($row = $select_products_result->fetch_object()){
								print "<tr>";					
								print "<td><a href=\"product.php?sku=".$row->sku."\">".$row->product_name."</a></td>";
								print "<td>".$row->sku."</td>";
								print "<td>".$row->category."</td>";
								print "<td>".$row->stock."</td>";
								print "<td><a href=\"update.php?sku=".$row->sku."\">Update</a></td>";
								print "<td><a href=\"delete.php?sku=".$row->sku."\">Delete</a></td>";
								print "<tr>";
							} ?>
        		</table>
        </section>
        <h2>Create Product</h2>
        <!---->
        <section class="row">
        	<form method="post" action="">
            	<div class="columns medium-6">
                    <label for="product_name">product name</label>
                    <input name="product_name" id="product_name" type="text" placeholder="Inspirational Name"/>
                    <label for="sku">sku</label>
                    <input name="sku" id="sku" type="number" placeholder="1234567890123456"/>
                    <label for="description">description</label>
                    <textarea name="message" rows="10" cols="30" placeholder="This is the best product on the market, because..."></textarea>
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
                <input name="stock" id="stock" type="number" min="0" placeholder="0"/>
                <label for="price">price</label>
                <input name="price" id="price" type="number" placeholder="$0"/>
                <label for="cost">cost</label>
                <input name="cost" id="cost" type="number" placeholder="$0"/>
                <label for="product_image">product_image_url</label>
                <input name="product_image" id="product_image" type="text" placeholder="http://name.jpg"/>
                <label for="weight">weight</label>
                <input name="weight" id="weight" type="text" placeholder="0g"/>
                <label for="size">size</label>
                <input name="size" id="size" type="text" placeholder='0"'/>
                <label for="rating">rating</label>
                <input name="rating" id="rating" type="text" placeholder='Between 0 - 5'/>
                <input name="submit" id="submit" type="submit" value="Create Product" />
                </div>
            </form>
        </section>
        <section class="row">
        	<h2>Featured Product</h2>
        	<div class="column">
        <?php
			$featured_products_query = "SELECT * FROM products LIMIT 1";
			$featured_product_result = $connection->query($featured_products_query);
		?>
        <?php
				if ($featured_product_result->num_rows > 0) {
					while ($row = $featured_product_result->fetch_assoc()) {
						print("<a class='product-card' href='product.php?sku=" . $row["sku"] . "'>");
							print("<div class='small-12 medium-3 columns'>");
								print("<img class='product-image' src=" . $row["product_image"] . " alt=" . $row["product_name"] . ">");
							print("</div>");
							print("<div class='product-info small-12 medium-9'>");
								print("<p class='product-name'>" . $row["product_name"] . "</p>");
								print("<p class='description'>" . $row["description"] . "</p>");
								print("<p class='stock'>" . $row["stock"] . " in stock</p>");
								print("<p class='price'>" . $row["price"] . "</p>");
								print("<p class='rating'>" . $row["rating"] . "</p>");
							print("</div>");
						print("</a>");
					}
				}
			?>
            </div>
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