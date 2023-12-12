<?php
// this is login page
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
  <a href="7.2_session.php">go to home page</a><br>
    <h2>Yo This is Login page</h2><br>  
</body>
</html>

<?php

$_SESSION['name'] = 'Imran';
$_SESSION['password'] = 'soup21';


  echo $_SESSION['name'] . '<br>';
  echo $_SESSION['password'] . '<br>';

?>