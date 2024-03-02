<?php
declare(strict_types=1);

namespace Core;
use Response;
use PDOException;

require(base_path("Core/Database.php"));
// Define variables
$db_configs = require base_path("config/config.php");    // Load DSN configurations
// Instantiate a database connection
if ($_SERVER["HTTP_HOST"] === "127.0.0.1:8080") {
    $db = new Database([...$db_configs["local_db"]], 'treycoggins', 'hrdcndy%5t');
    echo "Database Connected";
} else {
    try {
        $db = new Database([...$db_configs["remote_db"]], 'surfnoqi_trey', 'hrdcndy%5t');
    } catch (PDOException $error) {
        http_response_code(Response::SERVER_ERROR);
        require view(Response::SERVER_ERROR . ".php");
        error_log("PDO Exception: " . $error->getMessage());
        die();
    }
}
