<?php
include_once '../includes/database/regdb.php';
$flag=0;
$Name = $email = $gender = $address= $userName= $pass= $cpass= $phone= $dob= $agree= $sm= $userType="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = test_input($_POST["Name"]);
    $userName = test_input($_POST["userName"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $address = test_input($_POST["add"]);
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

    $user  =new regModel($Name , $email , $gender , $address , $userName,$pass, $cpass,$phone,$dob,$userType);
    
    
if($user->validation()==0)
{
    
    
     $user->json();
     getdata($Name , $email , $gender , $address, $userName,$pass,$phone,$dob,$userType);
     session_start();
     $_SESSION["SuserName"]="$userName";
     /*header("Location:http://localhost/c2/Project/view/users/login.php");*/

     echo "<a href='https://localhost/c2/Project/view/users/login.php'> Go LogIn page page !!</a>";
}
else{
   echo $nameErr = $user->namevalidation();
   echo $userNameErr =$user->userNamevalidation();
   echo $emailErr =$user->emailvalidation();
   echo $passErr=$user->passvalidation();
   echo $cpassErr=$user->cpassvalidation();
   echo $phoneErr=$user->phonevalidation();
   die();
   echo "<a href='https://localhost/c2/Project/view/users/registration.php'> Go back to registration page !!</a>";
}
?>