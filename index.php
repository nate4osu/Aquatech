<?php
  $from = $_POST['from'];
  $to = $_POST['to'];
  $plain_text = $_POST['plain'];

  header("Content-type: text/plain");

  if ($to == '2450745a6ebd9559db70@cloudmailin.net'){
    header("HTTP/1.0 200 OK");
    echo($plain_text);
    echo("hello Its works!");
  }else{
    header("HTTP/1.0 403 OK");
    echo('user not allowed here');
  }
  exit;
?>