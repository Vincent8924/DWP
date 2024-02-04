<?php
 
$connect = mysqli_connect("localhost","root","", "hotel");

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
 
?>
