<?php
declare(strict_types=1);
use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve(Database::class);
try {
    // Input the sql and execute with the runSQL method of the Database class
    $sql = "SELECT * FROM products;";
    $products = $db->runSQL($sql)->fetchAll();
} catch (Throwable $error) {
    error_log($error->getMessage());
    http_response_code(Response::SERVER_ERROR);
    redirect(view("500.php"));
    exit();
}
require view("product.view.php");
