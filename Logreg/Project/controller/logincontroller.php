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
    $user  =new loginModel( $email,$pass);
    if($user->matching()==2)
{
    session_start();
    $_SESSION["SuserName"]="$userName";
    
    header("Location: http://localhost/Logreg/Project/view/users/viewprofile.php");
}
else{
    if($user->matching()==1)
    {
        echo $pass.'<br>'.'Not valid'; 
    }
    else{
        echo $email.'<br>'.'Not valid'; 
    }

}
/*
if($user->validation()==0)
{
     session_start();
     $_SESSION["SName"]="$Name";
     $_SESSION["Semail"]="$email";
     $_SESSION["Sgender"]="$gender";
     $_SESSION["SuserName"]="$userName";
     $_SESSION["Spass"]="$pass";
     $_SESSION["Sphone"]="$phone";
     $_SESSION["Sdob"]="$dob";
     $_SESSION["SuserType"]="$userType";
}*/
echo $email.'<br>';
echo $pass.'<br>';
?>