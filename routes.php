<?php

$router->get("/", "controllers/index.php");
$router->get("/home", "controllers/index.php");
$router->get("/favicon", "favicon.ico");
$router->get("/login", "controllers/login.php");
$router->get("/logout", "controllers/logout.php");
$router->get("/register", "controllers/register.php");
$router->get("/about", "controllers/about.php");
$router->get("/product", "controllers/product.php");
$router->get("/contact", "controllers/contact.php");
$router->get("/account", "controllers/account.php");
$router->get("/orders", "controllers/orders.php");
$router->get("/cart", "controllers/cart.php");

$router->post("/login", "controllers/login.php");
$router->post("/register", "controllers/register.php");