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


    <div class="showinfo">
        <div class="userinfo">
            <h3>User info</h3>
            <div id="db">

                <?php
        include '../../includes/database/viewdb.php';?>
            </div>
        </div>
        <div class="adminInfo">
            <h3>Admin info</h3>
            <?php
        include '../../includes/database/viewadmindb.php';
?>
        </div>
    </div>

    <button class="btn btn-dark" name="customers" onclick="showCustomer()" value="btn">View all user
        info</button>
    <div class="vtop">
        <div class="propic">
            <img src="#" alt="No profile picture is set.">
        </div>
        <div class="updateprofile">
            <a class="btn btn-dark" href="Editprofile.php" role="button">Edit profile</a>
        </div>
    </div>
    <script>
    </script>
</body>
<?php 

require_once '../../includes/common/footer.php';

?>

</html>