<?php

declare(strict_types=1);

use Core\App;
use Core\Database;
use Models\Session;
use Models\User;

$db = App::resolve(Database::class);
$session = App::resolve(Session::class);

$username_sent;
$password_sent;
$validation_error = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // get user submitted credentials
    $username_sent = htmlspecialchars(trim($_POST["username"]));
    $password_sent = htmlspecialchars(trim($_POST["password"]));
    $validUser = $user->login($username_sent, $password_sent);

    if (!$validUser) {
        $validation_error = true;
    } else {
        $session->set("logged_in", true);
        require view("account.view.php");
        exit();
    }
}
require view("login.view.php");
