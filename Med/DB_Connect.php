<?php


class DB_Connect
{
    private $conn;

    // Connecting to database
    public function connect()
    {
        require_once 'config.php';

        // Connecting to mysql database
        $this->conn = new PDO(DB_HOST, DB_USER, DB_PASSWORD);

        // return database handler
        return $this->conn;
    }
}