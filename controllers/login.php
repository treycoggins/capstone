<?php

declare(strict_types=1);
use Core\App;
use Core\Database;
use Core\Validate;
use Models\Session;
use Models\User;

$session = App::resolve(Session::class);
$db = App::resolve(Database::class);
$user = new User($db);

$error = "";
$username_sent;
$password_sent;

if ($_SERVER["REQUEST_METHOD"] === "POST") {   // If the login form was submitted
    // get user submitted credentials
    $username_sent = htmlspecialchars($_POST["username"]);
    $password_sent = htmlspecialchars($_POST["password"]);
    // verify user submitted credentials
    $isValidUsername = Validate::isText($username_sent);
    $isValidPassword = Validate::isPassword($password_sent);
    if (!$isValidUsername || !$isValidPassword || !$user) {
        $errors = "Invalid username or password";

    } else {
        $user->login($username_sent, $password_sent);
        if ($user) {
            $session->set("logged_in", true);
            redirect("/account");
            exit();
        } else {
            $errors = "Invalid username or password";
        }
    }
}
require view("login.view.php");
