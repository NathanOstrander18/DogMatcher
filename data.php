<?php
global $host, $user, $password, $database;
require "dbLogin.php";

$beagle = 0;
$collie = 0;
$husky = 0;
$retriever = 0;
$corgi = 0;
$german_shep = 0;

/* Connecting to the database */
$db_connection = new mysqli($host, $user, $password, $database);
if ($db_connection->connect_error) {
	die($db_connection->connect_error);
}

$sqlQuery = "SELECT * FROM dogmatcher.whatDogResults WHERE dog='Beagle'";
$result = $db_connection->query($sqlQuery);
$beagle = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.whatDogResults WHERE dog='Collie'";
$result = $db_connection->query($sqlQuery);
$collie = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.whatDogResults WHERE dog='Husky'";
$result = $db_connection->query($sqlQuery);
$husky = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.whatDogResults WHERE dog='Golden Retriever'";
$result = $db_connection->query($sqlQuery);
$retriever = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.whatDogResults WHERE dog='Corgi'";
$result = $db_connection->query($sqlQuery);
$corgi = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.whatDogResults WHERE dog='German Shepherd'";
$result = $db_connection->query($sqlQuery);
$german_shep = $result->num_rows;


$dataPoints1 = array(
	array("label"=> "Beagle", "y"=> $beagle),
	array("label"=> "Collie", "y"=> $collie),
	array("label"=> "Husky", "y"=> $husky),
	array("label"=> "Retriever", "y"=> $retriever),
	array("label"=> "Corgi", "y"=> $corgi),
	array("label"=> "German Shepherd", "y"=> $german_shep)
);

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Beagle'";
$result = $db_connection->query($sqlQuery);
$beagle = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Collie'";
$result = $db_connection->query($sqlQuery);
$collie = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Husky'";
$result = $db_connection->query($sqlQuery);
$husky = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Golden Retriever'";
$result = $db_connection->query($sqlQuery);
$retriever = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Corgi'";
$result = $db_connection->query($sqlQuery);
$corgi = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='German Shepherd'";
$result = $db_connection->query($sqlQuery);
$german_shep = $result->num_rows;


$dataPoints2 = array(
	array("label"=> "Beagle", "y"=> $beagle),
	array("label"=> "Collie", "y"=> $collie),
	array("label"=> "Husky", "y"=> $husky),
	array("label"=> "Retriever", "y"=> $retriever),
	array("label"=> "Corgi", "y"=> $corgi),
	array("label"=> "German Shepherd", "y"=> $german_shep)
);

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Beagle'";
$result = $db_connection->query($sqlQuery);
$beagle = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Collie'";
$result = $db_connection->query($sqlQuery);
$collie = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Husky'";
$result = $db_connection->query($sqlQuery);
$husky = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Golden Retriever'";
$result = $db_connection->query($sqlQuery);
$retriever = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='Corgi'";
$result = $db_connection->query($sqlQuery);
$corgi = $result->num_rows;

$sqlQuery = "SELECT * FROM dogmatcher.dogMatchResults WHERE dog='German Shepherd'";
$result = $db_connection->query($sqlQuery);
$german_shep = $result->num_rows;


$dataPoints2 = array(
	array("label"=> "Beagle", "y"=> $beagle),
	array("label"=> "Collie", "y"=> $collie),
	array("label"=> "Husky", "y"=> $husky),
	array("label"=> "Retriever", "y"=> $retriever),
	array("label"=> "Corgi", "y"=> $corgi),
	array("label"=> "German Shepherd", "y"=> $german_shep)
);

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

let whatDogPieChart = new CanvasJS.Chart("whatDogPieChartContainer", {
	animationEnabled: true,
	backgroundColor: "antiquewhite",
	// exportEnabled: true,
	title:{
		text: "What Dog Are You Quiz Results"
	},
	data: [{
		type: "pie",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
whatDogPieChart.render();

let dogMatchPieChart = new CanvasJS.Chart("dogMatchPieChartContainer", {
	animationEnabled: true,
	backgroundColor: "antiquewhite",
	// exportEnabled: true,
	title:{
		text: "Best Fit Dog Quiz Results"
	},
	data: [{
		type: "pie",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
dogMatchPieChart.render();

}
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="mainstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="whatDogPieChartContainer" style="width: 45%; height: 300px;display: inline-block;"></div>
	<div id="dogMatchPieChartContainer" style="width: 45%; height: 300px;display: inline-block;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
