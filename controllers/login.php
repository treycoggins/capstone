<?php

declare(strict_types=1);

use Core\Validate;

require base_path("models/login.model.php");   // Bring in login logic

$username_sent;
$password_sent;

if ($_SERVER["REQUEST_METHOD"] === "POST") {   // If the login form was submitted
    // get user submitted credentials
    $username_sent = htmlspecialchars($_POST["username"]);
    $password_sent = htmlspecialchars($_POST["password"]);
    // verify user submitted credentials
    $isValidUsername = Validate::isText($username_sent);
    $isValidPassword = Validate::isPassword($password_sent);
    if (!$isValidUsername || !$isValidPassword) {
        echo "Credentials invalid";
        exit();

    } else {
        authenticate($username_sent, $password_sent, $db);
    }
}



require view("login.view.php");
