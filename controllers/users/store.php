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
$user['fname'] = filter_var($_POST['fname'], FILTER_SANITIZE_SPECIAL_CHARS);
$user['lname'] = filter_var($_POST['lname'], FILTER_SANITIZE_SPECIAL_CHARS);
$user['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$user['username'] = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
$user['password'] = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
$confirmed_password = filter_var($_POST['confirmed'], FILTER_SANITIZE_SPECIAL_CHARS) ?? "";


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
        $errors["username"] = "That username is already in use.";
        require view("register.view.php");
    } else {
        $session->set("success", "You are registered as {$user["username"]}.");
        require view("login.view.php");
    }
} else {
    require_once view("register.view.php");
}
