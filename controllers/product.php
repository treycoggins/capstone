<?php

declare(strict_types=1);

use Core\Response;
use Throwable;
use PDOException;
use Exception;

require base_path("Core/db_connect.php");

// Verify the database object
if ($db === null) {
    throw new Exception("Database connection null");
}
try {
    // Input the sql and execute with the runSql method of the Database class
    $sql = "SELECT * FROM products;";
    $products = $db->runSQL($sql)->fetchAll();
} catch (Throwable $error) {
    error_log($error->getMessage());
    http_response_code(Response::SERVER_ERROR);
    redirect(base_path("500.php"), Response::SERVER_ERROR);
    die();
} catch (PDOException $error) {
    http_response_code(Response::SERVER_ERROR);
    redirect(base_path("500.php"), Response::SERVER_ERROR);
    die();
}
    
require view("product.view.php");
