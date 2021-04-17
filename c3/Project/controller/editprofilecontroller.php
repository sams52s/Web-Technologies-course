<?php
$flag=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = test_input($_POST["Name"]);
   /* $pass = test_input($_POST["pass"]);
    $userName = test_input($_POST["userName"]);*/
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include '../model/editprofilemodel.php';
 $user  =new editModel($Name);
  /* include '../model/loginmodel.php';
    $user  =new loginModel( $email,$pass,$userName);*/

?>