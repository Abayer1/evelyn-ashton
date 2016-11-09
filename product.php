<?php include "includes/header.php"; ?>

<?php
	$sql = "SELECT product_name, description, category, sku, stock, cost, price, product_image, weight, size, rating FROM products WHERE sku = '" . $_GET["sku"] . "'";
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
		
		print("<section class='product-listing'><div class='row'>");
		
		while ($row = $result->fetch_assoc()) {
			print("<div class='columns'>");
				print("<div class='product-page'>");
					print("<div class='row'>");
						print("<div class='small-12 medium-3 columns'>");
							print("<img class='product-image' src=" . $row["product_image"] . " alt=" . $row["product_name"] . ">");
						print("</div>");
						print("<div class='small-12 medium-9 columns'>");
							print("<div class='product-info'>");
								print("<p class='product-name'>" . $row["product_name"] . "</p>");
								print("<p class='description'>" . $row["description"] . "</p>");
								print("<p class='sku'>SKU: " . $row["sku"] . "</p>");
								print("<p class='stock'>" . $row["stock"] . " in stock</p>");
								print("<p class='weight'>Weight: " . $row["weight"] . "</p>");
								print("<p class='size'>Size: " . $row["size"] . "</p>");
								print("<p class='price'>" . $row["price"] . "</p>");
								print("<p class='rating'>" . $row["rating"] . "</p>");
							print("</div>");
						print("</div>");
					print("</div>");
					print("<div class='row'>");
							print("<div class='small-12 medium-3 columns'>");
							print("</div>");
							print("<div class='small-12 medium-9 columns'>");
							print("<a href='#' class='button'>Add to Cart <i class='fi-shopping-cart'></i></a>");
						print("</div>");
				print("</div>");
			print("</div>");
		}
		
		print("</div></section>");
		/*if ($_SESSION['logged_in_user_access'] == 'admin' | $_SESSION['logged_in_user_access'] == 'priv'){
				print("<section class='row'>");
					print("<div class='small-12 medium-2 columns'>");
						print("<p>Update</p>");
					print("</div>");
					print("<div class='small-12 medium-2 columns'>");
						print("<p>delete</p>");
					print("</div>");
				print("</section>");	
		}*/
		
	} else {
		print("<section><div class='row'><div class='columns text-center'><h1>Sorry, we couldn't find the page you're looking for.</h1><h3>Please try clicking one of the links above.</h3></div></div></section>");
	}

?>

<?php include "includes/footer.php"; ?>