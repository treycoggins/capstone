<?php

declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "includes/functions.php";
require "db/db_connect.php";
require "src/classes/Validate.php";
require "src/classes/User.php";

$user = [];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $user['fname'] = $_POST['fname'];
    $user['lname'] = $_POST['lname'];
    $user['email'] = $_POST['email'];
    $user['username'] = $_POST['username'];
    $user['password'] = $_POST['password'];
    $confirmed_password = $_POST['confirmed'] ?? "";


    // Validate form data
    $errors['fname'] = Validate::isText($user['fname'], 1, 50) ? "" : "First name must be 1-50 characters";
    $errors['lname'] = Validate::isText($user['lname'], 1, 50) ? "" : "First name must be 1-50 characters";
    $errors['email'] = Validate::isEmail($user['email']) ? "" : "Please enter a valid email address";
    $errors['username'] = Validate::isText($user['username'], 1, 50) ? "" : "Username must be 1-50 characters";
    $errors['password'] = Validate::isPassword($user['password']) ? "" :
        "Password must be at least 8 characters and have:
<br>
<ul>
<li>A lowercase letter</li>
<li>An uppercase letter</li>
<li>A number</li>
<li>A special character</li>
</ul>";
    $errors['confirmed_password'] = $user["password"] === $confirmed_password ? "" : "Passwords do not match";
    $invalid = implode($errors);

    if (!$invalid) {
        // Create a User object
        $newUser = new User($db);
        $result = $newUser->create($user);

        if ($result = false) {
            $errors["email"] = "Email address already in use";
        } else {
            header("Location: /login");
        }
    } else {
        echo "Something went wrong!";
    }
}
