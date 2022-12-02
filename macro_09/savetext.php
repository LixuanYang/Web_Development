<?php

  $path = getcwd() . '/data';
  // security audit - make sure the user is logged in before making changes!
  if ($_COOKIE['loggedin'] == 'yes') {
    // if they are logged in make changes to the text files
    $ban = $_POST['banword'];
    $clear = $_POST['clear'];


    // put this into the text file
    file_put_contents($path.'/badword.txt', $ban);
    if ($clear != 'none'){
      file_put_contents($path.'/'.$clear.'.txt', '');
    }



    //add login info to adminlog file
    date_default_timezone_set('US/Eastern');
    $time = date("Y-m-d H:i:s",time());
    $username = $_COOKIE['admin'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $update = "$time,$username,adminupdate,$ip\n";
    file_put_contents($path.'/usagelog.txt', $update,FILE_APPEND);

    // send them back to the form
    header('Location: admin.php?confirmation=savedtext');
    exit();
  }
  else {
    // send them back to the admin page
    header('Location: admin.php?error=notloggedin');
    exit();
  }





 ?>
