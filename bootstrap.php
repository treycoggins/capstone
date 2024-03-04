<?php

use Core\App;
use Core\Container;
use Core\Database;
use Core\Response;

$container = new Container();

if ($_SERVER["HTTP_HOST"] === "127.0.0.1:8080") {
    $container->bind("Core\Database", function () {
        $config = require base_path("config/config.php");
        return new Database($config["local_db"], "treycoggins", "hrdcndy%5t");
    });
    $db = $container->resolve("Core\Database");
} else {
    try {
        $container->bind("Core\Database", function () {
            $config = require base_path("config/config.php");
            return new Database($config["local_db"], "treycoggins", "hrdcndy%5t");
        });
        $db = $container->resolve("Core\Database");
    } catch (PDOException $error) {
        http_response_code(Response::SERVER_ERROR);
        require view(Response::SERVER_ERROR . ".php");
        error_log("PDO Exception: " . $error->getMessage());
        exit();
    }
}

App::setContainer($container);
