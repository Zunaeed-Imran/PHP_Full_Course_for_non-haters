<?php
// this is home page
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session Home Page</title>
</head>
<body>
  <a href="7_session.php">go to login page</a>
  <h2>Yo This is Home page</h2><br>
</body>
</html>

<?php

echo $_SESSION['name'] . '<br>';
echo $_SESSION['password'] . '<br>';


?>