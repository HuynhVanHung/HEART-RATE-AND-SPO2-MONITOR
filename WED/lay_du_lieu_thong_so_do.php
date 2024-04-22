<?php
  require('connection.php');
  $result = $conn->query("SELECT * FROM `thong_so_do` WHERE id > ( SELECT max(id) FROM thong_so_do)-20");
  $data = [];
  while ($row = mysqli_fetch_array($result)) {  
    array_push($data, [
      'id' => $row['id'],
      'nhip_tim' => $row['nhip_tim'],
      'nong_do_oxy' => $row['nong_do_oxy'],
      'thoi_gian' => $row['thoi_gian'],
    ]);
  } 

   // add random data
   //$d1 = rand(20, 50);
   //$d2 = rand(10, 60);
   //$conn->query("insert into thong_so_do(nhip_tim, nong_do_oxy) values ($d1,$d2)");

  echo json_encode($data);
  $result->free_result();
  $conn->close();
?>