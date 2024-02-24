
<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/" => "controllers/index.php",
    "/home" => "controllers/index.php",
    "/login" => "controllers/login.php",
    "/about" => "controllers/about.php",
    "/product" => "controllers/product.php",
    "/contact" => "controllers/contact.php",
    "/signup" => "controllers/signup.php",
    "/account" => "controllers/account.php",
    "/list" =>  "controllers/list.php",
    "/orders" => "controllers/orders.php",
    "/logout" => "controllers/logout.php",
    "/register" => "controllers/register.php",
];

if (array_key_exists($uri, $routes)) {
    $filePath = isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : '';
    $baseDir = $_SERVER["DOCUMENT_ROOT"];
    $controllerFile = $baseDir . "/" . $routes[$uri];
    require $controllerFile;
} else {
    http_response_code(404);
    require "views/404.php";
    die();
};
