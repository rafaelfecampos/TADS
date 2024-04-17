<?php

    class Database{

        static $db = null;

        function static getConnection(){
            if(self::$db == null){
                self::$db = new PDO("mysql:host=mariadb;dbname=tads","root","root");
            } 
            return self::$db;
        }

        function closeConnection(){
            self::$db = null;
        }
    }



    

