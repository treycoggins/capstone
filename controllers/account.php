<?php

declare(strict_types=1);

if ($_SESSION["logged_in"] === true) {
    require view('account.view.php');
} else {
    redirect("/login");
}


