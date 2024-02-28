
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BASE_PATH = __DIR__ . "/../";
$error_log_file = BASE_PATH . ("logs/error.log");
ini_set('error_log', $error_log_file);

require BASE_PATH . "Core/functions.php";
require base_path("Core/router.php");
// spl_autoload_register(function ($class) {
//     $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
//     require base_path("{$class}.php");
// });

