<?php
  $connect = mysqli_connect('sql300.infinityfree.com', 'if0_36051034', 'x5GBOGmlHh ', 'if0_36051034_cars');
  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  }
?>