<?php

$router->get("/", "controllers/index.php");
$router->get("/home", "controllers/index.php");
$router->get("/favicon", "favicon.ico");
$router->get("/logout", "controllers/logout.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");
$router->get("/account", "controllers/account.php");
$router->get("/orders", "controllers/orders.php");
$router->get("/cart", "controllers/cart.php");

$router->get("/login", "controllers/login.php");
$router->post("/login", "controllers/login.php");

$router->get("/register", "controllers/users/show.php");
$router->post("/register", "controllers/users/store.php");

$router->get("/product", "controllers/product/show.php");
$router->post("/product", "controllers/product/store.php");