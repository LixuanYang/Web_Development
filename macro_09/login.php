<?php


  // grab the username & password
  $username = $_POST['adminname'];
  $password = $_POST['adminpassword'];


  // make sure they entered something into both blanks
  if ($username && $password) {
    // access the 'teacheraccounts.txt' text file
    $path = getcwd() . '/data';

    $data = explode("\n",file_get_contents($path.'/teacheraccounts.txt'));

    for ($i=0;$i<sizeof($data);$i++){

      $credentials = explode(",", $data[$i]);

      // check to make sure the username & password are correct
      if ($username == $credentials[0] && $password == $credentials[1]) {
        // login successful!

        // drop a cookie on the client computer
        setcookie('loggedin', 'yes');
        setcookie('admin', $username);


        //add login info to adminlog file
        date_default_timezone_set('US/Eastern');
        $time = date("Y-m-d H:i:s",time());
        $ip = $_SERVER['REMOTE_ADDR'];
        $adminlogin = "$time,$username,adminlogin,$ip\n";
        file_put_contents($path.'/usagelog.txt', $adminlogin,FILE_APPEND);

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
