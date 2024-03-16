<?php
declare(strict_types=1);
use Core\App;
use Models\Cart;
use Core\Database;
use Models\Session;
$session = App::resolve(Session::class);
$db = App::resolve(Database::class);

$cart = new Cart($db);

$items = $cart->get_all($user);

require(view("cart.view.php"));