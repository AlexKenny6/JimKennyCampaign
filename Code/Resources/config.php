<?php ob_start();

session_start();
// session destory is used for debugging purposes only 
 // session_destroy();


defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR) ;

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front") ;

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back") ;

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads") ;

// Localhost settings below on my Mac only
defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", "user");

defined("DB_PASS") ? null : define("DB_PASS", "pass");

defined("DB_NAME") ? null : define("DB_NAME", "name_db");

//Online Settings below

//defined("DB_HOST") ? null : define("DB_HOST", "localhost");
//defined("DB_USER") ? null : define("DB_USER", "Username for Admin User");
//defined("DB_PASS") ? null : define("DB_PASS", "Password for Admin User");
//defined("DB_NAME") ? null : define("DB_NAME", "DB Name");


// Create connection
$connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

require_once("functions.php");

?>