
<?php

use Core\Router;
session_start();

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

const BASE_PATH = __DIR__ . "/../";
$error_log_file = BASE_PATH . ("logs/error.log");
ini_set("error_log", $error_log_file);

require_once BASE_PATH . "src/functions.php";
require_once base_path("Core/Router.php");
spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

require base_path("bootstrap.php");

$router = new Router();

$routes = require base_path("routes.php");
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($uri, $method);
