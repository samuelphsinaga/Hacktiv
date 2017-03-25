<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    function say_something(){
      echo "HELLO WORLD";
    }

    function calculator(){
      echo 247 + 901;
    }

    function init(){
      say_something();
      echo "<br/>";
      calculator();
    }
    init()

     ?>
  </body>
</html>
