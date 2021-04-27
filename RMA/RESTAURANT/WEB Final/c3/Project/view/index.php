<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surjo</title>
    <link rel="stylesheet" href="../includes/css/index.css">
</head>


<body>
    <div class="welcome">
        <div class="lineOne">
            <h1</h1>
        </div>
        <div class="line2">
            <div class="defore_login" id="login">
                <div class="log">
                    <p>Go For Login</p>
                    <a class="btn btn-outline-success" href="./users/login.php" role="button">Login</a>
                </div>
                <div class="reg">
                    <p>Go For Registration</p>
                    <a class="btn btn-outline-primary" href="./users/registration.php" role="button">Registration</a>
                </div>
            </div>
            <div class="after_login" id="login">
                <div class="intro">
                    <?php 
            echo"
            <hr><br>"?>
                    <br>
                </div>
                <div class="btn">
                    <a class="btn btn-outline-success" href="#" role="button"></a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
require '../includes/common/footer.php';
?>

</html>