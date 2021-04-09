<?php
$flag=0;
$Name = $email = $gender = $add = $userName= $pass= $cpass= $phone= $dob= $agree= $sm= $userType="";
 $nameErr =$userNameErr =$emailErr =$passErr=$cpassErr=$phoneErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = test_input($_POST["Name"]);
    $userName = test_input($_POST["userName"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $add = test_input($_POST["add"]);
    $pass = test_input($_POST["pass"]);
    $cpass = test_input($_POST["cpass"]);
    $phone = test_input($_POST["phone"]);
    $dob = test_input($_POST["dob"]);
    $userType = test_input($_POST["userType"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
    include '../model/registrationmodel.php';

    $user  =new regModel($Name , $email , $gender , $add , $userName,$pass, $cpass,$phone,$dob,$userType);
    if($user->validation()==1)
{
    header("Location: http://localhost/Logreg/Project/view/users/registration.php#");
}
if($user->validation()==0)
{
     $user->json();
}
?>