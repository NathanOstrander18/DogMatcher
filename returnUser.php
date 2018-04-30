<?php
global $host, $user, $password, $database;
require "dbLogin.php";
require("DogMatchResults.php");
session_start();

/* Connecting to the database */
$db_connection = new mysqli($host, $user, $password, $database);
if ($db_connection->connect_error) {
	die($db_connection->connect_error);
}

//grab user from session after login
$userId = $_SESSION['user'];

$query = "SELECT * FROM dogmatcher.whatDogResults WHERE userId='{$userId}'";
/* Executing query */
$result = $db_connection->query($query);
if (!$result) {
    $whatDog = "";
} else {
    $result->data_seek(0);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $whatDog = $row['dog'];
}

$query = "SELECT * FROM dogmatcher.dogMatchResults WHERE userId='{$userId}'";
/* Executing query */
$result = $db_connection->query($query);
if (!$result) {
    $dogMatch = "";
} else {
    $result->data_seek(0);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $dogMatch = $row['dog'];
}





/* Closing connection */
$db_connection->close();
?>
<html>
<head>
    <meta charset="utf-8" />
    <!-- For responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic HTML5 Document" />
    <meta name="keywords" content="HTML5, Responsive"/>
    <title>Returning User</title>
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
	<ul>
		<li><a class="active" href="quizPortal.html">Home</a></li>
		<li><a href="login.html">Login</a></li>
		<li><a href="whatDogAreYouQuiz.html">What dog are you?</a></li>
		<li><a href="dogMatchQuiz.html">What dog is best for you?</a></li>
		<li><a href="returnUser.php">View your quiz results</a></li>
		<li><a href="data.php">View quiz data</a></li>
	</ul>
	<div class="column" style="text-align: center; background-color:#B8E0EA">

	    <!-- INSERT REAL LINK HERE-->
	    <form action="WhatDogAreYouQuiz.html" method="post">

	        <img src="images/dogPersonality.jpg" alt="Perfect Match" class="center-block" width = "200" height = "300">
	        <br>
			<?php
				if($whatDog == ""){
					echo "<h3 class='center-block'> Quiz Not Completed <h3>";
				} else {
					echo "<h3 class='center-block'> You are a ".$whatDog."! Unhappy With Results? <h3>";
				}
			?>
	        <input type="submit" id="button" class="subbut2 center-block" value = "Click Here to find out what kind of dog you are" /><br>
	    </form>

	</div>
	<div class="column" style="text-align: center; background-color:#FFB15E">

	    <!-- INSERT REAL LINK HERE-->
	    <form action="dogMatchQuiz.html" method="post">


	        <img src="images/mobileDog.jpg" alt="Perfect Match" class="center-block" width = "300" height = "220" >
	        <br>
			<?php
				if($dogMatch == ""){
					echo "<h3 class='center-block'> Quiz Not Completed <h3>";
				} else {
					echo "<h3 class='center-block'> Your perfect match is a ".$dogMatch."! Unhappy With Results? <h3>";
				}
			?>
	        <input type="submit" id="button2" class="subbut2 center-block" value = "Click Here to find out what kind of dog is best for you" /><br>
	    </form>
	</div>
</body>
</html>
