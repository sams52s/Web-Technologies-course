<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="../resources/css/restaurant.css">
</head>
<?php 
require '../controller/linkings.php' ;

?>

<body>
    <div class="r_top">
        <div class="r_top1">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="../resources/production ID_5135760.mp4"></iframe>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="offer_bord">
                        <p>Offer Bord</p>
                    </div>
                </div>
                <div class="col">
                    <div class="r_top2">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../resources/img/Summer-Food-Icons.jpg"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../resources/img/Summer-Food-Icons.jpg"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../resources/img/Summer-Food-Icons.jpg"
                                        alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="r_mid">
        <div class="r_mid_left">
            <h3>Resurve sit</h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Sit :
                <input type="number" name="sit" value="<?php echo $sit;?>">
                <br><br>
                Date:
                <input type="date" name="date" value="<?php echo $date;?>">
                <br><br>
                Time:
                <input type="time" name="time" value="<?php echo $time;?>">
                <br><br>

                <input type="submit" name="submit" value="Submit">

            </form>
        </div>
        <div class="r_mid_right">
            <h3>I am here</h3>
        </div>
    </div>
    <div class="r_mid2">
        <?php 
        require '../controller/restaurantController.php'; 
        ?>
    </div>
</body>
<?php 
require '../includes/footer.php';
?>

</html>