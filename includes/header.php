
<?php 
	session_start();
	include "scripts.php"; 
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Evelyn Ashton - Alexander Bayer</title>
		<link rel="icon" type="image/png" href="img/favicon.png">
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/foundation-icons.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="css/styles.css">
        <script src="js/validate_user_creation.js" language="javascript"></script>
	</head>
	<body>
		<header class="hide-for-small-only">
			<div class="row">
				<div id="logo" class="small-12 large-6 columns">
					<a href="home.php">
						<img src="img/logo.svg" alt="Evelyn Ashton">
					</a>
				</div>
				<div id="search" class="small-12 medium-9 large-4 columns">
					<input type="text" placeholder="Search Evelyn Ashton">
				</div>
				<div id="account" class="small-12 medium-3 large-2 columns">
					<div class="account-link">
						<a href="client.php" class="<?php if ($current_page == 'client.php') { print('active'); } ?>">
							<i class="fi-torso"></i>
							<p>Profile</p>
						</a>
					</div>
					<div class="account-link">
						<a href="cart.php" class="<?php if ($current_page == 'cart.php') { print('active'); } ?>">
							<i class="fi-shopping-cart"></i>
							<p>Cart</p>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="columns">
					<nav>
						<ul class="row">
							<li class="medium-2 columns">
								<a href="catalog.php?category=rings" class="<?php if ($current_page == 'catalog.php?category=rings') { print('active'); } ?>">Rings</a>
							</li>
							<li class="medium-2 columns">
								<a href="catalog.php?category=necklaces" class="<?php if ($current_page == 'catalog.php?category=necklaces') { print('active'); } ?>">Necklaces</a>
							</li>
							<li class="medium-2 columns">
								<a href="catalog.php?category=earrings" class="<?php if ($current_page == 'catalog.php?category=earrings') { print('active'); } ?>">Earrings</a>
							</li>
							<li class="medium-2 columns">
								<a href="catalog.php?category=bracelets" class="<?php if ($current_page == 'catalog.php?category=bracelets') { print('active'); } ?>">Braclets</a>
							</li>
							<li class="medium-2 columns">
								<a href="catalog.php?category=watches" class="<?php if ($current_page == 'catalog.php?category=watches') { print('active'); } ?>">Watches</a>
							</li>
							<li class="medium-2 columns">
								<a href="about.php" class="<?php if ($current_page == 'about.php') { print('active'); } ?>">About</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<header class="show-for-small-only">
			<div class="row">
				<div id="logo" class="small-12 large-6 columns">
					<a href="home.php">
						<img src="img/logo.svg" alt="Evelyn Ashton">
					</a>
				</div>
				<div id="search" class="small-12 medium-9 large-4 columns">
					<input type="text" placeholder="Search Evelyn Ashton">
				</div>
			</div>
			<div class="row">
				<div class="columns">
					<nav class="row">
						<div class="small-8 columns">
							<ul class="row">
								<li class="medium-2 columns">
									<a href="catalog.php?category=rings" class="<?php if ($current_page == 'catalog.php?category=rings') { print('active'); } ?>">Rings</a>
								</li>
								<li class="medium-2 columns">
									<a href="catalog.php?category=necklaces" class="<?php if ($current_page == 'catalog.php?category=necklaces') { print('active'); } ?>">Necklaces</a>
								</li>
								<li class="medium-2 columns">
									<a href="catalog.php?category=earrings" class="<?php if ($current_page == 'catalog.php?category=earrings') { print('active'); } ?>">Earrings</a>
								</li>
								<li class="medium-2 columns">
									<a href="catalog.php?category=bracelets" class="<?php if ($current_page == 'catalog.php?category=bracelets') { print('active'); } ?>">Braclets</a>
								</li>
								<li class="medium-2 columns">
									<a href="catalog.php?category=watches" class="<?php if ($current_page == 'catalog.php?category=watches') { print('active'); } ?>">Watches</a>
								</li>
								<li class="medium-2 columns">
									<a href="about.php" class="<?php if ($current_page == 'about.php') { print('active'); } ?>">About</a>
								</li>
							</ul>
						</div>
						<div id="account" class="small-4 columns">
							<div class="account-link">
								<a href="client.php" class="<?php if ($current_page == 'client.php') { print('active'); } ?>">
									<i class="fi-torso"></i>
									<p>Profile</p>
								</a>
							</div>
							<div class="account-link">
								<a href="cart.php" class="<?php if ($current_page == 'cart.php') { print('active'); } ?>">
									<i class="fi-shopping-cart"></i>
									<p>Cart</p>
								</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</header>