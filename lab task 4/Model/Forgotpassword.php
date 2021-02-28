<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .fp {
        margin-top: 2rem;
        padding: 2rem;
        margin-right: 30%;
        margin-left: 30%
    }
    </style>

</head>

<body>
    <?php include './common/header.php';
    include './common/footer.php';?>


    <div class="fp">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend>Forget Password</legend>

                Enter Email: <input type="text" name="Email">

                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>

    </div>
</body>

</html>