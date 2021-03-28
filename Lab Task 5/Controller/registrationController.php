<?php 
include '../Model/registrationModel.php';


$Name= $_POST['name'];
$mail= $_POST['mail'];
$UserName= $_POST['userName'];
$password= $_POST['password'];
$confirmPassword= $_POST['confirmPassword'];
$Gender= $_POST['gender'];
$DOB= $_POST['dob'];
$Phoneno= $_POST['phone'];
$city= $_POST['city'];

if(!empty($Name)&&!empty($mail)&&!empty($UserName)&&!empty($password)&&!empty($confirmPassword)&&!empty($Gender)&&!empty($DOB)&&
!empty($Phoneno)&&!empty($city))
{
    if($confirmPassword==$password)
    {
        getdata($mail,$Name,$UserName,$password,$Gender,$DOB,$Phoneno,$city);
    }
}
else{
    echo"All field are required";
    die();
}

?>