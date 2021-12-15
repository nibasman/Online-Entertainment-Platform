<?php
  $conn = mysqli_connect("localhost","root","","user");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
