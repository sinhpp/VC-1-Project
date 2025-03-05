<?php

class Database {
    private $host = "localhost"; // Change if using a different database host
    private $db_name = "ecommerce_pos"; // Your database name
    private $username = "root"; // Your database username
    private $password = ""; // Your database password (set if required)
    private static $instance = null;
    private $conn;

    // Private constructor to prevent multiple instances
    private function __construct() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT => true
            ];
            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Get the singleton instance of the database connection
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Get the PDO connection
    public function getConnection() {
        return $this->conn;
    }

    // Function to execute queries (INSERT, UPDATE, DELETE)
    public function executeQuery($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            error_log("Database Error: " . $e->getMessage());
            return false;
        }
    }

    // Function to fetch a single row
    public function fetchOne($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $e) {
            error_log("FetchOne Error: " . $e->getMessage());
            return null;
        }
    }

    // Function to fetch multiple rows
    public function fetchAll($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            error_log("FetchAll Error: " . $e->getMessage());
            return [];
        }
    }

    // Function to get the last inserted ID
    public function getLastInsertId() {
        return $this->conn->lastInsertId();
    }
}

// Example usage
// $db = Database::getInstance()->getConnection();
// $result = Database::getInstance()->fetchAll("SELECT * FROM users");
// print_r($result);

?>
