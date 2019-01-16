<?php
header("Access-Control-Allow-Origin: http://178.128.111.154");
//fetch.php
/*
$connect = mysqli_connect("localhost", "tnbinnoict", "TnbInnoIct2017", "testing");
 $query = "SELECT * FROM employee";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["name"] = $row["name"];
  $data["address"] = $row["address"];
  $data["gender"] = $row["gender"];
  $data["designation"] = $row["designation"];
  $data["age"] = $row["age"];
 }
*/
$homeEnergyTools["yourHome"] = array(950, 1100, 820, 1200, 1150, 1230, 1270, 1260, 810, 805, 1050, 802);
$homeEnergyTools["similarHomes"] = array(390, 392, 380, 389, 379, 384, 380, 399, 372, 392, 390, 385);
$homeEnergyTools["efficientSimilarHomes"] = array(210, 257, 240, 248, 235, 248, 242, 259, 232, 250, 252, 247);
$homeEnergyTools["weather"] = array(28, 28, 28, 27, 28, 28, 29, 29, 28, 28, 29, 28, 28);
$homeEnergyTools["electricityUsage"] = array(1050 ,950, 1100, 820, 1200, 1150, 1230, 1270, 1260, 810, 805, 1050, 802);
$homeEnergyTools["cost"] = array(480 ,410, 510, 390, 550, 520, 570, 610, 590, 380, 370, 480, 360);

echo json_encode($homeEnergyTools);

?>
