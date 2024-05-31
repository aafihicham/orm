<?php

class Database
{
    private $pdo;

    public function __construct()
    {
        $config = require 'config.php';

        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->pdo = new PDO($dsn, $config['user'], $config['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}

