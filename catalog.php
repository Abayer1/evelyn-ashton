<?php include "includes/header.php"; ?>

<?php

	$sql = "SELECT product_name, description, category, sku, stock, cost, price, product_image, weight, size, rating FROM products WHERE category = '" . $_GET['category'] . "'";
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
		
		print("<section class='product-listing'><div class='row'><div class='columns'><h1>" . ucfirst($_GET['category']) . "</h1></div>");
		
		while ($row = $result->fetch_assoc()) {
			print("<div class='small-6 medium-4 large-3 columns'>");
				print("<a class='product-card' href='product.php?sku=" . $row["sku"] . "'>");
					print("<img class='product-image' src=" . $row["product_image"] . " alt=" . $row["product_name"] . ">");
					print("<div class='product-info'>");
						print("<p class='product-name'>" . $row["product_name"] . "</p>");
						print("<p class='stock'>" . $row["stock"] . " in stock</p>");
						print("<p class='price'>" . $row["price"] . "</p>");
						print("<p class='rating'>" . $row["rating"] . "</p>");
					print("</div>");
				print("</a>");
			print("</div>");
		}
		
		print("</div></section>");
		
	} else {
		print("<section><div class='row'><div class='columns text-center'><h1>Sorry, we couldn't find the page you're looking for.</h1><h3>Please try clicking one of the links above.</h3></div></div></section>");
	}

?>

<?php include "includes/footer.php"; ?>