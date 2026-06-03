<?php

class Database {

    private $host = "sql308.infinityfree.com";
    private $db_name = "if0_42037353_test";
    private $username = "if0_42037353";
    private $password = "52qc9KU46EPNRl1";

    public $conn;

    public function connect()
    {
        $this->conn = null;

        try {

            $this->conn = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->db_name,
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

        } catch(PDOException $e) {

            echo "Connection Error: ".$e->getMessage();
        }

        return $this->conn;
    }
}