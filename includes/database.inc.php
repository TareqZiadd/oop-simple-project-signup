<?php
class Database {

    private $pdo;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=myfirstdatabase",
             "root","");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "Database connection success";
        } catch (PDOException $e) {
            echo "Database connection failed:". $e->getMessage();
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}

