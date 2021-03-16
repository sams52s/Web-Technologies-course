<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!--I am using this just for icons by i tag below on my page like that user,lock, facbook gamil linked etc I could download those and used those like i did in footer but it is batter option and I am tring somthing new-->
    <link rel="stylesheet" href="../Css/Login.css" />
    <!--this is my css file from css folder-->
    <title>Sign in & Sign up Form</title>
</head>
<!--There are some i tag. that was not for italic that was for icone. by that i class name fas fa- taking icone from that script part above.-->

<body>
    <div class="head">
        <?php
    include '../Commonfiles./Header.php';
    include '../../Control./RegistrationControl.php'
    //Conecting Control to this view side..
    ?>
    </div>
    <div class="container">
        <div class="forms-container">

            <div class="signin-signup">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="User ID" />
                        <!--placeholder is that text we use to see on that input field before we gives any value or input-->
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input class="btn solid" type="submit" value="Login" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <!--Sign in form done now sign up form similar as sign in part-->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" />
                        <span class="error">* <?php echo $nameErr;?></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                        <span class="error">* <?php echo $emailErr;?></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                        <span class="error">* <?php echo $passErr;?></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-calendar-day"></i>
                        <input type="date" placeholder="Date of birth" />
                        <span class="error">* <?php echo $dobErr;?></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="01*********" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" placeholder="Address" />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <input type="reset" class="btn" value="Reset">
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="https://www.facebook.com/" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/#inbox" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!--We are deviding two part in two panels. One will for sign in and another one is for sign up.
            left panel is for regestration and wright one is for login. this is for svg part.
        -->

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        You don't have any account here? Dont worry come and register a new account then we will start
                        again.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="../../goods/log.svg" class="image" alt="login" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Already have an account?</h3>
                    <p>
                        If you Already has an account then you do not need to register. <br> login.. We are watting for
                        you. <br>
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="../../goods/register.svg" class="image" alt="register" />
                <!--This svg img is those img in sign up part-->
            </div>
        </div>
    </div>
    <script src="../../Control/login.js"></script>
    <!--using js for littile amount. just for making a smoth trasection and conection between signup and sign side.
     without this our sign in and sign up btn will not work. -->
</body>

</html>