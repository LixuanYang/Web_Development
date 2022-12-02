<!doctype html>
<html>
  <head>
    <title>Micro 06</title>
    <style>


    </style>
  </head>

  <body>
    <h1>Micro 06</h1>

    <?php

    $errormessage = $_GET['error'];
    if ($errormessage=='no_username'){
      print '<strong>Please enter the username!<strong>';
    }
    else if ($errormessage=='no_password'){
      print '<strong>Please enter the password!<strong>';
    }
    else if ($errormessage=='no_match'){
      print '<strong>The entered username/password is incorrect!<strong>';
    }
    else if ($errormessage=='loggedIn'){
      print '<strong>Welcome! You have successfully logged in!<strong>';
    }

     ?>
    <form action='micro06_process.php' method='POST'>
      Username:<input type='text' name='username'><br>
      Password:<input type='text' name='password'><br>
      <input type='submit'>
    </form>

  </body>

</html>
