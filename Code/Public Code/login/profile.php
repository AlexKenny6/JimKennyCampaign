<?php 

require_once("../resources/config.php"); 
    

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
            <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Profile</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
		</div>

		<!-- Navbar on small screens -->
		<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
			<a href="../index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
			<a href="../background.php" class="w3-bar-item w3-button w3-padding-large">Background</a>
			<a href="../policies.php" class="w3-bar-item w3-button w3-padding-large">Policies</a>
            <a href="../contact.php" class="w3-bar-item w3-button w3-padding-large">Contact</a>
            <a href="profile.php" class="w3-bar-item w3-button w3-padding-large">Profile</a>
            <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
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
        <section class="text-monospace clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Profile Information</h2>
                    <p>Here you can view your profile information and you can also edit them</p>
                    <?php
                        if (isset($_GET['message'])){
                            echo '<hr>';
                            echo '<div class="alert alert-success" role="alert">';
                            echo  $_GET['message'];
                            echo '</div>';
                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php 
                            $sql = "SELECT image FROM users WHERE id = '$id'";
                            $result = $connection->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $image = $row['image'];
                                if ($image == ''){
                                    echo '<div class="image-box">';
                                    echo    '<div class="img" style="background-image: url(&quot;images/profil_auto.jpg&quot;);"></div>';
                                    echo '</div>';
                                } else {
                                    echo '<div class="image-box">';
                                    echo    '<div class="img" style="background-image: url(&quot;images/' . $image . '&quot;);"></div>';
                                    echo '</div>';
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                            $sql = "SELECT * FROM users WHERE id = '$id'";
                            $result = $connection->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                $row = $result->fetch_assoc();
                                $name = $row['name'];
                                $username = $row['username'];
                                $email = $row['email'];
                                $created_at = $row['created_at'];
                            } else {
                                echo "0 results";
                            }
                        ?>
                        <h3><?php echo $name; ?></h3>
                        <hr>
                        <div class="getting-started-info">
                            <p>Username: <strong><?php echo $username; ?></strong></p>
                            <p>Email: <strong><?php echo $email; ?></strong>&nbsp;</p>
                        </div>
                        <hr>
                        <p>Created at: <strong><?php echo(date("d-m-Y",$created_at)); ?></strong></p>
                        <hr>
                        <div class="row">
                            <div class="col text-left">
                                <div class="btn-group" role="group">
                                    <a class="btn btn-dark text-center border rounded shadow-lg d-xl-flex" role="button" href="upload_image.php" data-toggle="tooltip" data-placement="top" title="Upload new image">
                                        <i class="fa fa-file-picture-o d-xl-flex" style="margin-right: 0px;"></i>
                                    </a>
                                    <a class="btn btn-dark border rounded shadow-lg d-xl-flex" role="button" href="edit_profile.php" data-toggle="tooltip" data-placement="top" title="Edit profile">
                                        <i class="fa fa-edit d-xl-flex" style="margin-right: 0px;"></i>
                                    </a>
                                    <a class="btn btn-dark border rounded shadow-lg d-xl-flex" role="button" href="change_password.php" data-toggle="tooltip" data-placement="top" title="Change password">
                                        <i class="fa fa-unlock-alt d-xl-flex" style="margin-right: 0px;"></i>
                                    </a>
                                </div>
                                
                            </div>
                            <!--
                            <div class="col text-right">
                                <a class="btn btn-dark text-center border rounded shadow-lg" role="button" href="#" data-toggle="modal" data-target="exampleModal">
                                    <i class="fa fa-power-off d-xl-flex" style="margin-right: 0px;"></i>
                                </a>
                            </div>-->
                            <!-- Modal
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete your account</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        Do you really want to delete your account?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                            <form class="text-monospace" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                                  <input type="submit" value='Yes' class="btn btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
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