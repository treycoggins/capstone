
<?php
// declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "db/db_connect.php";
require "includes/functions.php";
require "models/login.model.php";   // Bring in login logic

session_start();        // Start or renew the session
$logged_in = $_SESSION['logged_in'] ?? false;    // Check if user is logged in

if ($logged_in) {                   // If already logged in
    header("Location: /account");    // Redirect to account page
    die();                             // Stop further code from running
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {   // If the login form was submitted
    $username_sent = $_POST["username"];     // Capture the username the user sent
    $password_sent = $_POST["password"]; // Capture the password the user sent
}
// Write a SQL query statement to check the DB for $username_sent
$sql = "SELECT * FROM users WHERE username = :username;";
 // Query the database and store bool to determine if the username was found
$user = $db->runSQL($sql)->fetch();
var_dump($user);

include "views/login.view.php";
