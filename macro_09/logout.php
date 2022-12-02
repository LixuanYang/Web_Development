<?php
  $path = getcwd() . '/data';
  //add logout info to adminlog file
  date_default_timezone_set('US/Eastern');
  $username = $_COOKIE['admin'];
  $time = date("Y-m-d H:i:s",time());
  $ip = $_SERVER['REMOTE_ADDR'];
  $logout = "$time,$username,adminlogout,$ip\n";
  file_put_contents($path.'/usagelog.txt', $logout, FILE_APPEND);
  // destory the cookies
  setcookie('loggedin', 'no');
  setcookie('admin', "", time()-3600);

  // send back to the admin form
  header('Location: index.html');
  exit();

 ?>
