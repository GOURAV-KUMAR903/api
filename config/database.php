<?php

class Database {

    private $host = "localhost";
    private $port = "3306";
    private $db_name = "gnitaskm_test";
    private $username = "gnitaskm";
    private $password = "0@cK%Ub#M8!W";

    public $conn;

    public function connect()
    {
        $this->conn = null;

        try {

            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db_name};charset=utf8";

            $this->conn = new PDO(
                $dsn,
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            die("Connection Error: " . $e->getMessage());
        }

        return $this->conn;
    }
}