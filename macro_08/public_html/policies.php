<?php
  // before we load the page we need to load in our 'config.php' file
  // this file contains PHP variables that our page will need to access,
  // such as the file path of the 'data' folder
  include('config.php');
?>
<!doctype html>
<html lang="en-us">
  <head>
    <title>Hogwarts School Management System</title>
    <link type="text/css" href="styles.css" rel="stylesheet" />
  </head>
  <body>
    <div id="container">
      <div id="leftcolumn">
        <img src="images/hogwarts_logo.png">
        <ul>
          <li><a href="index.php" class="navlink">Home</a></li>
          <li><a href="about.php" class="navlink">About</a></li>
          <li><a href="policies.php" class="navlink active">Policies</a></li>
          <li><a href="admin.php" class="navlink">Admin</a></li>
        </ul>
      </div>
      <div id="rightcolumn">
        <div id="header">
          About Our School
        </div>

        <?php

          // open the 'alert.txt' file
          $data = file_get_contents($file_path.'/alert.txt');

          // if it has contents generate an alert box
          if ( strlen($data) > 0 ) {
            print "<div id=\"alert\">$data</div>";
          }

         ?>


        <div id="content">
          <?php

            include($file_path."/policies.txt");

           ?>
        </div>
      </div>
    </div>
  </body>
</html>
