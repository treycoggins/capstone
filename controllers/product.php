<?php
declare(strict_types=1);    // MUST be first line
require "Database.php";    // Include the Database constructor

// Define variables
$db_configs = require "db/config.php";    // // Load DSN configuration

// Instantiate a database connection
if ($_SERVER['REMOTE_ADDR'] === "127.0.0.1") {
    $db = new Database([...$db_configs["local_db"]], 'treycoggins', 'whtmg%5t');
} else if ($_SERVER['REMOTE_ADDR'] === "65.188.166.20") {
    $db = new Database([...$db_configs["remote_db"]], 'surfnoqi_trey', 'whtmg%5t');
} else {
    require 'views/404.php';
    die();
    }

// Input the query and execute with the query method of the Database class
$query = "SELECT * FROM products;";
$products = $db->query($query)->fetchAll();

// include the product view
require "views/product.view.php";
