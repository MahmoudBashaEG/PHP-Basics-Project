<?php

class Database
{
    public $conn;

    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        ];

        try {
            $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
        } catch (PDOException $ex) {
            echo "Connection Failed: {$ex->getMessage()}";
            die();
        }
    }

    /**
     * Database Query
     *
     * @param string $query
     * @return PDOStatement
     * @throws PDOException
     */
    public function Query($query, $params = [])
    {
        try {
            $statement = $this->conn->prepare($query);

            foreach ($params as $param => $value) {
                $statement->bindValue(":{$param}", $value);
            }

            $statement->execute();
            return $statement;
        } catch (PDOException $ex) {
            throw new Exception("Query Failed To Execute {$ex->getMessage()}");
        }
    }
}
