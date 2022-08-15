<?php
namespace App\Entity;

use Exception;
use PDO;
use PDOException;

class DbConnection
{

    private static ?DbConnection $instance = null;
    private PDO $conn;

    public function getConnection() : PDO
    {
        return $this->conn;
    }

    public static function getInstance() : self
    {
        if (!self::$instance) {
            self::$instance = new DbConnection();
        }

        return self::$instance;
    }

    private function __construct()
    {
        try {
            $this->conn = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException|Exception $e) {
            echo $e->getMessage();

            if (isset($this->conn)) {
                unset($this->conn);
            }
        }
    }

    private function __clone()
    {
    }
}
