<?php
  require('connection.php');
  $result = $conn->query("DELETE FROM thong_so_do");
  echo $result;
  $conn->close();
?>