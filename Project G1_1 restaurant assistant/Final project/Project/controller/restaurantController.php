<?php
include '../model/restaurantModel.php';

$sit = test_input($_POST['sit']);
$time = test_input($_POST['time']);
$date = test_input($_POST['date']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sit"])||empty($_POST["time"])||empty($_POST["date"])) 
  {
    echo 'Every info must be filled ';
  } else { 
    setinfo($sit, $date, $time);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>