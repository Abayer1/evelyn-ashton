<?
	session_start();
	include "includes/scripts.php";

	if(!$_SESSION['logged_in']) {
		print "You must login to view this page.  Click here to login: <a href=\"login.php\">login";
	} 
	else if ($_SESSION['logged_in_user_access'] == "administrator") {
		if(isset($_POST['submit'])) {
			$delete_products_query = "DELETE FROM products WHERE sku='".$_POST['sku']."'";
			$connection->query($delete_products_query);
			header('Location: admin.php');
		}
		$select_products_query = "SELECT	 p.product_name, 
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
    	<h2>Delete Product</h2>
    	<section class="row">
            <table class="column" role="grid">
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
						$a=$row->product_name;
                	} ?>
            	</tbody>
                </table>
            <br />
            </section>
            
            <section id="review_submission" class="row">
                <form method="post" action="" class="column">
                    <p>Do you really want to delete product: <? print $_GET['sku']; ?>?</p>
                    <input name="product_to_delete" id="product_to_delete" type="hidden" value="<? print $_GET['sku']; ?>" /><br />
                    <input name="submit" id="submit" type="submit" value="Yes" />
                    <a href="admin.php">No</a>
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

<? } else { ?> 
	<p>Please login as an administrator: <a href="logout.php">logout</a></p>
<? } $connection->close(); ?>