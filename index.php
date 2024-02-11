<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
  '/' => 'controllers/index.php',
  '/signin' => 'controllers/signin.php',
  '/signup' => 'controllers/signup.php',
];

if (array_key_exists($uri, $routes)) {
  require($routes[$uri]);
} else {
  http_response_code(404);
  require('views/404.php');
  die();
}
