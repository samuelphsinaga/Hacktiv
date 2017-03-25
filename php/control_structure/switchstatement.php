<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $finalscore = 65;

    switch($finalscore){
      case $finalscore < 65:
      echo "Your result is FAILD";
      break;
      case $finalscore < 75 :
      echo "Your result is C";
      break;
      case $finalscore < 85:
      echo "Your result is B";
      break;
      case $finalscore < 100:
      echo "Your result is A";
      break;
    }

     ?>
  </body>
</html>
