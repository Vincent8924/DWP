<?php
 
$connect = mysqli_connect("localhost","root","", "contact");

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
 
?>