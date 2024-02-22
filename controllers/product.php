<?php

declare(strict_types=1);    // MUST be first line

require "Database.php";    // Include the Database constructor

// Define variables
$db_configs = require "db/config.php";    // // Load DSN configuration
$id = 1;
// Instantiate a database connection
$db = new Database($db_configs);    // Open database connection

// Input the query and execute with the query method of the Database class
$query = "SELECT * FROM products WHERE product_id = :id;";
$products = $db->query($query, ['id' => $id])->fetchAll();

// include the product view
require "views/product.view.php";
