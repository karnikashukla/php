<?php
$conn = mysqli_connect("localhost:3308","root","","user");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
   #echo "Connected successfully..";
}
?>