<?php
declare(strict_types=1); 
require base_path("db/db_connect.php");
// Input the sql and execute with the runSql method of the Database class
$sql = "SELECT * FROM products;";
$products = $db->runSQL($sql)->fetchAll();

require view("product.view.php");
