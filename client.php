<?php include "includes/header.php"; ?>

<section id="profile">
	<div class="row">
		<div class="columns">
			<h1>
				<i class="fi-torso"></i> Profile
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-3 columns">
			<div id="profile-picture">
				<img src="img/logo-crown.svg">
			</div>
			<div class="profile-card">
				<h5>Dan Novatnak</h5>
				<h6>Joined 10/4/2016</h6>
				<br>
				<h6>Email: email@example.com</h6>
				<h6>Phone: (555) 123-4567</h6>
			</div>
		</div>
		<div class="small-12 medium-9 columns">
			<div class="profile-card">
				<h3>Open Orders &amp; Order History</h3>
				<h5>Coming Soon!</h5>
			</div>
			<div class="profile-card">
				<h3>Shipping Address</h3>
				<form>
					<label>Full Name: </label>
					<input type="text" name="full_name" placeholder="Full Name">
					<label>Address 1: </label>
					<input type="text" name="address_1" placeholder="Address Line 1">
					<label>Address 2: </label>
					<input type="text" name="full_name" placeholder="Address Line 2">
					<label>City: </label>
					<input type="text" name="city" placeholder="City">
					<label>State: </label>
					<input type="text" name="state" placeholder="State">
					<label>ZIP/Postal Code: </label>
					<input type="text" name="zip_postal_code" placeholder="Zip/Postal Code">
					<label>Country: </label>
					<select name="country" placeholder="country"></select>
				</form>
			</div>
			<div class="profile-card">
				<h3>Payment Information</h3>
				<h5>Coming Soon!</h5>
			</div>
		</div>
	</div>
</section>

<?php include "includes/footer.php"; ?>