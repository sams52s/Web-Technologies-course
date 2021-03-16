<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../Css/Home.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="head">
        <?php
    include '../Commonfiles./Header.php';
    include '../../Controller./RegistrationControl.php';
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
                        <a href="./EditProPic.php">
                            <h3> Edit Profile Picture</h3>
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
                    <h1>Edit Profile</h1>
                    <hr>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-info">
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Username" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Email" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-calendar-day"></i>
                                <input type="date" placeholder="Date of birth" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-phone"></i>
                                <input type="text" placeholder="01*********" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-street-view"></i>
                                <input type="Radio" id="u1" /> Restaurant
                                <input type="Radio" id="u2" /> Customer <br>
                            </div>
                            <input type="submit" class="btn" value="Sign up" />
                        </div>
                    </div>
                    <div class="card">
                        <i class="fas fa-street-view"></i>
                        <div class="card-info">
                            <h2>Address</h2>
                            <input type="text" placeholder="Address" />
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