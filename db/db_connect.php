<?php
require base_path("Core/Database.php");

// Define variables
$db_configs = require base_path("config/config.php");    // Load DSN configuration
// Instantiate a database connection
if ($_SERVER['HTTP_HOST'] === "127.0.0.1:8080") {
    $db = new Database([...$db_configs["local_db"]], 'treycoggins', 'hrdcndy%5t');
    echo "DB Connected!";
} else {
    try {
        $db = new Database([...$db_configs["remote_db"]], 'surfnoqi_trey', 'hrdcndy%5t');
    } catch (Exception $e) {
        http_response_code(Response::SERVER_ERROR);
        require 'views/500.php';
        error_log($e);
        die();
    }
}
