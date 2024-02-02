<?php
 
$connect = mysqli_connect("localhost","root","", "payment");

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
 
?>