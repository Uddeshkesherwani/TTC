<?php

$con = mysqli_connect("localhost","root","","ticketing_tool");

if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

?>