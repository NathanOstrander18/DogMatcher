<?php
require("DogMatchResults.php");

//grab user from session after login
$userId = 2;

//add logic for dog selection
$dog = "Doggo";

//check if user already has taken the quiz. If so, change the user quiz answers/dog and call $quiz->update()

//If the user has not taken the quiz save the new quiz results
$quiz = new DogMatchResults($userId, $dog, $_POST['1question'], $_POST['2question'], $_POST['3question'], $_POST['4question'], $_POST['5question'], $_POST['6question']);
$quiz->save();
?>