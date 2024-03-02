<?php
namespace Core;
use PDO;
use PDOException;
class Database
{
    private $connection;

    public function __construct(array $config, string $username = null, string $password = null)
    {
        if ($username === null) {
            $username = $_ENV["MYSQL_USERNAME"];
        }
        if ($password === null) {
            $password = $_ENV["MYSQL_PASSWORD"];
        }

        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->connection = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $error) {
           throw $error;
        };
    }

    public function runSQL(string $sql, array $params = null)
    {
        if (!$params) {
            return $this->connection->query($sql);
        }
        $statement = $this->connection->prepare($sql);
        $statement->execute($params);
        return $statement;
    }
}
