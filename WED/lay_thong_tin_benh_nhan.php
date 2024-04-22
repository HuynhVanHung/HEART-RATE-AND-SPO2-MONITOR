<?php
  require('connection.php');

  $cccd = $_GET['cccd'];
  if(!isset($cccd) || $cccd == ''){
    $cccd = -1;
  }

  $result = $conn->query("SELECT * FROM benh_nhan where cccd = ".$cccd." LIMIT 1");
  $data = [];
  while ($row = mysqli_fetch_array($result)) {  
    array_push($data, [
      'cccd' => $row['cccd'],
      'ho_ten' => $row['ho_ten'],
      'ngay_sinh' => $row['ngay_sinh'],
      'gioi_tinh' => $row['gioi_tinh'],
    ]);
  } 
  echo json_encode($data);
  $result->free_result();
  $conn->close();
?>