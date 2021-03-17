<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit password</title>
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
                        <a href="./EditProPic.php">
                            <h3> Edit Profile Picture</h3>
                        </a>
                    </div>
                    <div class="link">
                        <i class="fas fa-key"></i>
                        <a href="./ViewProfile.php">
                            <h3>Profile</h3>
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
                            <h3> Log Out</h3>
                        </a>
                    </div>

                </div>
                <div class="pro">
                    <h3>We Suggest <br>We Care <br>Every BIte is fair.</h3>

                </div>
            </div>
            <div class="Right">
                <div class="status">
                    <h1>Edit Password</h1>
                    <hr>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-info">
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Present Password" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="New Password" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Confirm Password" />
                            </div>
                            <input type="submit" class="btn" value="Change Password " />
                        </div>
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
    <div class=" circle1 "></div>
    <div class="circle2 "></div>
</body>

</html>