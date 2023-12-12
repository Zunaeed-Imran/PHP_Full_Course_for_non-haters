<?php

$password = 'rifat27';

$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("rifat27", $hash)){
  echo 'Password is correct';
}else{
  echo 'Incorrect Password';
}

?>