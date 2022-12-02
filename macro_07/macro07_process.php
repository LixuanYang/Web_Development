<?php

  // grab the incoming data from the form
  $food = $_POST['food'];
  $job = $_POST['job'];
  $hobby = $_POST['hobby'];
  $fear = $_POST['fear'];



  if($food=="select a food" or $job=="select a job" or $hobby=="select a hobby" or $fear=="select a fear"){
    header('Location:macro07.php?error=missinginfo');
    exit();
  }

  $prevresult = $_COOKIE['quizresponse'];

  // compute who earned the most points
  $sponge = 0;
  $patrick = 0;
  $krab  = 0;
  $squid  = 0;
  if ($food == "spongebob") {
    $sponge += 1;
  }
  else if ($food == "patrick") {
    $patrick += 1;
  }
  else if ($food == "mrkrabs") {
    $krab += 1;
  }
  else if ($food == "squidward"){
    $squid += 1;
  }


  if ($job == "spongebob") {
    $sponge += 1;
  }
  else if ($job == "patrick") {
    $patrick += 1;
  }
  else if ($job == "mrkrabs") {
    $krab += 1;
  }
  else if ($job == "squidward"){
    $squid += 1;
  }


  if ($hobby == "spongebob") {
    $sponge += 1;
  }
  else if ($hobby == "patrick") {
    $patrick += 1;
  }
  else if ($hobby == "mrkrabs") {
    $krab += 1;
  }
  else if ($hobby == "squidward"){
    $squid += 1;
  }


  if ($fear == "spongebob") {
    $sponge += 1;
  }
  else if ($fear == "patrick") {
    $patrick += 1;
  }
  else if ($fear == "mrkrabs") {
    $krab += 1;
  }
  else if ($fear == "squidward"){
    $squid += 1;
  }

  if (!$prevresult){
  if ($sponge >= $patrick && $sponge >= $krab && $sponge >= $squid) {
    setcookie('quizresponse','SpongeBob SquarePants;07images/spongebob.jpg');
    $img = '07images/spongebob.jpg';
    $character='SpongeBob SquarePants';
    $path = getcwd().'/data';
    $val = "sponge\n";
    file_put_contents($path.'/data.txt',$val,FILE_APPEND);



  }
  else if ($patrick > $sponge && $patrick >= $krab && $patrick >= $squid) {
    setcookie('quizresponse','Patrick Star;07images/patrick.png');
    $img = '07images/patrick.png';
    $character='Patrick Star';
    $path = getcwd().'/data';
    $val = "patrick\n";
    file_put_contents($path.'/data.txt',$val,FILE_APPEND);



  }
  else if ($krab > $sponge && $krab > $patrick && $krab >= $squid) {
    setcookie('quizresponse','Mr.Krabs;07images/mrkrabs.jpg');
    $img = '07images/mrkrabs.jpg';
    $character='Mr.Krabs';
    $path = getcwd().'/data';
    $val = "mrkrabs\n";
    file_put_contents($path.'/data.txt',$val,FILE_APPEND);



  }
  else if ($squid>$sponge && $squid>$patrick && $squid>$krab){
    setcookie('quizresponse','Squidward Tentacles;07images/squidward.jpg');
    $img = '07images/squidward.jpg';
    $character='Squidward Tentacles';
    $path = getcwd().'/data';
    $val = "squidward\n";
    file_put_contents($path.'/data.txt',$val,FILE_APPEND);
  }
}
  ?>
<!doctype html>
<html lang="en-us">
  <head>
    <title>Results</title>
    <style>
    img{
      display:block;
      margin-left: auto;
      margin-right:auto;
    }

    p{
      text-align: center;
      font-size: 30px;
      font-family: cursive;
    }

    button{
      display:block;
      margin-left: auto;
      margin-right:auto;
      font-size: 20px;
      font-family: cursive;
      border-radius: 5px;
    }
    </style>
  </head>
  <body>
    <h1>Quiz Result</h1>
    <?php

    if($prevresult){
      $character = explode(';',$prevresult)[0];
      $img = explode(';',$prevresult)[1];
    }

    print "<p>You are $character!</p>";
    print "<img src=$img>";

    ?>

    <a href="clearcookie.php">
    <button>Try Again</button>
    </a>
    <hr>
    <a href="results.php">See Aggregate Results</a>
  </body>
</html>
