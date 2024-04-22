<?php
  require('connection.php');
  $result = $conn->query("SELECT * FROM `thong_so_do` ORDER BY thoi_gian DESC LIMIT 1");
  $data = [];
  while ($row = mysqli_fetch_array($result)) {  
    $data = [
      'id' => $row['id'],
      'nhip_tim' => $row['nhip_tim'],
      'nong_do_oxy' => $row['nong_do_oxy'],
      'thoi_gian' => $row['thoi_gian'],
    ];
  } 
  echo json_encode($data);
  $result->free_result();
  $conn->close();
?>