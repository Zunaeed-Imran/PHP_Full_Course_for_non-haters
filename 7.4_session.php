<?php
// session input value Home page
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesion input value Home Page</title>
</head>
<body>
  <h2>This is Home page</h2><br>
  <a href="7.3_session.php">Go to Login Page</a><br>

  <form action="7.4_session.php" method="post">
    <input type="submit" name="logout" value="logout"><br>
  </form>

</body>
</html>

<?php

echo $_SESSION['username'] . '<br>';
echo $_SESSION['password'] . '<br>';

if(isset($_POST['logout'])){
  session_destroy();        // it will distroy the session and logout.
  header('location:7.3_session.php'); // after logout it take me to login page again.
}

?>