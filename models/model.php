
<?php
function connectToDatabase()
{
    require('db/functions.php');

    
    // create the DSN variables
    $type = "mysql";
   // $host = $server_ip;
    $host = "127.0.0.1";
    $port = "3306";
    $dbname = "surfnoqi_bbdb";
    $charset = "utf8mb4";

    $username = "surfnoqi_bbdb";
    $password = "whtmg%5t";
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    /* DO NOT CHANGE ANYTHING BELOW THIS LINE */
    $dsn = "$type:host=$host;dbname=$dbname;port=$port;charset=$charset";
    try {
        $pdo = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $error) {
        throw new PDOException($error->getMessage(), $error->getCode());
    }
};

function fetchData()
{
    require("index.php");
    $sql = "SELECT * FROM products;";

    $statement = $connection->$pdo->query($sql);
    $products = $statement->fetchAll();

    if (!$products) {
        include("views.404.php");
    }
};
