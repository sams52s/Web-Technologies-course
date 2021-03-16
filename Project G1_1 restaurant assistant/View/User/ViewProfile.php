<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ViewProfile</title>
    <link rel="stylesheet" href="../Css/Home.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="head">
        <?php
    include '../Commonfiles./Header.php';
    ?>
    </div>
    <main>
        <section class="glass">
            <div class="dashboard">
                <div class="user">
                    <img src="../Propic/mypic.jpg" alt="" />
                    <h3>User Name</h3>
                    <p>user Type</p>
                </div>
                <div class="links">
                    <div class="link">
                        <i class="fas fa-id-card-alt"></i>
                        <a href="./Eidt.php">
                            <h3> Edit profile</h3>
                        </a>
                    </div>
                    <div class="link">
                        <i class="fas fa-key"></i>
                        <a href="./Editpass.php">
                            <h3>EditPassword</h3>
                        </a>
                    </div>
                    <div class="link">
                        <i class="fas fa-home"></i>
                        <a href="../Home.php">
                            <h3> Home</h3>
                        </a>

                    </div>
                    <div class="link">
                        <i class="fas fa-user-minus"></i>
                        <a href="#">
                            <h3> Deleteprofile</h3>
                        </a>
                    </div>

                </div>
                <div class="pro">
                    <h3>We Suggest <br>We Care <br>Every BIte is fair.</h3>

                </div>
            </div>
            <div class="Right">
                <div class="status">
                    <h1>Profile</h1>
                    <hr>
                </div>
                <div class="cards">
                    <div class="card">
                        <i class="fas fa-id-card"></i>
                        <div class="card-info">
                            <h2>Genarel Info</h2>
                            <hr>
                            <h4>Name: </h4>
                            <hr>
                            <h4>Email: </h4>
                            <hr>
                            <h4>Date of Birth: </h4>
                            <hr>
                            <h4>Phone Number: </h4>
                            <hr>



                        </div>

                    </div>
                    <div class="card">
                        <i class="fas fa-street-view"></i>
                        <div class="card-info">
                            <h2>Address</h2>
                            <p>Road,5 <br>Bashundhara,Dhaka. <br>Bangladesh</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="footer">
        <?php
    include '../Commonfiles./Footer.php';
    ?>

    </div>
    <div class="circle1"></div>
    <div class="circle2"></div>
</body>

</html>