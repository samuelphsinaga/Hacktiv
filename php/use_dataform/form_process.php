<?php
if (isset($_POST['submit'])) {
  echo "it works dude! <br/><br/>";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $name = ["samuel","partogi","hasudungan","sinaga"];

  $minimumlen = 5;

  if(strlen ($username) < $minimumlen ){
    echo "user name has to be longer than five words";
  }
  else {
    echo "wellcome " . $username;
    echo "<br/> Your password is " . $password;
  }

  if(!in_array($username, $name)){
    echo "<br/> Sorry you are not member";
  } else {
    echo "<br/>You are member, Wellcome.................";
  }

  }
 ?>
