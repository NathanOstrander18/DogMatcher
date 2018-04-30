<?php
require("WhatDogResults.php");
session_start();
//grab user from session after login
$userId = $_SESSION['user'];

//add logic for dog selection
$dog = "";

$beagle = 0;
$collie = 0;
$husky = 0;
$retriever = 0;
$corgi = 0;
$german_shep = 0;

if(isset($_POST['question1'])){
  if($_POST['question1'] == "inside"){
  	$beagle++;
  }
  else if($_POST['question1'] == "outside"){
  	$collie++;
  	$husky++;
  }
  else if($_POST['question1'] == "social"){
  	$retriever++;
  	$corgi++;
  }
  else if($_POST['question1'] == "work"){
  	$german_shep++;
  }
}

if(isset($_POST['question2'])){
  if($_POST['question2'] == "beach"){
  	$corgi++;
  }
  else if($_POST['question2'] == "cold"){
  	$husky++;
  }
  else if($_POST['question2'] == "farm"){
  	$german_shep++;
  	$collie++;
  }
  else if($_POST['question2'] == "city"){
  	$retriever++;
  	$beagle++;
  }
}

if(isset($_POST['question3'])){
  if($_POST['question3'] == "attack"){
  	$german_shep++;
  	$husky++;
  }
  else if($_POST['question3'] == "tire"){
  	$collie++;
  }
  else if($_POST['question3'] == "smart"){
  	$retriever++;
  }
  else if($_POST['question3'] == "run"){
  	$corgi++;
  }
}

if(isset($_POST['question4'])){
  if($_POST['question4'] == "bar"){
  	$retriever++;
  	$corgi++;
  }
  else if($_POST['question4'] == "few"){
  	$husky++;
  }
  else if($_POST['question4'] == "netflix"){
  	$beagle++;
  }
  else if($_POST['question4'] == "prod"){
  	$german_shep++;
  	$collie++;
  }
}

if(isset($_POST['question5'])){
  if($_POST['question5'] == "muscle"){
  	$german_shep++;
  	$collie++;
  }
  else if($_POST['question5'] == "short"){
  	$corgi++;
  }
  else if($_POST['question5'] == "avg"){
  	$husky++;
  	$retriever++;
  }
  else if($_POST['question5'] == "fat"){
  	$beagle++;
  }
}

if(isset($_POST['question6'])){
  if($_POST['question6'] == "bahamas"){
  	$german_shep++;
  	$beagle++;
  }
  else if($_POST['question6'] == "ice"){
  	$husky++;
  }
  else if($_POST['question6'] == "eu"){
  	$retriever++;
  	$collie++;
  }
  else if($_POST['question6'] == "tokyo"){
  	$corgi++;
  }
}

if(isset($_POST['question7'])){
  if($_POST['question7'] == "drop"){
  	$husky++;
  	$german_shep++;
  }
  else if($_POST['question7'] == "ask"){
  	$retriever++;
  	$collie++;
  }
  else if($_POST['question7'] == "find"){
  	$corgi++;
  }
  else if($_POST['question7'] == "excuse"){
  	$beagle++;
  }
}

if(isset($_POST['question8'])){
  if($_POST['question8'] == "food"){
  	$beagle++;
  }else if($_POST['question8'] == "xmas"){
  	$husky++;
  }else if($_POST['question8'] == "fourth"){
  	$retriever++;
  	$german_shep++;
  }else if($_POST['question8'] == "april"){
  	$corgi++;
  	$collie++;
  }
}

if(isset($_POST['question9'])){
  if($_POST['question9'] == "pizza"){
  	$beagle++;
  }
  else if($_POST['question9'] == "salad"){
  	$corgi++;
  	$german_shep++;
  }
  else if($_POST['question9'] == "seafood"){
  	$corgi++;
  	$husky++;
  }
  else if($_POST['question9'] == "steak"){
  	$retriever++;
  }
}



if($corgi >= $beagle && $corgi >= $german_shep && $corgi >= $husky && $corgi >= $retriever && $corgi >= $collie){
	echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- For responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic HTML5 Document" />
    <meta name="keywords" content="HTML5, Responsive"/>
    <title>Second page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/frontStyle.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: antiquewhite;">

    <ul>
        <li><a class="active" href="quizPortal.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="whatDogAreYouQuiz.html">What dog are you?</a></li>
        <li><a href="dogMatchQuiz.html">What dog is best for you?</a></li>
        <li><a href="data.php">View quiz data</a></li>
    </ul>

<h2>You are a Pembroke Welsh Corgi</h2>
<img src="images/corgi.jpg"/> <br></br>
<p> Originally bred to herd cattle, sheep, and horses, the Pembroke Welsh Corgi is an active and intelligent dog breed. Easy to train and eager to learn, Pembrokes are great with children and other pets, and you can find them in four different coat colors and markings.   </p>

</body>
</html>';
    $dog = "Corgi";

}else if($beagle >= $corgi && $beagle >= $german_shep && $beagle >= $husky && $beagle >= $retriever && $beagle >= $collie){
	echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- For responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic HTML5 Document" />
    <meta name="keywords" content="HTML5, Responsive"/>
    <title>Second page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/frontStyle.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: antiquewhite;">
 <ul>
        <li><a class="active" href="quizPortal.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="whatDogAreYouQuiz.html">What dog are you?</a></li>
        <li><a href="dogMatchQuiz.html">What dog is best for you?</a></li>
        <li><a href="data.php">View quiz data</a></li>
    </ul>
<h2>You are a Beagle</h2>
<img src="images/beagle.jpg" alt="Beagle"><br></br>
<p> Small, compact, and hardy, Beagles are active companions for kids and adults alike. Canines in this dog breed are merry and fun loving, but being hounds, they can also be stubborn and require patient, creative training techniques. Their noses guide them through life, and they’re never happier than when following an interesting scent. The Beagle originally was bred as a scenthound to track small game, mostly rabbits and hare. He is still used for this purpose in many countries, including the United States.       </p>

</body>
</html>';
    $dog = "Beagle";

}else if($german_shep >= $corgi && $german_shep >= $beagle && $german_shep >= $husky && $german_shep >= $retriever && $german_shep >= $collie){
	echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- For responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic HTML5 Document" />
    <meta name="keywords" content="HTML5, Responsive"/>
    <title>Second page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/frontStyle.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: antiquewhite;">
 <ul>
        <li><a class="active" href="quizPortal.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="whatDogAreYouQuiz.html">What dog are you?</a></li>
        <li><a href="dogMatchQuiz.html">What dog is best for you?</a></li>
        <li><a href="data.php">View quiz data</a></li>
    </ul>
<h2>You are a German Shepherd</h2>
<img src="images/ger_shep.jpg" alt="German Shepherd"><br></br>
<p> The German Shepherd Dog is one of America’s most popular dog breeds — for good reason. He’s an intelligent and capable working dog. His devotion and courage are unmatched. And he’s amazingly versatile, excelling at most anything he’s trained to do: guide and assistance work for the handicapped, police and military service, herding, search and rescue, drug detection, competitive obedience and, last but not least, faithful companion.  </p>

</body>
</html>';
    $dog = "German Shepherd";

}else if($husky >= $corgi && $husky >= $beagle && $husky >= $german_shep  && $husky >= $retriever && $husky >= $collie){
	echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- For responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic HTML5 Document" />
    <meta name="keywords" content="HTML5, Responsive"/>
    <title>Second page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/frontStyle.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: antiquewhite;">
 <ul>
        <li><a class="active" href="quizPortal.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="whatDogAreYouQuiz.html">What dog are you?</a></li>
        <li><a href="dogMatchQuiz.html">What dog is best for you?</a></li>
        <li><a href="data.php">View quiz data</a></li>
    </ul>
<h2>You are a Siberian Husky</h2>
<img src="images/husky.jpg" alt="Husky"><br></br>
<p> The Siberian Husky is a beautiful dog breed with a thick coat that comes in a multitude of colors and markings. Their blue or multi-colored eyes and striking facial masks only add to the appeal of this breed, which originated in Siberia. It is easy to see why many are drawn to the Siberian’s wolf-like looks, but be aware that this athletic, intelligent dog can be independent and challenging for first-time dog owners.  </p>

</body>
</html>';
    $dog = "Husky";

}else if($retriever >= $corgi && $retriever >= $beagle && $retriever >= $german_shep  && $retriever >= $husky && $retriever >= $collie){

	echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- For responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic HTML5 Document" />
    <meta name="keywords" content="HTML5, Responsive"/>
    <title>Second page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/frontStyle.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: antiquewhite;">
 <ul>
        <li><a class="active" href="quizPortal.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="whatDogAreYouQuiz.html">What dog are you?</a></li>
        <li><a href="dogMatchQuiz.html">What dog is best for you?</a></li>
        <li><a href="data.php">View quiz data</a></li>
    </ul>
<h2>You are a Golden Retriever</h2>
<img src="images/retriever.jpg" alt="Retriever"><br></br>
<p> The Golden Retriever is one of the most popular dog breeds in the U.S. The breed’s friendly, tolerant attitude makes him a fabulous family pet, and his intelligence makes him a highly capable working dog. Golden Retrievers excel at retrieving game for hunters, tracking, sniffing out drugs, and as therapy and assistance dogs. They’re also natural athletes, and do well in dog sports such as agility and competitive obedience.</p>

</body>
</html>';
    $dog = "Golden Retriever";

}else if($collie >= $corgi && $collie >= $beagle && $collie >= $german_shep  && $collie >= $husky && $collie >= $retriever ){

	echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- For responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic HTML5 Document" />
    <meta name="keywords" content="HTML5, Responsive"/>
    <title>Second page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/frontStyle.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: antiquewhite;">
 <ul>
        <li><a class="active" href="quizPortal.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="whatDogAreYouQuiz.html">What dog are you?</a></li>
        <li><a href="dogMatchQuiz.html">What dog is best for you?</a></li>
        <li><a href="data.php">View quiz data</a></li>
    </ul>
<h2>You are a Collie</h2>
<img src="images/collie.jpg" alt="Collie"><br></br>
<p> The Collie dog breed is a native of Scotland, mostly of the Highland regions but also bred in the Scottish Lowlands and northern England, where she was used primarily as a herding dog. She is a sensitive and intelligent dog, known for her undying loyalty and amazing ability to foresee her owner’s needs. She is a great family companion, and is still a capable herding dog.</p>

</body>
</html>';
    $dog = "Collie";

}else{
	echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!-- For responsive page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Basic HTML5 Document" />
    <meta name="keywords" content="HTML5, Responsive"/>
    <title>Second page</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/frontStyle.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: antiquewhite;">
 <ul>
        <li><a class="active" href="quizPortal.html">Home</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="whatDogAreYouQuiz.html">What dog are you?</a></li>
        <li><a href="dogMatchQuiz.html">What dog is best for you?</a></li>
        <li><a href="data.php">View quiz data</a></li>
    </ul>
<h2>You are a Collie</h2>
<img src="images/collie.jpg" alt="Collie"><br></br>
<p> The Collie dog breed is a native of Scotland, mostly of the Highland regions but also bred in the Scottish Lowlands and northern England, where she was used primarily as a herding dog. She is a sensitive and intelligent dog, known for her undying loyalty and amazing ability to foresee her owner’s needs. She is a great family companion, and is still a capable herding dog.</p>

</body>
</html>';
    $dog = "Collie";
}

//check if user already has taken the quiz. If so, change the user quiz answers/dog and call $quiz->update()

//If the user has not taken the quiz save the new quiz results
$quiz = new WhatDogResults($userId, $dog, $_POST['question1'], $_POST['question2'], $_POST['question3'], $_POST['question4'], $_POST['question5'], $_POST['question6'], $_POST['question7'], $_POST['question8'], $_POST['question9']);
$quiz->save();



?>
