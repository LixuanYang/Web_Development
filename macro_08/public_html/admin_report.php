<?php
  if ($_COOKIE['loggedin'] != 'yes') {
    // send them back to the admin page
    header('Location: admin.php?error=notloggedin');
    exit();
    }
  else {

    ?>
    <!DOCTYPE html>
    <html lang="en-us">
      <head>
        <title>Hogwarts School Management System</title>
      </head>
      <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
      }

</style>
      <body>
        <h2>Admin Report</h2>
        <table style='width:70%'>
          <tr>
            <th>Access Time</th>
            <th>Username</th>
            <th>Status</th>
          </tr>
      <?php
      include('config.php');
      $logdata = explode("\n",file_get_contents($file_path.'/adminlog.txt'));
      for ($i=0;$i<sizeof($logdata);$i++){
        $log = explode(",", $logdata[$i]);
        if (sizeof($log)==3){
          print "<tr><td>$log[0]</td><td>$log[1]</td><td>$log[2]</td></tr>";
        }
      }?>
    </table>
<?php
  }

 ?>

</body>
</html>
