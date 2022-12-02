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
        <title>Let's Chat Management System</title>
      </head>
      <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
      }

</style>
      <body>
        <h2>Usage Report</h2>
        <table style='width:70%'>
          <tr>
            <th>Access Time</th>
            <th>Username</th>
            <th>Status</th>
            <th>IP Address</th>
          </tr>
      <?php
      $path = getcwd() . '/data';
      $logdata = explode("\n",file_get_contents($path.'/usagelog.txt'));
      for ($i=0;$i<sizeof($logdata);$i++){
        $log = explode(",", $logdata[$i]);
        if (sizeof($log)==4){
          print "<tr><td>$log[0]</td><td>$log[1]</td><td>$log[2]</td><td>$log[3]</td></tr>";
        }
      }?>
    </table>
<?php
  }

 ?>

</body>
</html>
