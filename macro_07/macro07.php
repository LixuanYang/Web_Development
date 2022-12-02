<!doctype html>
<html>

  <head>
    <title>Assignment 07</title>
    <style>

    h1{
      font-family: cursive;
      color:blue;
      font-size: 40px;
    }
    div{
      font-size: 30px;
      font-family: cursive;
    }

    select{
      font-size: 15px;
      font-family: cursive;
      border-radius: 5px;
    }

    button{
      font-size: 15px;
      font-family: cursive;
      background-color: yellow;
      border-radius: 5px;
    }


    </style>
  </head>

  <body>
    <h1>SpongeBob Quiz</h1>
    <hr>
    <?php
    $error = $_GET['error'];
    $quizresponse = $_COOKIE['quizresponse'];
    if ($quizresponse){
      header('Location:macro07_process.php');
      exit();
    }
    else if ($error=='missinginfo'){
      print '<strong>Missing info!<strong>';
    }


    ?>
    <form action="macro07_process.php" method="POST">

      <div>
        What is your favorite food?<br>
        <select name="food">
          <option value="select a food">Select a food</option>
          <option value="spongebob">Popcorn</option>
          <option value="patrick">Ice Cream</option>
          <option value="mrkrabs">Burger</option>
          <option value="squidward">Bread</option>
        </select><br>
        What is your ideal job?<br>
        <select name="job">
          <option value="select a job">Select a job</option>
          <option value="spongebob">Teacher</option>
          <option value="patrick">Pianist</option>
          <option value="mrkrabs">Architecturer</option>
          <option value="squidward">Banker</option>
        </select><br>
        What is your favorite hobby?<br>
        <select name="hobby">
          <option value="select a hobby">Select a hobby</option>
          <option value="spongebob">skateboarding</option>
          <option value="patrick">Swimming</option>
          <option value="mrkrabs">Reading</option>
          <option value="squidward">Cooking</option>
        </select><br>
        What is your biggest fear?<br>
        <select name="fear">
          <option value="select a fear">Select a fear</option>
          <option value="spongebob">fearless</option>
          <option value="patrick">flying</option>
          <option value="mrkrabs">poor</option>
          <option value="squidward">spongebob</option>
        </select><br>
      </div>
      <br>
      <button>What Spongebob character am I?</button>
      <hr>

    </form>
    <a href="results.php">See Aggregate Results</a>
  </body>

</html>
