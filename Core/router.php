<?php
declare(strict_types=1);

require(base_path("Core/Response.php"));

function routeToController($uri, $routes) {
    $uri = html_escape(trim($uri));
    $controllerFile = base_path($routes[$uri]);
    if (file_exists($controllerFile)) {
        require $controllerFile;
    } else {
        abort(Response::NOT_FOUND);
    };
}
function abort($code = 404)
{
    http_response_code($code);
    require view("{$code}.php");
    die();
}
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$routes = require base_path("routes.php");



routeToController($uri, $routes);