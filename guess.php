<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guessing Game for Elena Semyonova</title>
</head>
<body>
  <h1>Welcome to my guessing game</h1>
  <?php
  //$_GET['guess'] = null;
  $guess = 42;
  if (!isset($_GET['guess'])) $answer = "Missing guess parameter";
  elseif (strlen($_GET['guess']) < 1) $answer = "Your guess is too short";
  elseif (!is_numeric($_GET['guess']))  $answer = "Your guess is not a number";
  elseif ($_GET['guess'] < $guess) $answer =  "Your guess is too low";
  elseif ($_GET['guess'] > $guess) $answer = "Your guess is too high";
  else $answer = "Congratulations - You are right";
  echo $answer;
  ?>
</body>
</html>