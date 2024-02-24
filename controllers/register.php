<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "includes/functions.php";
require "db/db_connect.php";
require "src/classes/Validate.php";
require "src/classes/Member.php";

$member = [];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $member['fname'] = $_POST['fname'];
    $member['lname'] = $_POST['lname'];
    $member['email'] = $_POST['email'];
    $member['username'] = $_POST['username'];
    $member['password'] = $_POST['password'];
    $confirmed_password = $_POST['confirmed'] ?? "";
}

// Validate form data
$errors['fname'] = Validate::isText($member['fname'], 1, 50) ? "" : "First name must be 1-50 characters";
$errors['lname'] = Validate::isText($member['lname'], 1, 50) ? "" : "First name must be 1-50 characters";
$errors['email'] = Validate::isEmail($member['email']) ? "" : "Please enter a valid email address";
$errors['username'] = Validate::isText($member['username'], 1, 50) ? "" : "Username must be 1-50 characters";
$errors['password'] = Validate::isPassword($member['password']) ? "" : 
"Password must be at least 8 characters and have:
<br>
<ul>
<li>A lowercase letter</li>
<li>An uppercase letter</li>
<li>A number</li>
<li>A special character</li>
</ul>";
$errors['confirmed_password'] = $member["password"] === $confirmed_password ? "" : "Passwords do not match";
$invalid = implode($errors);

if (!$invalid) {
    // Create a Member object
    $newMember = new Member($db);
    $result = $newMember->create($member);

    if ($result = false) {
        $errors["email"] = "Email address already in use";
    } else {
        header("Location: /login");
    }
} else {
    echo "Something went wrong!";
}

