<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{
    protected PDO $pdo;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=exam_db;charset=utf8mb4';
        $user = 'root';
        $pass = 'root';

        try {
            $this->pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            exit("An error occured: " . $e->getMessage());
        }
    }
}
