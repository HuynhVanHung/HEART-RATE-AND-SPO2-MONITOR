<?php
  require('connection.php');

  $cccd = $_POST['cccd'];
  $ho_ten = $_POST['ho_ten'];
  $ngay_sinh = $_POST['ngay_sinh'];
  $gioi_tinh = $_POST['gioi_tinh'];
  $nhip_tim = $_POST['nhip_tim'];
  $nong_do_oxy = $_POST['nong_do_oxy'];

  //echo "SELECT * FROM benh_nhan where cccd = ".$cccd;

  $result = $conn->query("SELECT * FROM benh_nhan where cccd = ".$cccd);

  //echo mysqli_num_rows($result);

  if(mysqli_num_rows($result) == 0){
    $conn->query("INSERT INTO `benh_nhan` (`cccd`, `ho_ten`, `ngay_sinh`, `gioi_tinh`) VALUES (".$cccd.", '".$ho_ten."', '".$ngay_sinh."', '".$gioi_tinh."')");
  }

  echo "INSERT INTO `ket_qua` (`cccd`, `nhip_tim`, `nong_do_oxy`) VALUES (".$cccd.", ".$nhip_tim.", ".$nong_do_oxy.")";

  $result = $conn->query("INSERT INTO `ket_qua` (`cccd`, `nhip_tim`, `nong_do_oxy`) VALUES (".$cccd.", ".$nhip_tim.", ".$nong_do_oxy.")");

  $conn->close();

  header("Location: http://localhost/FINAL/do.html");
?>