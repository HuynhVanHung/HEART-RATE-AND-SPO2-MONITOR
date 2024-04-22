<?php
  require('connection.php');
  $result = $conn->query("SELECT benh_nhan.cccd as cccd, ho_ten, ngay_sinh, gioi_tinh, nhip_tim, nong_do_oxy, thoi_gian FROM ket_qua, benh_nhan WHERE ket_qua.cccd = benh_nhan.cccd");
  $data = [];
  while ($row = mysqli_fetch_array($result)) {  
    array_push($data, [
      'cccd' => $row['cccd'],
      'ho_ten' => $row['ho_ten'],
      'ngay_sinh' => $row['ngay_sinh'],
      'gioi_tinh' => $row['gioi_tinh'],
      'nhip_tim' => $row['nhip_tim'],
      'nong_do_oxy' => $row['nong_do_oxy'],
      'thoi_gian' => $row['thoi_gian'],
    ]);
  }
  echo json_encode($data);
  $result->free_result();
  $conn->close();
?>