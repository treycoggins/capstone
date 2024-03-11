<?php

declare(strict_types=1);

use Core\App;
use Core\Database;
use Models\Session;
use Models\User;

$db = App::resolve(Database::class);
$session = App::resolve(Session::class);
$user = new User($db);

$username_sent;
$password_sent;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // get user submitted credentials
    $username_sent = htmlspecialchars(trim($_POST["username"]));
    $password_sent = htmlspecialchars(trim($_POST["password"]));
    $validUser = $user->login($username_sent, $password_sent);

    if (!$validUser) {
        $session->set_property("validation_error", true);
    } else {
        $session->set_property("logged_in", true);
        // dd($_SESSION);
        redirect("/account");
        exit();
    }
}
require view("login.view.php");
