<?php
declare(strict_types=1);
use Core\App;
use Core\Database;
use Core\Response;

$db = App::container()->resolve(Database::class);

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
    redirect(view("500.php"), Response::SERVER_ERROR);
    die();
} catch (PDOException $error) {
    http_response_code(Response::SERVER_ERROR);
    redirect(view("500.php"), Response::SERVER_ERROR);
    die();
}
    

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
}
require view("product.view.php");
