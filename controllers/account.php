<?php
declare(strict_types= 1);
require "db/db_connect.php";
include "includes/functions.php";
require "models/login.model.php";    // Bring in the login logic functions

session_start();   // Start or renew the session
$logged_in = $_SESSION['logged_in'] ?? false;    // Check if user is logged in
require_login($logged_in);   // Run the function to check if the user is logged in


?>

<?php include 'views/account.view.php'; ?>