<?php
$username = $_POST['username'];
$password = $_POST['password'];

$correctUsername = 'pikachu';
$correctPassword = 'pokemon';

if (! $username){
  header('Location:micro06.php?error=no_username');
  exit();
}
else if (!$password){
  header('Location:micro06.php?error=no_password');
  exit();
}
else if ($username !=$correctUsername or $password!=$correctPassword){
  header('Location:micro06.php?error=no_match');
  exit();
}
else if ($username ==$correctUsername and $password==$correctPassword){
  header('Location:micro06.php?error=loggedIn');
  exit();
}


 ?>
