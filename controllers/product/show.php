<?php

declare(strict_types=1);

use Core\App;
use Core\Database;
use Models\Product;

$db = App::resolve(Database::class);
$product = new Product($db);
$products = $product->get_all();



require view("product.view.php");
