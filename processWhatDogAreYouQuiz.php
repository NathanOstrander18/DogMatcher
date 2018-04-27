<?php
require("WhatDogResults.php");

//grab user from session after login
$userId = 1;

//add logic for dog selection
$dog = "Doggo";

//check if user already has taken the quiz. If so, change the user quiz answers/dog and call $quiz->update()

//If the user has not taken the quiz save the new quiz results
$quiz = new WhatDogResults($userId, $dog, $_POST['question1'], $_POST['question2'], $_POST['question3'], $_POST['question4'], $_POST['question4'], $_POST['question6'], $_POST['question7'], $_POST['question8'], $_POST['question9']);
$quiz->save();
?>