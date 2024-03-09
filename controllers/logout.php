<?php

declare(strict_types=1);

use Core\App;
use Models\Session;

$session = App::resolve(Session::class);
$session->destroy();
require view("logout.view.php");
