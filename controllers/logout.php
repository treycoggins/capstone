<?php
require base_path("models/login.model.php");
session_start();
logout();
$delay = 5;
$redirect = "/home";
header("Refresh: $delay, URL=$redirect");
require view("logout.view.php");
die();
