<!DOCTYPE HTML>
<html>

<head>
    <title>Log In</title>
    <style>
    .error {
        color: #FF0000;
    }

    .log {
        background-color: RGBA(124, 145, 145, 60%);
        padding: 20px;
        margin-right: 70%;
        text-align: center;
        height: 35rem;
        width: 100%;
    }

    fieldset {
        margin-top: 10rem;
        font-size: 25px;
    }
    </style>
</head>

<body>
    <?php include '../common/header.php';

    ?>
    <div class="log">
        <form method="post" action="../../Controller/loginController.php">
            <fieldset>
                <legend><B>LOGIN</B></legend>
                User ID: <input type="text" name="id" required>

                <br><br>
                Password: <input type="Password" name="Password" required>

                <br><br>
                <input type="submit" name="submit" value="Submit"></>

                <a href="./Forgotpassword.php">Forgot Password?</a>
            </fieldset>

        </form>

    </div>


</body>
<?php include '../common/footer.php';?>

</html>