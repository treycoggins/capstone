<?php
include "models/login.model.php";
session_start();
logout();
$delay = 5;
$redirect = "/home";
header("Refresh: $delay, URL=$redirect");
require "views/logout.view.php";
die();
