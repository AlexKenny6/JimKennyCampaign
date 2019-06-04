<?php require_once("resources/config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>

	<!-- Navbar -->
	<div class="w3-top">
		<div class="w3-bar w3-red w3-card w3-left-align w3-large">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
			<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
			<a href="background.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Background</a>
			<a href="policies.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Policies</a>
			<a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact</a>
		</div>

		<!-- Navbar on small screens -->
		<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
			<a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
			<a href="background.php" class="w3-bar-item w3-button w3-padding-large">Background</a>
			<a href="policies.php" class="w3-bar-item w3-button w3-padding-large">Policies</a>
			<a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact</a>
		</div>
	</div>

	<script>
	// Used to toggle the menu on small screens when clicking on the menu button
	function myFunction() {
		var x = document.getElementById("navDemo");
		if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
		} else { 
			x.className = x.className.replace(" w3-show", "");
		}
	}
	</script>

<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<img class="img-fluid" src="images/JimKennyPic.JPG" alt="">
			</div>
			<div class="col-md-4">
				<h1 class="my-3">Vote Jim Kenny for Fire Commissioner</h1>
				<p>Some info</p>
				<h3 class="my-3">Statement</h3>
				<ul>
					<li>Lorem Ipsum</li>
					<li>Dolor Sit Amet</li>
					<li>Consectetur</li>
					<li>Adipiscing Elit</li>
				</ul>
			</div>
		</div>
	</div>
<br>

<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>