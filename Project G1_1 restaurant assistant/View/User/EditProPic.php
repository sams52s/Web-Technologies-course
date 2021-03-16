<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile Picture</title>
    <link rel="stylesheet" href="../Css/Home.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <Style>
    fieldset {
        padding: 2rem;
        background: none;
        block-size: auto;
        border: 2px solid;
    }
    </Style>
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
                            <h3> Edit Profile</h3>
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
                        <img src="../Propic/mypic.jpg" alt="pro pic">
                    </div>

                </div>

                <div class="card">
                    <div class="card-info">
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" />
                        </div>

                        <div class="right">
                            <form action="../../Controller/EditProPicController.php" method="post"
                                enctype="multipart/form-data">
                                <!--after clicking submit btn this page will be loaded..-->
                                <fieldset>
                                    <legend><B>Select picture</B></legend> <br>
                                    <!--fieldset is just to make a separate sectin and legend for naming this fieldset. div is for separate that img for editing..-->
                                    <div class="upPic">
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                    <br>
                                    <hr>
                                    <input type="submit" class="btn" value="Change Profile Picture " />
                                </fieldset>
                            </form>
                        </div>
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