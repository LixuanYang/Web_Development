<?php

  include('config.php');

  // security audit - make sure the user is logged in before making changes!
  if ($_COOKIE['loggedin'] == 'yes') {
    // if they are logged in make changes to the text files
    $homepage = $_POST['homepage'];
    $aboutpage = $_POST['aboutpage'];
    $policypage = $_POST['policypage'];
    $alertmessage = $_POST['alertmessage'];

    // put this into the text file
    file_put_contents($file_path.'/home.txt', $homepage);
    file_put_contents($file_path.'/about.txt', $aboutpage);
    file_put_contents($file_path.'/policies.txt', $policypage);
    file_put_contents($file_path.'/ALERT.txt', $alertmessage);

    //add login info to adminlog file
    date_default_timezone_set('US/Eastern');
    $time = date("Y-m-d H:i:s",time());
    $username = $_COOKIE['username'];
    $update = "$time,$username,update\n";
    file_put_contents($file_path.'/adminlog.txt', $update,FILE_APPEND);

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
