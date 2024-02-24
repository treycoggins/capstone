<?php
declare(strict_types=1); 
require "db/db_connect.php";
// Input the sql and execute with the runSql method of the Database class
$sql = "SELECT * FROM products;";
$products = $db->runSQL($sql)->fetchAll();

// include the product view
require "views/product.view.php";
