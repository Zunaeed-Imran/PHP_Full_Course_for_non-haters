<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <h2>Age For Voter</h2><br>
    <label>Enter Age of the canditate</label><br>
    <input type="text" name="age"><br>
    <input type="submit" name="submit">
  </form> 
</body>
</html>

<?php
// example of if else

  $age = $_POST['age'];

  if($age >= 18){
    echo "Oh you are {$age} Year's Old you can Vote";
  }else{
    echo "Sorry you are not old enough you are just {$age} Year's old";
  }
?>