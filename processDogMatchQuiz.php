<?php
require("DogMatchResults.php");
session_start();

//grab user from session after login
$userId = $_SESSION['user'];;

//add logic for dog selection
$dog = "";

$beagle = 0;
$collie = 0;
$husky = 0;
$retriever = 0;
$corgi = 0;
$german_shep = 0;

if(isset($_POST['1question'])){
  if($_POST['1question'] == "New to dog"){
  	$beagle++;
  }
  else if($_POST['1question'] == "Currently own a dog"){
  	$collie++;
  	$husky++;
  }
  else if($_POST['1question'] == "Owned a dog in the past"){
  	$retriever++;
  	$corgi++;
  }
}

if(isset($_POST['2question'])){
  if($_POST['2question'] == "An apartment"){
  	$corgi++;
  }
  else if($_POST['2question'] == "A house with a small yard"){
  	$husky++;
  }
  else if($_POST['2question'] == "A house with a large yard"){
  	$german_shep++;
  	$collie++;
  }
}

if(isset($_POST['3question'])){
  if($_POST['3question'] == "None"){
  	$corgi++;
  }
  else if($_POST['3question'] == "Small"){
  	$husky++;
  }
  else if($_POST['3question'] == "Medium"){
  	$german_shep++;
  	$collie++;
  }
  else if($_POST['3question'] == "Large"){
  	$retriever++;
  	$beagle++;
  }
}

if(isset($_POST['4question'])){
  if($_POST['4question'] == "Downtown"){
  	$retriever++;
  	$corgi++;
  }
  else if($_POST['4question'] == "Suburb or small town"){
  	$husky++;
  }
  else if($_POST['4question'] == "Rural retreat"){
  	$beagle++;
  }
}

if(isset($_POST['5question'])){
  if($_POST['5question'] == "Yes"){
  	$german_shep++;
  	$collie++;
  }
  else if($_POST['5question'] == "No"){
  	$corgi++;
  }
  else if($_POST['5question'] == "Usually"){
  	$husky++;
  	$retriever++;
  }
}

if(isset($_POST['6question'])){
  if($_POST['6question'] == "Not at all"){
  	$german_shep++;
  	$beagle++;
  }
  else if($_POST['6question'] == "10–20 hours"){
  	$husky++;
  }
  else if($_POST['6question'] == "20–40 hours"){
  	$retriever++;
  	$collie++;
  }
  else if($_POST['6question'] == "More than 40 hours"){
  	$corgi++;
  }
}

if($corgi >= $beagle && $corgi >= $german_shep && $corgi >= $husky && $corgi >= $retriever && $corgi >= $collie){
  echo '
<!DOCTYPE html>
<html>
<body>

<h2>You Should Get A Pembroke Welsh Corgi</h2>
<img src="images/corgi.jpg"/> <br></br>
<p> Originally bred to herd cattle, sheep, and horses, the Pembroke Welsh Corgi is an active and intelligent dog breed. Easy to train and eager to learn, Pembrokes are great with children and other pets, and you can find them in four different coat colors and markings.   </p>

</body>
</html>';
    $dog = "Corgi";

}else if($beagle >= $corgi && $beagle >= $german_shep && $beagle >= $husky && $beagle >= $retriever && $beagle >= $collie){
  echo '
<!DOCTYPE html>
<html>
<body>

<h2>You Should Get A Beagle</h2>
<img src="images/beagle.jpg" alt="Beagle"><br></br>
<p> Small, compact, and hardy, Beagles are active companions for kids and adults alike. Canines in this dog breed are merry and fun loving, but being hounds, they can also be stubborn and require patient, creative training techniques. Their noses guide them through life, and they’re never happier than when following an interesting scent. The Beagle originally was bred as a scenthound to track small game, mostly rabbits and hare. He is still used for this purpose in many countries, including the United States.       </p>

</body>
</html>';
    $dog = "Beagle";

}else if($german_shep >= $corgi && $german_shep >= $beagle && $german_shep >= $husky && $german_shep >= $retriever && $german_shep >= $collie){
  echo '
<!DOCTYPE html>
<html>
<body>

<h2>You Should Get A German Shepherd</h2>
<img src="images/ger_shep.jpg" alt="German Shepherd"><br></br>
<p> The German Shepherd Dog is one of America’s most popular dog breeds — for good reason. He’s an intelligent and capable working dog. His devotion and courage are unmatched. And he’s amazingly versatile, excelling at most anything he’s trained to do: guide and assistance work for the handicapped, police and military service, herding, search and rescue, drug detection, competitive obedience and, last but not least, faithful companion.  </p>

</body>
</html>';
    $dog = "German Shepherd";

}else if($husky >= $corgi && $husky >= $beagle && $husky >= $german_shep  && $husky >= $retriever && $husky >= $collie){
  echo '<!DOCTYPE html>
<html>
<body>

<h2>You Should Get A Siberian Husky</h2>
<img src="images/husky.jpg" alt="Husky"><br></br>
<p> The Siberian Husky is a beautiful dog breed with a thick coat that comes in a multitude of colors and markings. Their blue or multi-colored eyes and striking facial masks only add to the appeal of this breed, which originated in Siberia. It is easy to see why many are drawn to the Siberian’s wolf-like looks, but be aware that this athletic, intelligent dog can be independent and challenging for first-time dog owners.  </p>

</body>
</html>';
    $dog = "Husky";

}else if($retriever >= $corgi && $retriever >= $beagle && $retriever >= $german_shep  && $retriever >= $husky && $retriever >= $collie){

  echo '<!DOCTYPE html>
<html>
<body>

<h2>You Should Get A Golden Retriever</h2>
<img src="images/retriever.jpg" alt="Retriever"><br></br>
<p> The Golden Retriever is one of the most popular dog breeds in the U.S. The breed’s friendly, tolerant attitude makes him a fabulous family pet, and his intelligence makes him a highly capable working dog. Golden Retrievers excel at retrieving game for hunters, tracking, sniffing out drugs, and as therapy and assistance dogs. They’re also natural athletes, and do well in dog sports such as agility and competitive obedience.</p>

</body>
</html>';
    $dog = "Golden Retriever";

}else if($collie >= $corgi && $collie >= $beagle && $collie >= $german_shep  && $collie >= $husky && $collie >= $retriever ){

  echo '<!DOCTYPE html>
<html>
<body>

<h2>You Should Get A Collie</h2>
<img src="images/collie.jpg" alt="Collie"><br></br>
<p> The Collie dog breed is a native of Scotland, mostly of the Highland regions but also bred in the Scottish Lowlands and northern England, where she was used primarily as a herding dog. She is a sensitive and intelligent dog, known for her undying loyalty and amazing ability to foresee her owner’s needs. She is a great family companion, and is still a capable herding dog.</p>

</body>
</html>';
    $dog = "Collie";

}else{
  echo '<!DOCTYPE html>
<html>
<body>

<h2>You Should Get A Collie</h2>
<img src="images/collie.jpg" alt="Collie"><br></br>
<p> The Collie dog breed is a native of Scotland, mostly of the Highland regions but also bred in the Scottish Lowlands and northern England, where she was used primarily as a herding dog. She is a sensitive and intelligent dog, known for her undying loyalty and amazing ability to foresee her owner’s needs. She is a great family companion, and is still a capable herding dog.</p>

</body>
</html>';
    $dog = "Collie";
}



//check if user already has taken the quiz. If so, change the user quiz answers/dog and call $quiz->update()

//If the user has not taken the quiz save the new quiz results
$quiz = new DogMatchResults($userId, $dog, $_POST['1question'], $_POST['2question'], $_POST['3question'], $_POST['4question'], $_POST['5question'], $_POST['6question']);
$quiz->save();

?>
