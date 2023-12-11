<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="4_while_loop.php" method="get">
    <label>Stop the loop or browser will crush</label>
    <input type="submit" name="stop" value="stop">
  </form> 
</body>
</html>

<?php

$record  = 0;
$running = true;

while($running){
  if(isset($_GET['stop'])){
    $running = false;
  }else{

    $record ++;
    echo $record . "<br>";
  }
}


?>