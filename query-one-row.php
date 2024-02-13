<?php 
require 'db/db.connection.php';
require 'php-book/functions.php';

$sql = "SELECT first_name, last_name FROM users WHERE user_id = 001;";

$statement = $pdo->query($sql);
$user = $statement->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesame Street Users</title>
</head>
<body>
    <?= html_escape($user['first_name']) ?>
    <?= html_escape($user['last_name']) ?>
</body>
</html>