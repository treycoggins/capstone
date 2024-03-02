<?php
declare(strict_types=1);
use Core\Validate;
use Core\Response;

session_start();      // Start or renew the session

require base_path("models/login.model.php");   // Bring in login logic
$_SESSION["logged_in"] = false;

$logged_in = $_SESSION["logged_in"];


try {
    require base_path("Core/db_connect.php");
} catch (Exception $e) {
    http_response_code(Response::SERVER_ERROR);
    redirect("/", Response::SERVER_ERROR);
    die();
}

$username_sent;
$password_sent;

if ($_SERVER["REQUEST_METHOD"] === "POST") {   // If the login form was submitted
    $isValidUsername = Validate::isText(htmlspecialchars($_POST["username"]));
    $isValidPassword = Validate::isPassword(htmlspecialchars($_POST["password"]));
    if ($isValidUsername && $isValidPassword) {
        $username_sent = $_POST["username"];  // Capture the username the user sent
        $password_sent = $_POST["password"];  // Capture the password the user sent
    } else {
        echo "Your credentials are not valid";
        die();
    }
    // // Write a SQL query statement to check the DB for $username_sent
    $sql = "SELECT * FROM users WHERE username = :username;";
    // // Query the database to determine if the username was found
    $user = $db->runSQL($sql, [$username_sent])->fetch();
    // If user found, does password match hashed password? If so, go to Account page for user. If not, return to login page.
    if ($user) {
        password_verify($password_sent, $user["password"]) ? login() : require_login($logged_in);
    }
}

require_once(view("login.view.php"));