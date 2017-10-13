<?php
require 'Message.php';
class DatabaseConfig {

    protected $dbHost;
    protected $dbName;
    protected $dbUser;
    protected $dbPass;
    protected $pdo;

    public function __construct($dbHost, $dbName, $dbUser, $dbPass) {
        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
    }

    public function connect()
    {

    }    

    public function query($term, $table)
    {
        $statement = $this->pdo->prepare("SELECT" . $term . " FROM " . $table);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, 'Message'); // Save the fetched OBjs into a Message class
    }
}