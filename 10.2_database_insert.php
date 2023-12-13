<?php
include '10_database_insert.php';

$sql = "INSERT INTO `users` (id, user, password) values (null, 'ranas', 'rifat12')";
mysqli_query($conn, $sql); // it will connect databse and insert command

mysqli_close($conn); // every time after input data this function will colse database connection.
?>