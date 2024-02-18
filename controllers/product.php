<?php
declare(strict_types=1);
require("includes/functions.php");

// Open database connection
require("Database.php");


// TODO 
// Design config.php to use different arrays
// //Define server IP addresses
// $server_ip = "198.54.115.19";
// $local_ip = "127.0.0.1";

// // Load DSN configuration
$db_configs = require("config.php");

// Instantiate a database connection
$db = new Database($db_configs);

// TODO Find server address and use it to decide which configuration to load
// // Decide which configuration to use
// $server_ip = $_SERVER["SERVER_ADDR"];
// if ($server_ip === $local_ip) {
//     // Define the PDO object for local server (first index returned by config.php)
//     $flat_array = flatten_array($db_configs[0]);
//     $db = new Database($flat_array);
// } else {
//     // Define the PDO object for remote server (second index returned by config.php)
//     $db = new Database(flatten_array($db_configs[1]));
// }

$id = $_GET['id'];
$query = "SELECT * FROM products WHERE product_id = :id;";

$products = $db->query($query, ['id' => $id])->fetchAll();

// include the view
require("views/product.view.php");
