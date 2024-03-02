<?php

declare(strict_types=1);

use Core\Response;

session_start();   // Start or renew the session
if ($_SESSION["logged_in"] === true) {
    require view('account.view.php');
} else {
    redirect("/home", Response::FORBIDDEN);
}


