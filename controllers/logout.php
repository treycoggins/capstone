<?php
require base_path("models/login.model.php");
session_start();
logout();
$delay = 5;
redirect("/home", Response::SUCCESS);
require view("logout.view.php");
die();
