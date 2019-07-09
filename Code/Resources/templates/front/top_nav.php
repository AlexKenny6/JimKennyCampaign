

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
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