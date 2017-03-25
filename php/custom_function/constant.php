<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $number = 10;
    $number = 1000;
    echo $number . "<br/>";
    // OUTPUT : 1000

    define("NAME", 1000);
    // NAME = 10 (IF U DEFINE IT AGAIN LIKE THAT IT WILL BECOME ERROR)
    echo NAME;
    // OUTPUT : 1000

     ?>
  </body>
</html>
