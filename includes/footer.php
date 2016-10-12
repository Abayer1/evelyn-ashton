		<footer>
			<div class="row">
				<div class="columns">
					<nav>
						<ul class="row">
							<li class="medium-2 columns">
								<a href="catalog.php?category=rings" class="<?php if ($current_page == 'rings.php') { print('active'); } ?>">Rings</a>
							</li>
							<li class="medium-2 columns">
								<a href="catalog.php?category=necklaces" class="<?php if ($current_page == 'necklaces.php') { print('active'); } ?>">Necklaces</a>
							</li>
							<li class="medium-2 columns">
								<a href="catalog.php?category=earrings" class="<?php if ($current_page == 'earrings.php') { print('active'); } ?>">Earrings</a>
							</li>
							<li class="medium-2 columns">
								<a href="catalog.php?category=bracelets" class="<?php if ($current_page == 'bracelets.php') { print('active'); } ?>">Braclets</a>
							</li>
							<li class="medium-2 columns">
								<a href="catalog.php?category=watches" class="<?php if ($current_page == 'watches.php') { print('active'); } ?>">Watches</a>
							</li>
							<li class="medium-2 columns">
								<a href="about.php" class="<?php if ($current_page == 'about.php') { print('active'); } ?>">About</a>
							</li>
						</ul>
					</nav>
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