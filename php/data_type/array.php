<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $number = array(23,12,25,47,52,93,26);
    // echo $number[0];
    print_r($number);
    //OUTPUT : Array ( [0] => 23 [1] => 12 [2] => 25 [3] => 47 [4] => 52 [5] => 93 [6] => 26 )
    echo "<br>";

    $names = array('first_name' => 'samuel', 'last_name' => 'sinaga');
    print_r($names);
    // OUTPUT : Array ( [first_name] => samuel [last_name] => sinaga )
    echo "<br>";
    echo $names['first_name'] . " " . $names['last_name'];
    // OUTPUT : samuel sinaga


     ?>
  </body>
</html>
