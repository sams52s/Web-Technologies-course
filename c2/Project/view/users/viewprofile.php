<?php 
session_start();
if(isset($_SESSION["SuserName"]))
{

}
else{
  //  header("Location: https://localhost/c2/Project/view/users/login.php");
}

require_once '../../includes/common/header.php';
require_once '../../includes/common/navbar.php';
include '../../model/registrationmodel.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../includes/css/viewprofilestyle.css">
</head>


<body>
    <div class="vtop">
        <div class="propic">
            <img src="#" alt="No profile picture is set.">
        </div>
        <div class="updateprofile">
            <a class="btn btn-dark" href="Editprofile.php" role="button">Edit profile</a>
        </div>
    </div>

    <div class="showinfo">
        <?php
        include '../../includes/database/viewdb.php';
?>
    </div>


</body>
<?php 

require_once '../../includes/common/footer.php';

?>

</html>