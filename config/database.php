<?php

class Database {

    private $host = "185.27.134.144"; // IP use kiya hai
    private $port = "3306";
    private $db_name = "if0_42037353_test";
    private $username = "if0_42037353";
    private $password = "52qc9KU46EPNRl1";

    public $conn;

    public function connect()
    {
        $this->conn = null;

        try {

            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->db_name}";

            $this->conn = new PDO(
                $dsn,
                $this->username,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {

            http_response_code(500);

            echo json_encode([
                "status" => false,
                "error" => "Connection Error",
                "message" => $e->getMessage()
            ]);

            exit;
        }

        return $this->conn;
    }
}