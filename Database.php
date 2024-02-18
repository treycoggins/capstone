<?php
// require('db/functions.php');

// Connect to the database, and execute a query
class Database
{
    public $connection;
    public function __construct($config, $user = 'treycoggins', $password = 'whtmg%5t')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->connection = new PDO($dsn, $user, $password, $options);
        } catch (PDOException  $error) {
            throw new PDOException($error->getMessage(), $error->getCode());
        };
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}
