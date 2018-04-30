<?php
    require "dbLogin.php";

    class User {
        protected $id;
        protected $firstName;
        protected $lastName;
        protected $username;
        protected $password;
        protected $takenDogMatch;
        protected $takenWhatDog;

        public function __construct($firstName, $lastName, $username, $password) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->username = $username;
            $this->password = $password;
            $this->takenDogMatch = false;
            $this->takenWhatDog = false;

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
            $sqlQuery = sprintf("insert into dogmatcher.user (name, email, gpa, year, gender, password) values ('%s', '%s', '%s', '%s')",
                $this->firstName, $this->lastName, $this->firstName, $hashed = password_hash($this->password, PASSWORD_DEFAULT));

            /* Executing query */
            $result = $db_connection->query($sqlQuery);
            if (!$result) {
                die("Insertion failed: " . $db_connection->error);
            }

            /* Query */
            $query = "select id from dogmatcher.user where username = '{$this->username}'";

            /* Executing query */
            $result = $db_connection->query($query);
            if (!$result) {
                die("Retrieval failed: ". $db_connection->error);
            } else {
                $result->data_seek(0);
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $this->id = $row['id'];
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

            $newPw = password_hash($this->password, PASSWORD_BCRYPT);
            /* Query */
            $sqlQuery = "update dogmatcher.user set firstName='{$this->firstName}', firstName='{$this->lastName}', username='{$this->username}', password='{$newPw}' where id='{$this->id}'";


            /* Executing query */
            $result = $db_connection->query($sqlQuery);
            if (!$result) {
                die("Inserting records failed. ". $db_connection->error);
            }

            /* Closing connection */
            $db_connection->close();
        }
    }
