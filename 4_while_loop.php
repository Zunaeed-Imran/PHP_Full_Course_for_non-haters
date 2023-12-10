<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
    <label>Give Number to start loop</label>
    <input type="submit" name="stop">
  </form> 
</body>
</html>

<?php
$record  = 12;
$running = true;

while($running){
  if(isset($_GET['stop'])){
    $running = false;
  }
}

?>