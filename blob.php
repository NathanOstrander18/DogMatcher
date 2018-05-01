<?php
	$fp = fopen("bransonDoggo.jpg", "r");
	while (!feof($fp)) 
	{
		$stmt->send_long_data(0, fread($fp, 16776192));
	}
	echo "hello";
?>