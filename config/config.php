<?php

$db_configs =
    [
        'local_db' =>
        [
            'host' => '127.0.0.1',
            'port' => 3306,
            'dbname' => 'capstone',
            'charset' => 'utf8mb4',
        ],
        'remote_db' => [
            'host' => 'server206.web-hosting.com',
            'port' => 3306,
            'dbname' => 'surfnoqi_bbdb',
            'charset' => 'utf8mb4',
        ],
    ];
return $db_configs;
