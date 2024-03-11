<?php
declare(strict_types=1);
use Core\App;
use Models\Session;

$session = App::resolve(Session::class);

if ($session->get_property("logged_in") === true) {
    require view("account.view.php");
    exit();
} else {
    redirect("/login");
    exit();
}


