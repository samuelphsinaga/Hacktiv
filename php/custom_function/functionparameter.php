<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    function greeting($message){
      echo $message . "<br/>";
    }
    greeting("good morning");

    function calculate($first, $second){
      $sum =  $first + $second;
      echo "hasil penjumlahan dari " . $first . " + " . $second . " adalah " . $sum;
    }
    calculate(729,173);

     ?>
  </body>
</html>
