<?php
$type = "mysql";
$host = "127.0.0.1";
$port = "3306";
$dbname = "capstone";
$charset = "utf8mb4";

$username = "treycoggins";
$password = "Biodon4$";
$options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

/* DO NOT CHANGE ANYTHING BELOW THIS LINE */
$dsn = "$type:host=$host;dbname=$dbname;port=$port;charset=$charset";
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException  $error) {
    throw new PDOException($error->getMessage(), $error->getCode());
}
