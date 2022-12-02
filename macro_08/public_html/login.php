<?php


  // grab the username & password
  $username = $_POST['username'];
  $password = $_POST['password'];


  // make sure they entered something into both blanks
  if ($username && $password) {
    // access the 'teacheraccounts.txt' text file
    include('config.php');

    $data = explode("\n",file_get_contents($file_path.'/teacheraccounts.txt'));

    for ($i=0;$i<sizeof($data);$i++){

      $credentials = explode(",", $data[$i]);

      // check to make sure the username & password are correct
      if ($username == $credentials[0] && $password == $credentials[1]) {
        // login successful!

        // drop a cookie on the client computer
        setcookie('loggedin', 'yes');
        setcookie('username', $credentials[0]);
        setcookie('firstname', $credentials[2]);
        setcookie('lastname', trim($credentials[3]));

        //add login info to adminlog file
        date_default_timezone_set('US/Eastern');
        $time = date("Y-m-d H:i:s",time());
        $login = "$time,$username,login\n";
        file_put_contents($file_path.'/adminlog.txt', $login,FILE_APPEND);

        // send them back to the form
        header('Location: admin.php');
        exit();
      }
    }

    // send them back to the form
    header('Location: admin.php?error=incorrect');
    exit();



  }
  else {
    // send them back to the form
    header('Location: admin.php?error=missinginfo');
    exit();
  }

 ?>
