<?php
// Index page

include '12_PHP_registration.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index page of registration form</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h2>Welcome to Registration Form</h2><br>
    UserName: <br>
    <input type="text" name="name"><br>
    Password: <br>
    <input type="password" name="password"><br>
    <input type="submit" name="register" value="register"><br>
  </form>
</body>
</html>

<?php

$user = $_REQUEST['name'];
$password = $_REQUEST['password'];


$sql = "INSERT INTO * `users` (id, name, password) values (null, $user, $password)";

if($_SERVER['REQUEST_METHOD' == 'POST']){
  mysqli_query($connection, $sql);
  echo 'You are Registered';
}

mysqli_close($connection);
?>