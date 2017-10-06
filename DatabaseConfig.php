<?php

class DatabaseConfig {

    protected $dbHost;
    protected $dbName;
    protected $dbUser;
    protected $dbPass;

    public function __construct($dbHost, $dbName, $dbUser, $dbPass) {
        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
    }

    public function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->dbHost;dbName=$this->dbName", $this->dbUser, $this->dbPass);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected";
        }
        catch(PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }    
}