<?php
$flag=0;
 $email = $pass= $userName="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $pass = test_input($_POST["pass"]);
    $userName = test_input($_POST["userName"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
   include '../model/loginmodel.php';
    $user  =new loginModel( $email,$pass,$userName);

?>