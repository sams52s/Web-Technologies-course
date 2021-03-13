<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$home="home";
            if(isset($_SESSION["Sname"]))
            {
                $home=$_SESSION["Sname"];
                echo "<a class='active' href='homepage.php'>Logged in as $home</a>";
            }
            else{
                echo "<a class='active' href='homepage.php'>$home</a>";
            }
            
        echo "
        <a href='login.php'>login</a>
        <a href='registration.php'>Registration</a>";
        ?>

</body>

</html>