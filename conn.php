<?php
$conn = mysqli_connect("192.168.56.101","root","","basic_command");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
