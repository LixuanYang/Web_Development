<?php

  $path = getcwd() . '/data';
  if ($_POST['nickname']){
    //add user login info to usagelog file
    date_default_timezone_set('US/Eastern');
    $time = date("Y-m-d H:i:s",time());
    $username = $_POST['nickname'];
    $chatroom = $_POST['chatroom'];
    $ip_user = $_SERVER['REMOTE_ADDR'];
    $useract = "$time,$username,$chatroom,$ip_user\n";
    file_put_contents($path.'/usagelog.txt', $useract,FILE_APPEND);

  }
  else{
    header('Location: userlogin.html');
    exit();
  }





 ?>
