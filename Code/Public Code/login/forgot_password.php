<?php 

require_once("../resources/config.php"); 
require_once 'libraries/PHPMailer-master/PHPMailerAutoload.php';

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Jim Kenny for Fire Commissioner</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="../css/login.css" type='text/css'>
<!-- Font css -->
<link rel="stylesheet" href="../css/fonts/font-awesome.min.css">
<link rel="stylesheet" href="../css/assets/fonts/ionicons.min.css">

<link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="../js/jquery.min.js"></script>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Navbar -->
    <div class="w3-top">
		<div class="w3-bar w3-red w3-card w3-left-align w3-large">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
			<a href="../index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
			<a href="../background.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Background</a>
			<a href="../policies.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Policies</a>
            <a href="../contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact</a>
            <a href="../login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log In</a>
		</div>

		<!-- Navbar on small screens -->
		<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
			<a href="../index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
			<a href="../background.php" class="w3-bar-item w3-button w3-padding-large">Background</a>
			<a href="../policies.php" class="w3-bar-item w3-button w3-padding-large">Policies</a>
            <a href="../contact.php" class="w3-bar-item w3-button w3-padding-large">Contact</a>
            <a href="../login.php" class="w3-bar-item w3-button w3-padding-large">Log In</a>
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
</head>

<body>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="text-monospace block-heading">
                    <h2 class="text-info">Forgot your password?</h2>
                    <p>Please fill the credentials to reset your password</p>
                    <?php 
                        if($msg != ''){
                            echo '<hr>';
                            echo '<div class="alert alert-warning" role="alert">';
                            echo  $msg;
                            echo '</div>';
                        }
                    ?>
                </div>
                <form class="text-monospace" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="form-group">
                        <input class="form-control item" type="email" name="email" placeholder="Enter your email">
                        <span class="error form-text"><?php echo $emailErr; ?></span>
                        <small class="form-text text-muted">We will send you a reset code.</small>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Reset my password</button>
                    <a
                        class="text-monospace form-text text-muted" href="../login.php" style="margin-top: 20px;font-size: 14px;">Go back to login</a>
                </form>
            </div>
        </section>
    </main>
    
    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="footer_box">
                            <h4>Background</h4>
                            <li><a href="../background.php">Jim's Background</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer_box">
                            <h4>Policies</h4>
                            <li><a href="../policies.php">Jim's Policies</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer_box">
                            <h4>Contact</h4>
                            <li><a href="../contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer_box">
                            <h4>Admin Login</h4>
                            <li><a href="../login.php">Log In</a></li>
                        </ul>
                    </div>
                    <br><br>
                    <div class="row footer_bottom">
                        <div class="copy">
                            <p> &copy; 2019, Jim Kenny for Fire Commissioner, All rights reserved.
                            <br>Designed and Developed by <a href="https://pacwestsoftware.com/index.html" 
                            data-size="large" target="_blank">&copy; Pacwest Software Development LLC</a>, All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script src="../js/smoothproducts.min.js"></script>
    </body>	
</html>