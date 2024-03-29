<?php

namespace src\utilities;

use PDO;

class Database
{
    /**
     * @var PDO
     */
    private $pdo;

    public function connect(): void
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=catalogue2;charset=utf8', 'root');
    }

    public function query(string $sql, string $className): array
    {
        $query = $this->pdo->query($sql);
        $result = $query->fetchAll(PDO::FETCH_CLASS, $className);
        return $result;
    }

    public function exec(string $sql): int
    {
        return $this->pdo->exec($sql);
    }
}