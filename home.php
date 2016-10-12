<?php include "includes/header.php"; ?>

<?php

	$featured_product_sql = "SELECT product_name, description, category, sku, stock, cost, price, product_image, weight, size, rating FROM products WHERE sku = '657999616186189'";
	$featured_product_result = $connection->query($featured_product_sql);

	$all_products_sql = "SELECT product_name, description, category, sku, stock, cost, price, product_image, weight, size, rating FROM products";
	$all_products_result = $connection->query($all_products_sql);

?>

<section id="featured" class="product-listing">
	<div class="row">
		<div class='small-12 medium-12 large-9 columns'>
			<h1>Featured Item</h1>
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
		<div class="large-3 columns hide-for-small-only hide-for-medium-only">
			<h1>About</h1>
			<div id="about-panel">
				<p>Evelyn Ashton is the world’s premier online jewelry and precious stone outlet. We offer finely crafted jewelry including engagement rings, necklaces, earrings, watches, bracelets and more. In 1882 London, an ambitious young woman by the name of Evelyn Ashton started a silversmithing stall... <a href="about.php">Learn More</a></p>
			</div>
		</div>
	</div>
</section>
<section class="product-listing">
	<div class="row">
		<?php
			
			if ($all_products_result->num_rows > 0) {
	
			print("<section class='product-listing'><div class='row'></div>");
			
			while ($row = $all_products_result->fetch_assoc()) {
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
				
			}
			
		?>
	</div>
</section>

<?php include "includes/footer.php"; ?>