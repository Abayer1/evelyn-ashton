<?
	session_start();
	include "includes/scripts.php";
	if(isset($_POST['submit'])){
		if(isset($_POST['product_name'])){
			$update_product_query = "UPDATE products  SET product_name='".$_POST['product_name']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['sku'])){
			$update_product_query = "UPDATE products  SET sku='".$_POST['sku']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['description'])){
			$update_product_query = "UPDATE products  SET description='".$_POST['description']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['category'])){
			$update_product_query = "UPDATE products  SET category='".$_POST['category']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['stock'])){
			$update_product_query = "UPDATE products  SET stock='".$_POST['stock']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['price'])){
			$update_product_query = "UPDATE products  SET price='".$_POST['price']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['cost'])){
			$update_product_query = "UPDATE products  SET cost='".$_POST['cost']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['product_image'])){
			$update_product_query = "UPDATE products  SET product_image='".$_POST['product_image']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['weight'])){
			$update_product_query = "UPDATE products  SET weight='".$_POST['weight']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['size'])){
			$update_product_query = "UPDATE products  SET size='".$_POST['size']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		if(isset($_POST['rating'])){
			$update_product_query = "UPDATE products  SET rating='".$_POST['rating']."' WHERE sku = '".$_GET['sku']."'";
			$connection->query($update_product_query);
		}
		else{
			//nothing
		}
		
		header("Location: admin.php");
		
		//testing to see if the table was updated
		
		
		/*if ($connection->query($update_product_query) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $connection->error;
		}*/
	}
	
	$select_products_query = "SELECT
										p.product_name, 
										p.sku,
										p.description,
										p.category,
										p.stock,
										p.cost,
										p.price,
										p.product_image,
										p.weight,
										p.size,
										p.rating
							FROM products p WHERE p.sku = '".$_GET['sku']."'";
	$select_products_result = $connection->query($select_products_query);	
	/*$select_reviews_query = "SELECT 
										r.comment,
										r.comment_id,
										r.sku
							FROM reviews r WHERE  r.sku = '".$_GET['sku']."'";
	$select_reviews_result = $mysqli->query($select_reviews_query);	*/						
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
    	<h2>Product</h2>
        <section class="row">
            <table class="columns" role="grid">
            	<thead>
                	<th>Product Name</th>
                    <th>SKU</th>
                    <th>Description</th>
                    <th>Caregory</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Cost</th>
                    <th>Product Image</th>
                    <th>Weight</th>
                    <th>Size</th>
                    <th>Rating</th>
                </thead>
                <tbody>
                <? while($row = $select_products_result->fetch_object()){
                 		print "<tr>";
						print "<td>".$row->product_name."</td>";
						print "<td>".$row->sku."</td>";
						print "<td>".$row->description."</td>";
						print "<td>".$row->category."</td>";
						print "<td>".$row->stock."</td>";
						print "<td>".$row->price."</td>";
						print "<td>".$row->cost."</td>";
						print "<td><img src='".$row->product_image."' alt'".$row->product_name."'/></td>";
						print "<td>".$row->weight."</td>";
						print "<td>".$row->size."</td>";
						print "<td>".$row->rating."</td>";
						print "</tr>";
                	} ?>
            	</tbody>
            </table>   
     	</section>
        <h2>Update Product</h2>
        <section class="row">
        	<form method="post" action="">
            	<fieldset class="columns medium-6">
                <label for="product_name">product name</label>
                <input name="product_name" id="product_name" type="text"/>
                <label for="sku">sku</label>
                <input name="sku" id="sku" type="number"/>
                <label for="description">description</label>
                <textarea name="message" rows="10" cols="30">The cat was playing in the garden.
                </textarea>
                <label for="category">category</label>
                 <? 
                /*<select name="category">
                $row = $select_products_result->fetch_object();
                    if($row->category == "Rings"){
                        echo ("<option value='Rings' selected>Rings</option>");
                    }
                    else{
                        echo ("<option value='Rings'>Rings</option>");
                    }
                    if($row->category == "Earings"){
                        echo ("<option value='Earings' selected>Earings</option>");
                    }
                    else{
                        echo ("<option value='Earings'>Earings</option>");
                    }
                    if($row->category == "Bracelets"){
                        echo ("<option value='Bracelets' selected>Bracelets</option>");
                    }
                    else{
                        echo ("<option value='Bracelets'>Bracelets</option>");
                    }
                    if($row->category == "Necklaces"){
                        echo ("<option value='Necklaces' selected>Necklaces</option>");
                    }
                    else{
                        echo ("<option value='Necklaces'>Necklaces</option>");
                    }
                    if($row->category == "Watches"){
                        echo ("<option value='Watches' selected>Watches</option>");
                    }
                    else{
                        echo ("<option value='Watches'>Watches</option>");
                    }
                </select>*/?>
                <input list="category">
                  <datalist id="category">
                    <option value="Earings"></option>
                    <option value="Bracelets"></option>
                    <option value="Rings"></option>
                    <option value="Necklaces"></option>
                    <option value="Watches"></option>
                  </datalist> 
            </fieldset>
            <fieldset class="columns medium-6">
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
            </fieldset>
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
	</body>
</html>
<? $connection->close(); ?>