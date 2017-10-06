<?php

class DatabaseConfig {

    protected $dbHost;
    protected $dbName;
    protected $dbUser;
    protected $dbPass;
    protected $conn;

    public function __construct($dbHost, $dbName, $dbUser, $dbPass) {
        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
    }

    public function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPass);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected";
        }
        catch(PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }    

    public function query($term, $table)
    {
        $sql = "SELECT " . $term . " FROM " . $table;

        return $this->conn->query($sql);
    }
}