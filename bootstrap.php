<?php

use Core\App;
use Core\Container;
use Core\Database;
use Core\Response;
use Models\Session;
use Models\User;

$container = new Container();


if ($_SERVER["SERVER_ADDR"] === "127.0.0.1") {
    $container->bind("Core\Database", function () {
        $config = require base_path("config/config.php");
        return new Database($config["local_db"], "treycoggins", "hrdcndy%5t");
    });
} else {
    try {
        $container->bind("Core\Database", function () {
            $config = require base_path("config/config.php");
            return new Database($config["remote_db"], "surfnoqi_trey", "hrdcndy%5t");
        });
    } catch (PDOException $error) {
        http_response_code(Response::SERVER_ERROR);
        require view(Response::SERVER_ERROR . ".php");
        error_log("PDO Exception: " . $error->getMessage());
        exit();
    }
}

$container->bind("Models\Session", function(){
    return new Session();
});

App::setContainer($container);


