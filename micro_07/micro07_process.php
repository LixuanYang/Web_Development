<?php
$username = $_POST['username'];
$password = $_POST['password'];

$correctUsername = 'abc';
$correctPassword = '123';

$path = getcwd().'/data';

if (! $username or !$password){
  setcookie('loggedin','no');
  $val = "missing\n";
  file_put_contents($path.'/loginrecord.txt',$val,FILE_APPEND);
  header('Location:micro07.php?error=missing');
  exit();
}
else if ($username !=$correctUsername or $password!=$correctPassword){
  setcookie('loggedin','no');
  $val = "unsuccessful\n";
  file_put_contents($path.'/loginrecord.txt',$val,FILE_APPEND);
  header('Location:micro07.php?error=unsuccessful');
  exit();
}
else if ($username ==$correctUsername and $password==$correctPassword){
  setcookie('loggedin','yes');
  $val = "successful\n";
  file_put_contents($path.'/loginrecord.txt',$val,FILE_APPEND);
  header('Location:micro07.php?error=successful');
  exit();
}

 ?>
