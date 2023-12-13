<?php
// view page. 
// take data from example practice 10_database_insert.php page.

include '10_database_insert.php';

$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);


// simple way to show all the row using while loop.
while($row = mysqli_fetch_assoc($result)){  
  echo $row['id'] . "<br>";
  echo $row['user'] . "<br>";
  echo $row['password'] . "<br>";
}

?>