<?php
    require "dbLogin.php";

    class DogMatchResults {
        protected $userId;
        protected $dog;
        protected $answer1;
        protected $answer2;
        protected $answer3;
        protected $answer4;
        protected $answer5;
        protected $answer6;

        public function __construct($userId, $dog, $answer1, $answer2, $answer3, $answer4, $answer5, $answer6) {
            $this->userId = $userId;
            $this->dog = $dog;
            $this->answer1 = $answer1;
            $this->answer2 = $answer2;
            $this->answer3 = $answer3;
            $this->answer4 = $answer4;
            $this->answer5 = $answer5;
            $this->answer6 = $answer6;
        }

        public function save() {
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
            $sqlQuery = sprintf("insert into dogmatcher.dogMatchResults (userId, dog, answer1, answer2, answer3, answer4, answer5, answer6) values ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
                $this->userId, $this->dog, $this->answer1, $this->answer2, $this->answer3, $this->answer4, $this->answer5, $this->answer6);

            /* Executing query */
            $result = $db_connection->query($sqlQuery);
            if (!$result) {
                die("Insertion failed: " . $db_connection->error);
            }

            /* Closing connection */
            $db_connection->close();

            return $result;
        }

        public function update() {
            global $host, $user, $password, $database;
            $db_connection = new mysqli($host, $user, $password, $database);
            if ($db_connection->connect_error) {
                die($db_connection->connect_error);
            }
            /* Query */
            $sqlQuery = "update dogmatcher.dogMatchResults set dog='{$this->dog}', answer1='{$this->answer1}', answer2='{$this->answer2}', answer3='{$this->answer3}', answer4='{$this->answer4}', answer5='{$this->answer5}', answer6='{$this->answer6}' where userId='{$this->id}'";


            /* Executing query */
            $result = $db_connection->query($sqlQuery);
            if (!$result) {
                die("Inserting records failed. ". $db_connection->error);
            }

            /* Closing connection */
            $db_connection->close();
        }

    }