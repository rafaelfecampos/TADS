<?php

class Database {
    static $db = null;

    public static function getConnection() {
        if (self::$db == null) {
            self::$db = new PDO("mysql:host=mariadb;dbname=tads", "root", "root");
        }
        return self::$db;
    }
    static function closeConnection()
    {
        self::$db = null;
    }
}
