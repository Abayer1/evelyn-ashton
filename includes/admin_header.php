<?php
		//Header
		print("<header>");
			print("<a href='home.php'><img id='logo' src='img/logo-crown.svg'></a>");
			print("<aside id='admin-account'>");
            	print("<h6>Switch to customer view</h6>");
				print("<a href='logout.php' title='logout'><i class='fi-power'></i></a>");
			print("</aside>");
		print("</header>");
        print("<nav class='top-bar'>");
			print("<ul class='vertical medium-horizontal menu'>");
               	print("<li class='user_view_heading'> ".ucfirst($_SESSION['logged_in_user_access'])." View</li>");
              	print("<li><a href='admin.php'>Dashboard</a></li>");
                print("<li><a href='orders.php'>Recent Orders</a></li>");
                print("<li><a href='product_listing.php'>Product Listing</a></li>");
                print("<li><a href='#'>Recent Activity</a></li>");
				print("<li><a href='users.php'>Users</a></li>");
                print("<li><a href='analytics.php'>Analytics</a></li>");
           print("</ul>");
        print("</nav>");
        /*<section id="user_info">
        	<h6>Usersname: <?php print ucfirst($_SESSION['logged_in_user_name']); ?></h6>
            <h6>Access level: <?php print ucfirst($_SESSION['logged_in_user_access']); ?> </h6>
            <h6>Full Name: <?php print ucfirst($_SESSION['logged_in_user_fname']); ?> </h6>
        </section>*/
?>