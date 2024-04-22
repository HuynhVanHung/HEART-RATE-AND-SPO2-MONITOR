<?php
  $conn = mysqli_connect(
      "localhost", 
      "admin", 
      "1", 
      "HTYT"
  );
  

// Check connection
if($conn === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
*/
?>