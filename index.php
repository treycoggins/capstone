<?php 

  parse_url($uri = $_SERVER['REQUEST_URI'])['path'];

  if ($uri === '/') {
    require 'views/home.view.php';
  } 
  else if ($uri === '/signin') {
    require 'views/signin.view.php';
  }
  else if ($uri === '/signup') {
    require 'views/signup.view.php';
  } 

  $routes = [
    '/' => 'controllers/index.php',
    '/signin' => 'controllers/singin.php',
    '/signup' => 'controllers/signup.php',
  ];