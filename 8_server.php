<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name"><br>
    <input type="submit" name="login"><br>
  </form>
</body>
</html>

<?php

// foreach($_SERVER as $key => $value){
//   echo "{$key} = {$value} <br>";
// }

if($_SERVER['REQUEST_METHOD' == 'POST']){
  echo"Hi";
}





// with server super global we can see everything 
// for now see the `request mathod` and `PHP_SELF`
?>