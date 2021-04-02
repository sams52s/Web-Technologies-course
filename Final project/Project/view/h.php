<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../resources/css/home.css">

</head>
<?php 

require '../controller/linkings.php' 
?>

<body>
    <div class="home">
        <div class="home-1st-photo-slide">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../resources/img/pexels-lisa-fotios-776538.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Restaurant</h5>
                            <p>You can find out your wanted restaurants</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../resources/img/pexels-chan-walrus-958545.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Food</h5>
                            <p>Feeling hungry want some special food..</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../resources/img/pexels-furknsaglam-3109671.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Area</h5>
                            <p>Hunting some good place around you?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../resources/img/Summer-Food-Icons.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Reating</h5>
                            <p>We are here to give you the best place you wander</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="downPart">
            <div class="row">

                <div class="col-sm-5 col-md-6">
                    <div class="h-txt"
                        style="text-align: center; font-family: 'Yatra One', cursive; margin: 10rem; font-size:35px;">
                        <p>
                            If you are a restaurant owner add your restaurant.Groq your business make our librarybigger.
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                    <div class="home-2nd-photo-slide">
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
            <div class="row"
                style="text-align: center; font-family: 'Pangolin', cursive, cursive; margin: 1rem; font-size:20px;">
                <div class="col-sm-6 col-md-5 col-lg-6">
                    <div class="h-log-txt">
                        <h2>Already have an account?</h2>
                        <p>
                            If you Already has an account then you do not need to register. <br> login.. We are watting
                            for you. <br>
                        </p>
                        <a class="btn btn-outline-primary" href="#" role="button" style="font-size:25px;">Log In</a>

                    </div>
                </div>
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <div class="h-reg-txt">
                        <h2>New here ?</h2>
                        <p>
                            You don't have any account here? Dont worry come and register a new account then we will
                            start again.
                        </p>
                        <a class="btn btn-outline-success" href="#" role="button"
                            style="font-size:25px;">Registration</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php 
require '../includes/footer.php';
?>

</html>