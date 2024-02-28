
<?php

const BASE_PATH = __DIR__ . "/../";
$error_log_file = BASE_PATH . ("logs/error.log");
ini_set('error_log', $error_log_file);

require BASE_PATH . "Core/functions.php";
require "../Core/router.php";
spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

