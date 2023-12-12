<?php
// session input value login page
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session input value login page</title>
</head>
<body>
  <form action="7.3_session.php" method="post">
   <h2>This is Login Page</h2><br>
   <a href="7.4_session.php">Go to Home page</a><br>
   <input type="text" name="name"><br>
   <input type="password" name="password"><br>
   <input type="submit" name="login" value="login"><br>

  </form>
</body>
</html>

<?php

if(isset($_POST['login'])){
  $_SESSION['username'] = $_POST['name'];
  $_SESSION['password'] = $_POST['password'];

  echo $_SESSION['username'] . '<br>';
  echo $_SESSION['password'] . '<br>';
}

?>