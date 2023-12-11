<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="5_isset.php" method="post"> <!-- it won't work if i don't set action -->
    <h3>Enter user name and password</h3><br>
    <input type="text" name="username"><br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="login"><br>  <!-- value is for display name -->
  </form>
</body>
</html>

<?php

foreach($_POST as $kay => $value){
  echo "{$key} = {$value} <br>";
}


?>