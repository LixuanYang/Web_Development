<?php
  include('config.php');
  //add logout info to adminlog file
  date_default_timezone_set('US/Eastern');
  $username = $_COOKIE['username'];
  $time = date("Y-m-d H:i:s",time());
  $logout = "$time,$username,logout\n";
  file_put_contents($file_path.'/adminlog.txt', $logout, FILE_APPEND);

  print file_get_contents($file_path.'/adminlog.txt');
  // destory the cookies
  setcookie('loggedin', "", time()-3600);
  setcookie('username', "", time()-3600);
  setcookie('firstname', "", time()-3600);
  setcookie('lastname', "", time()-3600);



  // send back to the admin form
  header('Location: admin.php?action=loggedout');
  exit();

 ?>
