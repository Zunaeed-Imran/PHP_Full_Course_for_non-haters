<?php
// database connect page.

$conn  = new mysqli('localhost', 'root', '', 'itlogiko');

try{
  $conn;
  echo 'connected';
}catch(mysqli_sql_exception){
  echo 'could not connect';
}

?>