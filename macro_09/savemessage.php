<?php
$path = getcwd() . '/data';

  // grab data from the client
  $message = $_POST['message'];
  $nickname = $_POST['nickname'];
  $chatroom = $_POST['chatroom'];

  // get file path


  //validate message
  $valid_msg = preg_replace("/[^a-zA-Z0-9'!@#$%^&*()\"?.,]/", "", $message);

  if (strlen($valid_msg)<1){
    print "short";
    exit();
  }

  //check bad words
  $badwords = file_get_contents($path.'/badword.txt');
  $bad_arr = explode(' ',$badwords);

  for ($i=0;$i<sizeof($bad_arr);$i++){
    $needle = $bad_arr[$i];

    if(strpos($valid_msg,$needle)!==false){

      print "bad";
      exit();
    }
  }


  file_put_contents($path . "/${chatroom}.txt", "$nickname : $valid_msg\n", FILE_APPEND);

  // tell the client that we are done
  print "ok";

 ?>
