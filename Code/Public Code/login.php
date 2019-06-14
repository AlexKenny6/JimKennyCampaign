<?php require_once("resources/config.php");  ?>

<?php 
    
    //Check if we are already logged in to prevent re-directions
    if(isset($_SESSION['id'])){
        header("Location: login/profile.php");
    }

    // define variables and set to empty values
    $username = $password = "";
    $usernameErr = $passwordErr = "";

    //Define cookie variables
    $cookie_username = "username";
    $cookie_password = "password";

    $count = 0;
    $msg = '';

    //Submitting the form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        
        //Validating our username
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
            $count++;
        } else {
            $username = test_input($_POST["username"]);
        }
        
        //Validating our password
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
            $count++;
        } else {
            $password = test_input($_POST["password"]);
        }
        
        //Check if we are free of errors
        if($count == 0){
            
            //check if this user exists in the database
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $connection->query($sql);
            
            //if data matches
            if($result->num_rows > 0) {
                
                // output data
                $row = $result->fetch_assoc();
                //If the user is verified
                if ($row['is_active'] == 1) {
                    
                    //Check if passwords match
                    if(password_verify($password, $row['password'])) {
                        //Set up cookie files to store username and password
                        if (isset($_POST['checkbox'])){
                            setcookie("username", $username, time() + (86400 * 30), "/");
                            setcookie("password", $password, time() + (86400 * 30), "/");
                        } 
                        //Setting our SESSION variables
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['image'] = $row['image'];
                        $_SESSION['created_at'] = $row['created_at'];
                        header ("Location: login/profile.php");
                        exit();

                    } else {
                        $passwordErr = 'Wrong password. Please try again';
                        $password = "";
                        $count++;
                    }
                } else {
                    $msg = 'You need to verify your account before you login';
                    $count++;
                }
            } else {
                $msg = "There is no account with this username in the database";
                $username = $password = "";
                $count++;
            }
        }
    } // End of IF
?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>

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

<body>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="text-monospace block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Please fill the credentials to login</p>
                    <?php 
                        if($msg != ''){
                            echo '<hr>';
                            echo '<div class="alert alert-danger" role="alert">';
                            echo  $msg;
                            echo '</div>';
                        } else if (isset($_GET['message'])){
                            echo '<hr>';
                            echo '<div class="alert alert-success" role="alert">';
                            echo  $_GET['message'];
                            echo '</div>';
                        }
                    ?>
                </div>
                <form class="text-monospace" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="form-group">
                        <?php 
                            if(!isset($_COOKIE[$cookie_username])){
                                echo '<input class="form-control item" type="text" name="username" placeholder="Enter your username" value="' . $username . '">';
                                echo '<span class="error form-text"> ' . $usernameErr . '</span>';
                            } else {
                                echo '<input class="form-control item" type="text" name="username" placeholder="Enter your username" value="' . $_COOKIE[$cookie_username] . '">';
                                echo '<span class="error form-text">' . $usernameErr . '</span>';
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <?php 
                            if(!isset($_COOKIE[$cookie_password])){
                                echo '<input class="form-control item" type="password" name="password" placeholder="Enter your password" value="' . $password . '">';
                                echo '<span class="error form-text">'. $passwordErr . '</span>';
                            } else {
                                echo '<input class="form-control item" type="password" name="password" placeholder="Enter your password" value="' . $_COOKIE[$cookie_password] . '">';
                                echo '<span class="error form-text">' . $passwordErr . '</span>';
                            }
                        ?>
                    </div>
                    <!--<div class="form-group"> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkbox"><label class="form-check-label" for="checkbox"><br>Remember me</label>
                        </div>
                    </div>-->
                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                    <a href="login/forgot_password.php" class="form-text text-muted" style="font-size: 14px;margin-top: 20px;">Forgot your password?</a>
                    <a href="login/registration.php" class="form-text text-muted" style="font-size: 14px;">Don't you have an account? Register here.</a>
                </form>
            </div>
        </section>
        <br><br>
    </main>
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>