<?php
require('db/localdb.connection.php');
require('db/functions.php');

$sql = "SELECT * FROM products WHERE product_id = 17;";

$statement = $pdo->query($sql);
$products = $statement->fetch();

$sql = "SELECT * FROM products WHERE product_id = 17;";

$statement = $pdo->query($sql);
$products = $statement->fetch();
