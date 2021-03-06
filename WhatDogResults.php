<?php
/**
 * Created by PhpStorm.
 * User: nathanostrander
 * Date: 4/15/18
 * Time: 7:53 PM
 */

    class WhatDogResults {
        protected $userId;
        protected $dog;
        protected $answer1;
        protected $answer2;
        protected $answer3;
        protected $answer4;
        protected $answer5;
        protected $answer6;
        protected $answer7;
        protected $answer8;
        protected $answer9;

        public function __construct($userId, $dog, $answer1, $answer2, $answer3, $answer4, $answer5, $answer6, $answer7, $answer8, $answer9) {
            $this->userId = $userId;
            $this->dog = $dog;
            $this->answer1 = $answer1;
            $this->answer2 = $answer2;
            $this->answer3 = $answer3;
            $this->answer4 = $answer4;
            $this->answer5 = $answer5;
            $this->answer6 = $answer6;
            $this->answer7 = $answer7;
            $this->answer8 = $answer8;
            $this->answer9 = $answer9;
        }

        public function save() {
            global $host, $user, $password, $database;
            require_once "dbLogin.php";

            /* Connecting to the database */
            /* Connecting to the database */
            $db_connection = mysqli_connect($host, $user, $password, $database);

			if (!$db_connection) {
                die("Can't connect to MySQL: ".mysqli_connect_error());
            }

			$img = $this->getImg();

            /* Query */
           // $sqlQuery = sprintf("insert into dogmatcher.whatDogResults (userId, dog, answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9) values ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
             //   $this->userId, $this->dog, $this->answer1, $this->answer2, $this->answer3, $this->answer4, $this->answer5, $this->answer6, $this->answer7, $this->answer8, $this->answer9);
			$stmt = $db_connection->prepare("insert into dogmatcher.whatDogResults (userId, dog, answer1, answer2, answer3, answer4, answer5,
			answer6, answer7, answer8, answer9, img) values ('{$this->userId}', '{$this->dog}', '{$this->answer1}', '{$this->answer2}',
			'{$this->answer3}', '{$this->answer4}', '{$this->answer5}', '{$this->answer6}', '{$this->answer7}', '{$this->answer8}', '{$this->answer9}', ?)");
			$null = NULL;
			$stmt->bind_param("b", $null);
			$stmt->send_long_data(0, file_get_contents($img));
            /* Executing query */
            $stmt->execute();

            /* Closing connection */
            //$db_connection->close();

            //return $result;
        }

        public function update() {
            global $host, $user, $password, $database;
            require_once "dbLogin.php";
             $db_connection = mysqli_connect($host, $user, $password, $database);

			if (!$db_connection) {
                die("Can't connect to MySQL: ".mysqli_connect_error());
            }

			$img = $this->getImg();
            /* Query */
            //$sqlQuery = "update dogmatcher.whatDogResults set dog='{$this->dog}', answer1='{$this->answer1}', answer2='{$this->answer2}', answer3='{$this->answer3}', answer4='{$this->answer4}', answer5='{$this->answer5}', answer6='{$this->answer6}', answer7='{$this->answer7}', answer8='{$this->answer8}', answer9='{$this->answer9}' where userId='{$this->userId}'";
			$stmt = $db_connection->prepare("update dogmatcher.whatDogResults set dog='{$this->dog}', answer1='{$this->answer1}', answer2='{$this->answer2}', answer3='{$this->answer3}',
			answer4='{$this->answer4}', answer5='{$this->answer5}',
			answer6='{$this->answer6}',answer7='{$this->answer7}',answer8='{$this->answer8}',answer9='{$this->answer9}', img = ? where userId='{$this->userId}'");
			$null = NULL;
			$stmt->bind_param("b", $null);
			$stmt->send_long_data(0, file_get_contents($img));
            /* Executing query */
			$stmt->execute();
            //if (!$result) {
             //   die("Inserting records failed. ");
            //}

            /* Closing connection */
           // $db_connection->close();
        }

        public function inDB() {
            global $host, $user, $password, $database;
            require_once "dbLogin.php";
            $db_connection = new mysqli($host, $user, $password, $database);
            if ($db_connection->connect_error) {
                die($db_connection->connect_error);
            }
            //grab user from session after login
            $query = "SELECT * FROM dogmatcher.whatDogResults WHERE userId='{$this->userId}'";
            /* Executing query */
            $result = $db_connection->query($query);
            if (!$result) {
                return false;
            } else {
                $result->data_seek(0);
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if($row) {
                    return true;
                } else {
                    return false;
                }

            }
        }

		public function getImg()
		{

			$img = "";
			if(!strcmp($this->dog,"Collie"))
			{
				$img = "images/collie.jpg";
			}
			else if(!strcmp($this->dog,"Golden Retriever"))
			{
				$img = "images/retriever.jpg";
			}
			else if(!strcmp($this->dog,"Husky"))
			{
				$img = "images/husky.jpg";
			}
			else if(!strcmp($this->dog,"German Shepherd"))
			{
				$img = "images/ger_shep.jpg";
			}
			else if(!strcmp($this->dog,"Beagle"))
			{
				$img = "images/beagle.jpg";
			}
			else if(!strcmp($this->dog,"Corgi"))
			{
				$img = "images/corgi.jpg";
			}
			return $img;
		}
    }
