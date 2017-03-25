<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    function addNumber($number1, $number2){
      $sum = $number1 + $number2;
      return $sum;
    }
    $result = addNumber(500,500);
    $result = addNumber(10, $result);
    echo $result;
    echo "<br/>";

    $result = addNumber(500,500);
    $result = addNumber(10, $result);
    $result = addNumber(10, $result);
    $result = addNumber(10, $result);
    echo $result;
    echo "<br/>";
    
    $result = addNumber(500,500);
    $result = addNumber(10, $result);
    $result = addNumber(10, $result);
    $result = addNumber(10, $result);
    $result = addNumber(10, $result);
    $result = addNumber(10, $result);
    echo $result;

     ?>
  </body>
</html>
