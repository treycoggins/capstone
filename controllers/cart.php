<?php
declare(strict_types=1);
use Core\App;
use Models\Session;
$session = App::resolve(Session::class);

require(view("cart.view.php"));