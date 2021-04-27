<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="../resources/css/about.css">

</head>
<?php 
    include '../includes/links.php';
?>

<body>
    <div class="portfolio">
        <header>
            <div class="top" style="display: flex; width:100%;">
                <div class="left" style="color:#fc9b3f;text-align:left; padding:50px;">
                    <h2>G1_1</h2>
                </div>
                <div class="right" style="margin-left: 60%; padding:30px; color:#fc9b3f;">
                    <div class="content" style="float: right;padding: 20px; ">
                        <i class="fas fa-user">
                            <a href="http://localhost/RMA/USER/Class2%20Task/Class2%20Task/login.php">Login</a></i>
                        <i class="fas fa-phone-square-alt">
                            <a href="http://localhost/RMA/ADMIN/Project/view/ContactUs.php">Contact us</a></i>
                        <i class="fas fa-house-damage">
                            <a href="http://localhost/RMA/ADMIN/Project/view/">Home page</a></i>
                    </div>
                </div>


            </div>
            <main>
                <section class="page Restaurant">
                    <div class="details">
                        <h1 style="color:rgb(117, 39, 20);">Restaurant</h1>
                        <h2>Select by Restaurant</h2>
                        <p>Select your desire restaurants. <br> Hunt your food from your favorit place. </p>
                        <hr>
                    </div>
                    <div class="hero">
                        <img class="model-left"
                            src="../resources/img/funny_restaurant_poster_design_vector_533827-right.jpg"
                            alt="Restaurant">
                        <img class="model-right" src="../resources/img/funny_restaurant_poster_design_vector_533827.jpg"
                            alt="Restaurant">
                    </div>
                </section>
                <section class="page Food">
                    <div class="details">
                        <h1 style="color:rgb(255, 230, 0);">Food</h1>
                        <h2>Search by food</h2>
                        <p>Search your food from here. <br> We will try to give you best restaurants suggetion. </p>
                        <hr>
                    </div>
                    <div class="hero">
                        <img class="model-left" src="../resources/img/Summer-Food-Icons-left.jpg" alt="Food">
                        <img class="model-right" src="../resources/img/Summer-Food-Icons-right.jpg" alt="Food">
                    </div>
                </section>
                <section class="page Sale">
                    <div class="details">
                        <h1 style="color:rgba(247, 0, 0, 0.842);">Sale</h1>
                        <h2>Offers for you</h2>
                        <p>You will show you the best offers in your town.</p>
                        <hr>
                    </div>
                    <div class="hero">
                        <img class="model-left" src="../resources/img/sale-left.png" alt="Sale">
                        <img class="model-right" src="../resources/img/sale-right.png" alt="Sale">
                    </div>
                </section>
            </main>
        </header>
    </div>
</body>

</html>