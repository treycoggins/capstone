<?php

declare(strict_types=1);

use Core\App;
use Core\Database;
use Models\Product;
use Models\Session;

$session = App::resolve(Session::class);
$db = App::resolve(Database::class);

$product = new Product($db);
if (isset($_POST["product_id"])) {
    $product_id = intval($_POST["product_id"]);
}

$chosen_product = $product->get($product_id);
$product->add_to_cart($chosen_product);
