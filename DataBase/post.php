<?php
  $res = mysqli_query($link, 'SELECT * FROM name');

  $query = 'SELECT * FROM name';
  $one = mysqli_query($link, $query);
?>