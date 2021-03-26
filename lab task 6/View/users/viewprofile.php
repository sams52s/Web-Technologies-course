<?php  
session_start();  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View Profile</title>
    <style>
    .r {
        display: flex;
    }

    .pp img {
        height: 300px;
    }

    .pp {
        margin: auto;
        padding: 1rem;
    }

    .Info {

        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans';
        font-size: 25px;
        margin-top: 3rem;
        margin-left: 3rem;
        padding: 1rem;
    }

    .pro {
        display: inline-grid;
        width: 100px;
        grid-template-columns: 300px 1000px;
        grid-template-rows: 34rem;


    }

    fieldset {
        padding: 2rem;
        background-color: whitesmoke;
        block-size: 32rem;
        border: 2px solid;
    }

    .Info a,
    /* using , we can css 2 div at a time similarly*/
    .pp a {
        font-size: 18px;

        font-style: italic;
        padding: 1rem;
    }
    </style>
</head>

<body>

    <?php include './common/header.php';
    include './common/footer.php';?>

    <div class="pro">

        <div class="left">

            <?php include './common/Account.php';?>
        </div>
        <div class="Reg">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <!--fieldset is for creating a specific section box where  -->
                <fieldset>
                    <!--legend is name of fieldset-->
                    <legend> PROFILE:</legend>
                    <div class="r">
                        <div class="Info">
                            <?php  
                            if(isset($_SESSION["Sname"])){              
                        echo "Name:          " .$_SESSION["Sname"] ."<br> <hr>";//"using session from registration.php
                            }
                            else{
                                echo "Name:          <br> <hr>";
                            }
                            if(isset($_SESSION["Semail"])){      
                        echo "Email:         " .$_SESSION["Semail"] ."<br> <hr>";//"using session from registration.php
                            }
                            else{
                                echo "Email:         <br> <hr>";
                            }
                            if(isset($_SESSION["Sgender"])){ 
                        echo "Gender:        " .$_SESSION["Sgender"] ."<br> <hr>";//"using session from registration.php
                            }
                            else{
                                echo "Gender:        <br> <hr>";
                            }
                            if(isset($_SESSION["Sdob"])){ 
                        echo "Dath of Birth: " .$_SESSION["Sdob"] ."<br> <hr>";//"using session from registration.php
                            }
                            else{
                                echo "Dath of Birth: <br> <hr>";
                            }
                        echo" <a href='Editprofile.php'> Edit Profile</a> <br><br>";
                        ?>

                        </div>
                        <div class="pp">
                            <img src="./page2/pic/mypic.jpg" alt=""> <br>
                            <?php
                            echo" <a href='profilepicture.php'> Change</a> <br><br>";
                            ?>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>