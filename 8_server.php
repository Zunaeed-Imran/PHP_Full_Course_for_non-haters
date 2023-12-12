<?php

foreach($_SERVER as $key => $value){
  echo "{$key} = {$value} <br>";
}

// with server super global we can see everything 
// for now see the `request mathod` and `PHP_SELF`
?>