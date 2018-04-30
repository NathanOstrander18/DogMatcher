<?php

	require_once "dblogin.php";


	/* Connecting to the database */
	$db_connection = new mysqli($host, $user, $password, $database);
	if ($db_connection->connect_error) {
		die($db_connection->connect_error);
	} else
	$username = trim(($_POST['username']));
	$password = trim(sha1(trim($_POST['password'])));

	/* Query */
	$query = "select * from user where username = '{$username}' AND password = '{$password}'";

	/* Executing query */
	$result = $db_connection->query($query);
	//
	if (!$result) {
		//echo "<h3>User Not Found. Try again.</h3>";
		echo "{$username} {$password}";
	} else {
		$row = $result->fetch_array(MYSQLI_ASSOC);
		//echo $row['id'];
		session_start();
		$_SESSION["user"] = $row['id'];
		//echo $_SESSION["user"];
		echo "<script>window.location.replace(\"returnUser.php\");</script>";

	}

	/* Closing connection */
	$db_connection->close();
?>
<form action="login.html" method="post">
			<input type="submit" value = "Return to Main Menu" />
 </form><?php

	require_once "dblogin.php";


	/* Connecting to the database */
	$db_connection = new mysqli($host, $user, $password, $database);
	if ($db_connection->connect_error) {
		die($db_connection->connect_error);
	} else
	$username = trim(($_POST['username']));
	$password = trim(sha1(trim($_POST['password'])));

	/* Query */
	$query = "select * from user where username = '{$username}' AND password = '{$password}'";

	/* Executing query */
	$result = $db_connection->query($query);
	//
	if (!$result) {
		echo "<h3>User Not Found. Try again.</h3>";
		//echo "{$username} {$password}";
	} else {
		$row = $result->fetch_array(MYSQLI_ASSOC);
		//echo $row['id'];
		if($password!=$row['password'])
		{
			echo "<h3>User Not Found. Try again.</h3>";
		}
		else
		{
			session_start();
			$_SESSION["user"] = $row['id'];
			//echo $_SESSION["user"];
			echo "<script>window.location.replace(\"returnUser.php\");</script>";
		}

	}

	/* Closing connection */
	$db_connection->close();
?>
<form action="login.html" method="post">
			<input type="submit" value = "Return to Main Menu" />
 </form>
