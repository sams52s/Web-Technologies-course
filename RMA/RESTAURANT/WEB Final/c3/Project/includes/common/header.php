<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    i {
        padding: 4px;

    }

    .htop {
        background-color: white;
        height: 4rem;
        display: flex;
        row-gap: 10px;
        flex-direction: row;
        width: 100%;

    }

    .hleft {
        display: flex;
        width: 50%;
    }

    .hlogo img {
        margin-top: -10px;
        height: 5rem;
        width: 12rem;
        border-radius: 45px;
    }

    .hright {
        width: 50%;



    }

    .hcontent {
        float: right;
        padding: 20px;
    }

    .hsolid-line {
        border: 1px, solid;
        width: 100%;
        height: 12px;
        margin-top: 5px;
        background-color: white;
    }

    .hsolid-line2 {
        border: 1px, solid;
        width: 100%;
        height: 5px;
        margin-top: 2px;
        background-color: white;
    }

    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

    .hname h2 {
        padding: 5px;
        font-family: 'Open Sans', sans-serif;
    }
    </style>
</head>

<body>
    <nav>
        <div class="hfull">
            <div class="htop">
                <div class="hleft">
                    <div class="hlogo"> 
                    </div>
                    <div class="hname">
                        <h2>Group 11</h2>
                    </div>
                </div>
                <div class="hright">
                    <div class="hcontent">
                        <i class="fas fa-user">
                            <?php 
                        $log="Login" ;
                        if(isset($_SESSION["SuserName"]))
                        {
                            $log=$_SESSION["SuserName"] ;
                            echo" <a href='http://localhost/c3/Project/view/users/logOut.php'>$log</a>";
                        }else{
                            echo" <a href='http://localhost/c3/Project/view/users/login.php'>$log</a>";
                        }
                        ?>

                        </i>
                        <i class="">
                            <a href="http://localhost/ajax-live-search/index.php">Search </a></i>
                        <i class="fas fa-house-damage">
                            <a href="http://localhost/c3/Project/view/">Home page</a></i>
                    </div>
                </div>
            </div>
            <div class="hsolid-line">

            </div>
            <div class="hsolid-line2">

            </div>
        </div>
    </nav>

</body>

</html>
<?php 
require_once '../../includes/common/links.php';
require_once '../../includes/common/navbar.php';
?>