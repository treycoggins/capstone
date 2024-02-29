<?php

declare(strict_types=1);
require(base_path("Core/Validate.php"));
require base_path("models/login.model.php");   // Bring in login logic
require base_path("Core/db_connect.php");

session_start();      // Start or renew the session

// try {


// } catch (Exception $e) {
//     http_response_code(Response::SERVER_ERROR);
//     redirect(view("500.php"), Response::SERVER_ERROR);
//     die();
// }

// // Define default values
$username_sent;
$password_sent;

$logged_in = $_SESSION['logged_in'] ?? false;    // Check if user is logged in
require_login($logged_in);

if ($_SERVER["REQUEST_METHOD"] === "POST") {   // If the login form was submitted
    $isValidUsername = Validate::isText(htmlspecialchars($_POST["username"]));
    $isValidPassword = Validate::isPassword(htmlspecialchars($_POST["password"]));
    if ($isValidUsername && $isValidPassword) {
        $username_sent = $_POST["username"];  // Capture the username the user sent
        $password_sent = $_POST["password"];  // Capture the password the user sent
    } else {
        require_login($logged_in);
    }
    // // Write a SQL query statement to check the DB for $username_sent
    $sql = "SELECT username, password FROM users WHERE username = :username;";
    // // Query the database to determine if the username was found
    $user = $db->runSQL($sql, [$username_sent])->fetch();
    // If user found, does password match hashed password? If so, go to Account page for user. If not, return to login page.
    if ($user) {
        password_verify($password_sent, $user["password"]) ? login() : require_login();
        login();
    }
}
