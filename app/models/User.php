<?php

class User {
    private $conn;

    public function __construct() {
        $this->conn = new Database;
    }

    public function getUsers() {
        $this->conn->query("SELECT * FROM users");
        $result = $this->conn->resultSet();
        return $result;
    }
    
}