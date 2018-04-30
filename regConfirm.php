<?php

	require_once "dblogin.php";


	/* Connecting to the database */
	$db_connection = new mysqli($host, $user, $password, $database);
	if ($db_connection->connect_error) {
		die($db_connection->connect_error);
	} else
	$firstname =  trim($_POST['firstname']);
	$lastname =  trim($_POST['lastname']);
	$username = trim(($_POST['username']));
	$password = trim(sha1(trim($_POST['password'])));

	/* Query */
	$query = "insert into user (firstName,lastName, username, password) values ('{$firstname}','{$lastname}','{$username}','{$password}')";
	/* Executing query */
	$result = $db_connection->query($query);
	if (!$result) {
		die("Insertion failed: " . $db_connection->error);
	} else {
		echo  "<h3>New User Registered</h3>";

	}

	/* Closing connection */
	$db_connection->close();
?>
<form action="quizPortal.html" method="post">
			<input type="submit" value = "Continue to Quiz Portal" />
</form>
