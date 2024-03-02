<?php

declare(strict_types=1);
use Core\Validate;

require base_path("Core/db_connect.php");
require base_path("src/User.php");
session_start();

$user = [];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
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
    $errors['email'] = Validate::isEmail($user['email']) ? "" : "Invalid email address";
    $errors['username'] = Validate::isText($user['username'], 1, 50) ? "" : "Username must be 1-50 characters";
    $errors['password'] = Validate::isPassword($user['password']) ? "" :
        "Password must contain: 
        <br>
        <ul>
        <li>a minimum of 8 characters</li>
        <li>lowercase letters</li>
        <li>uppercase letters</li>
        <li>numbers</li>
        <li>special characters</li>
        </ul>";
    $errors["confirmed_password"] = $user["password"] === $confirmed_password ? "" : "Passwords do not match";
    $invalid = implode($errors);

    $_SESSION["errors"] = $errors;


    if (!$invalid) {
        // Create a User object
        $newUser = new User($db);
        $result = $newUser->create($user);

        if ($result = false) {
            $errors["email"] = "Email address already in use";
        } else {
            redirect("/login");
        }
    } else {
        redirect("/register");
    }
}
require view("register.view.php");
