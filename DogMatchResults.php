<?php
    require "dbLogin.php";

    class DogMatchResults {
        protected $userId;
        protected $dog;

        public function __construct($userId, $dog) {
            $this->userId = $userId;
            $this->dog = $dog;
        }

        public function __save() {
            global $host, $user, $password, $database;
            require_once "dbLogin.php";

            /* Connecting to the database */
            $db_connection = new mysqli($host, $user, $password, $database);
            if ($db_connection->connect_error) {
                die($db_connection->connect_error);
            } else {
                echo "Connection to database established<br><br>";
            }

            /* Query */
            $sqlQuery = sprintf("insert into dogmatcher.dogMatchResults (userId, dog) values ('%s', '%s')",
                $this->userId, $this->dog);

            /* Executing query */
            $result = $db_connection->query($sqlQuery);
            if (!$result) {
                die("Insertion failed: " . $db_connection->error);
            }

            /* Closing connection */
            $db_connection->close();

            return $result;
        }

        public function __update() {
            global $host, $user, $password, $database;
            $db_connection = new mysqli($host, $user, $password, $database);
            if ($db_connection->connect_error) {
                die($db_connection->connect_error);
            }
            /* Query */
            $sqlQuery = "update dogmatcher.dogMatchResults set firstName='{$this->dog}' where userId='{$this->id}'";


            /* Executing query */
            $result = $db_connection->query($sqlQuery);
            if (!$result) {
                die("Inserting records failed. ". $db_connection->error);
            }

            /* Closing connection */
            $db_connection->close();
        }

    }