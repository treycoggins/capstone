<?php

declare(strict_types=1);

use Core\App;
use Core\Database;
use Models\Session;
use Models\User;
use Core\Validate;

$db = App::resolve(Database::class);
$session = App::resolve(Session::class);
$newUser = new User($db);

$user = [];
$errors = [];

// Get form data
$user['fname'] = $_POST['fname'];
$user['lname'] = $_POST['lname'];
$user['email'] = $_POST['email'];
$user['username'] = $_POST['username'];
$user['password'] = $_POST['password'];
$confirmed_password = $_POST['confirmed'] ?? "";


// Validate form data
$errors['fname'] = Validate::isText($user['fname'], 1, 50) ? "" : "First name must be 1-50 characters";
$errors['lname'] = Validate::isText($user['lname'], 1, 50) ? "" : "Last name must be 1-50 characters";
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
$session->set("errors", $errors);
$invalid = implode($errors);


if (!$invalid) {
    // Try to insert a new user and return a bool
    $result = $newUser->create($user);

    if ($result === false) {  // Username already in use
        $errors["username"] = "That username is already in use";
        dd($errors); 
    } else {
        $session->set("success", "You are registered as {$user["username"]}.");
        dd($session);
        require view("login.view.php");
    }
} else {
    require_once view("register.view.php");
}
