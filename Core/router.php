<?php

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    };
}


function abort($code = 404)
{
    http_response_code($code);
    require view("{$code}.php");
    die();
}

$routes = require base_path("routes.php");
$uri = isset($_SERVER["REQUEST_URI"]) ? parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) : "/";


routeToController($uri, $routes);