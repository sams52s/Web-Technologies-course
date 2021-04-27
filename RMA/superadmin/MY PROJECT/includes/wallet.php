<?php
$user_id=$_SESSION['user_id'];
$sql = mysqli_query($con, "SELECT * FROM wallet where customer_id = $user_id");
while($row1 = mysqli_fetch_array($sql)){
$wallet_id = $row1['id'];
}
