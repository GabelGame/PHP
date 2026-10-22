<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $name = 'AtomStore';

  $link = mysqli_connect($host, $user, $pass, $name);
  mysqli_query($link, "SET NAMES 'utf8'");

  $query = 'SELECT * FROM name';
  $res = mysqli_query($link, $query) or die(mysqli_error($link));
  var_dump($res);
?>