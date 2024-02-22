<?php

$db_configs =

    [
        'host' => '127.0.0.1',
        'port' => 3306,
        'dbname' => 'capstone',
        'charset' => 'utf8mb4',
    ];

// TODO Design $db_configs to be used as a nested array in product.php controller 
// 'local_db' => [
    // local db configs go here!!
//  ],
// 'remote_db' => [
//     'host' => '198.54.115.19',
//     'port' => 3306,
//     'dbname' => 'capstone',
//     'charset' => 'utf8mb4',
//     ];

return $db_configs;
