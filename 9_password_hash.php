<?php

$password = "rifat32";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;

?>