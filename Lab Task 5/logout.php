<?php  
session_start();  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
    .welcome {

        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans';
        font-size: 45px;
        margin-top: 10rem;
        margin-left: -8rem;
        color: darkred;
    }

    .main {
        display: flex;

    }

    .btn {
        padding: 5rem;
        text-align: center;
    }

    .btn button {
        background-color: #CC0000;
        padding: 1rem;
        font-size: 25px;
        color: azure;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .btn button:hover {
        background-color: #000033;
        color: #CCFFFF;
    }

    .btn a {
        color: #CCFFFF;
    }
    </style>

</head>

<body>
    <?php
$user="User";

?>
    <?php include './common/header.php';
    include './common/footer.php';
    ?>
    <div class="main">
        <div class="left">
            <?php 
    include './common/Account.php';
    ?>
        </div>
        <div class="right">
            <div class="welcome">
                <?php  
                        if(isset($_SESSION["Sname"]))
                        {
                            $user=$_SESSION["Sname"];
                            echo $user." Do you want to logged out.";

                        }//"using session from registration.php
                        else{
                            echo " You have logged out. please login again";
                        }
                        
                       
                    ?>
                <div class="btn">
                    <button>

                        <?php
                        session_destroy();
                           echo"<a href='logout.php'>Log Out</a>" 
                        ?>
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>