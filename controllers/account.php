<?php

declare(strict_types=1);

require base_path("Core/db_connect.php");
require base_path("models/login.model.php");    // Bring in the login logic functions

session_start();   // Start or renew the session
$logged_in = $_SESSION['logged_in'] ?? false;    // Check if user is logged in
if ($logged_in === true) {
    require view('account.view.php');
} else {
    require_login();  // Run the function to check if the user is logged in
}


