<?php
$con = mysqli_connect("localhost","root","","bt");

// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}
// Change character set to utf8
mysqli_set_charset($con,"utf8");
?>	