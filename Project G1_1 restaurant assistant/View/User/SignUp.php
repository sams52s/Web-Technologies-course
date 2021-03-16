<!DOCTYPE HTML>
<html>

<head>
    <!--This style part is only for making similar as qus-->
    <style>
    .Reg {

        margin-right: 50rem;
    }

    .error {
        color: #FF0000;
        /*this is color red*/
    }
    </style>
</head>

<body>
    <div class="head">
        <?php
    include '../Commonfiles./Header.php';
    include '../../Control./RegistrationControl.php'
    //Conecting Control to this view side..
    ?>
    </div>
    <p><span class="error">* required field</span></p>
    <div class="Reg">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!--fieldset is for creating a specific section box where  -->
            <fieldset>
                <!--legend is name of fieldset-->
                <legend>REGISTRATION:</legend>
                Name: <input type="text" name="name">
                <span class="error">* <?php echo $nameErr;?></span>
                <br>
                <hr>
                E-mail: <input type="text" name="email">
                <span class="error">* <?php echo $emailErr;?></span>
                <br>
                <hr>
                User Name: <input type="text" name="username">
                <span class="error">* <?php echo $userNameErr;?></span>
                <br>
                <hr>
                Password: <input type="Password" name="Password">
                <span class="error">* <?php echo $passErr;?></span>
                <br>
                <hr>
                Confirm Password: <input type="Password" name="confirmpass">
                <span class="error">* <?php echo $confirmpassErr;?></span>
                <br>
                <hr>
                <fieldset>
                    <legend>Gender</legend>
                    Gender:
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="other">Other
                    <span class="error">* <?php echo $genderErr;?></span>
                </fieldset>
                <hr>
                <fieldset>
                    <legend>Date Of Birth</legend>
                    <input type="date" name="birthday">
                    <span class="error">* <?php echo $dobErr;?></span>
                    <br>
                </fieldset>
                <hr>
                <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset">

            </fieldset>
        </form>
    </div>
    <?php
    //just for show any worng info or wrong action message...
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
</body>

</html>