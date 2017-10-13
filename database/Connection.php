<?php


class Connection {

    public static function make()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=guestbook", "root", "");
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }
}