
<!doctype html>
<html>
  <head>
    <title>Micro 07</title>
    <style>


    </style>
  </head>

  <body>
    <h1>Micro 07</h1>



    <?php
    $error = $_GET['error'];
    $cookie = $_COOKIE['loggedin'];
    if ($error=='missing'){
      print '<strong>Please filled out the missing information!<strong>';
      
    }
    else if ($error=='unsuccessful'){
      print '<strong>The entered information is incorrect!<strong>';

    }

    if ($cookie=='yes'){
      print '<strong>You are logged in!<strong>';

    }
    else{?>
      <form action='micro07_process.php' method='POST'>
        Username:<input type='text' name='username'><br>
        Password:<input type='text' name='password'><br>
        <input type='submit'>
      </form>
      <?php

    }?>









  </body>

</html>
