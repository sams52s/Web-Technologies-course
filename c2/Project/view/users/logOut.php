<?php  
session_start();  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
    <link rel="stylesheet" href="../../includes/css/logOut.css">
</head>
<?php 
require_once '../../includes/common/header.php';

include '../../model/registrationmodel.php';

?>

<body>
    <div class="logOut">
        <h3 class="card-title">Log Out</h3>
        <p class="card-text">Are you sure You want to log out?</p>

        <button class="btn btn-warning">
            <?php
session_destroy();
echo"<a href='./login.php'>Log Out</a>" 
?>
        </button>
    </div>

</body>
<?php 

require_once '../../includes/common/footer.php';

?>

</html>