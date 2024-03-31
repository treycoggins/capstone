<?php

declare(strict_types=1);
header("Refresh: 4, URL=/");                           // Destroy the session

use Core\App;
use Models\Session;

$session = App::resolve(Session::class);
$session->destroy();
require view("logout.view.php");
exit();