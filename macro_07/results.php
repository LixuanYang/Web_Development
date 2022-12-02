<!doctype html>
<html>

  <head>
    <title>SpongeBob Quiz Results</title>
    <style>
    div{
      border: 1px solid black;
      box-sizing: border-box;
      height:40px;
      width:100%;
    }
    #sponge{
      background-color:yellow;

    }
    #patrick{
      background-color:pink;
    }
    #krab{
      background-color:red;
    }
    #squid{
      background-color:green;
    }

    </style>
  </head>

  <body>
    <h1>SpongeBob Quiz Results</h1>
    <hr>

    <?php
    $sponge= 0;
    $patrick=0;
    $krab= 0;
    $squid= 0;
    $file = getcwd().'/data/data.txt';
    $alldata = file_get_contents($file);
    $lines = explode("\n",$alldata);

    for ($i=0;$i<sizeof($lines);$i++){
      if($lines[$i]=='sponge'){
        $sponge+=1;
      }
      else if ($lines[$i]=='patrick'){
        $patrick+=1;
      }
      else if ($lines[$i]=='mrkrabs'){
        $krab+=1;
      }
      else if ($lines[$i]=='squidward'){
        $squid+=1;
      }
    }

    $count =sizeof($lines)-1;
    
    print "In total there have been $count quiz submissions.";
    $widthsponge = round((float)($sponge/$count),2)*100;
    $widthpatrick = round((float)($patrick/$count),2)*100;
    $widthkrab = round((float)($krab/$count),2)*100;
    $widthsquid = round((float)($squid/$count),2)*100;
    print "<div id='sponge' style=width:$widthsponge%>SpongeBob $widthsponge%</div>";
    print "<div id='patrick' style=width:$widthpatrick%>Patrick $widthpatrick%</div>";
    print "<div id='krab' style=width:$widthkrab%>Mr.Krabs $widthkrab%</div>";
    print "<div id='squid' style=width:$widthsquid%>Squidward $widthsquid%</div>";

    ?>
    <hr>
    <a href="macro07.php">Back to Quiz</a>
  </body>

</html>
