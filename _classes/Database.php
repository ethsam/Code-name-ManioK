<?php

    class Database
    {
        public $DB_SERVER = DATABASE_HOST;
        public $DB_USERNAME = DATABASE_USER;
        public $DB_PASSWORD = DATABASE_PASSWORD;
        public $DB_NAME = DATABASE_NAME;

        public function __construct() {
            
            /* Attempt to connect to MySQL database */
            try{
                $pdo = new PDO("mysql:host=" . $DB_SERVER . ";dbname=" . $DB_NAME, $DB_USERNAME, $DB_PASSWORD);
                // Set the PDO error mode to exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch(PDOException $e){
                return "ERROR: Could not connect. " . $e->getMessage();
            }
        }

    } //EOF

?>