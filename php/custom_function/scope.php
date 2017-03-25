<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $x = "outside"; //global

    function show(){
      global $x;
      $x = "inside"; //local
    }

    echo $x;
    echo "<br/><br/>";
    //OUTPUT : outside

    show();
    echo $x;
    //OUTPUT : inside

     ?>
  </body>
</html>
