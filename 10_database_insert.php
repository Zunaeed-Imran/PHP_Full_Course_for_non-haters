<?php

$conn  = new mysqli('localhost', 'root', '', 'itlogiko');

try{
  $conn;
}catch(mysqli_sql_exception){
  echo 'could not connect';
}

?>