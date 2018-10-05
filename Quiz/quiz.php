<?php
  $USinput = $_POST["UScity"];
  $FranceInput = $_POST["FranceCity"];
  $ChinaInput = $_POST["ChinaCity"];
  $UKinput = $_POST["UKcity"];
  $JapanInput = $_POST["JapanCity"];

  $US = "<p>Question 1: What is the Capital of the United States</p><p>You answered: $USinput</p><p>Correct Answer: Washington D.C.</p><br>";
  $France = "<p>Question 2: What is the Capital of France</p><p>You answered: $FranceInput</p><p>Correct Answer: Paris</p><br>";
  $China = "<p>Question 3: What is the Capital of the China</p><p>You answered: $ChinaInput</p><p>Correct Answer: Beijing</p><br>";
  $UK = "<p>Question 4: What is the Capital of the United Kingdom</p><p>You answered: $UKinput</p><p>Correct Answer: London</p><br>";
  $Japan = "<p>Question 5: What is the Capital of Japan</p><p>You answered: $JapanInput</p><p>Correct Answer: Tokyo</p><br>";

  $correct = 0;

  if ($USinput == "Washington D.C."){
    $correct = $correct + 1;
  }

  if ($FranceInput == "Paris"){
    $correct = $correct + 1;
  }

  if ($ChinaInput == "Beijing"){
    $correct = $correct + 1;
  }

  if ($UKinput == "London"){
    $correct = $correct + 1;
  }

  if ($JapanInput == "Tokyo"){
    $correct = $correct + 1;
  }

  $score = 100 * ($correct / 5);
  $scorePhrase = "<p>You scored $correct correct</p><p>You scored $score%<p><br>";

  echo $US . $France . $China . $UK . $Japan . $scorePhrase;

?>
