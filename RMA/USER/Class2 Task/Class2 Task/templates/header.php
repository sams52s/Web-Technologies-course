<?php
// var_dump($_SESSION);
function header_section($title)
{
    if (isset($_SESSION['login']))
        if (!$_SESSION['login'])
            header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title) ? $title : "Document"; ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</head>

<body>
    <header>
        <div class="header-info clearfix">
            <?php if (isset($_SESSION['login'])) : ?>

            <h1 style="float:left;"><?php echo ($title) ? $title : "Document"; ?></h1>
            <h3 style="float:right;">Logged in as <?php echo ucfirst($_SESSION['type']); ?></h3>
            <?php else : ?>

            <h1><?php echo ($title) ? $title : "Document"; ?><?php echo " Page"; ?></h1>
            <?php endif; ?>
        </div>
        <nav class="menu">
            <ul>
                <?php if (isset($_SESSION['type']) && $_SESSION['type'] === "admin" && isset($_SESSION['login']) && $_SESSION['login']) : ?>

                <li><a href="http://localhost/RMA/ADMIN/Project/view/">Home</a></li>
                <li><a href="viewprofile.php">View Profile</a></li>
                <li><a href="editprofile.php">Edit Profile</a></li>
                <li><a href="changepp.php">Change Profiel Picture</a></li>
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="addmanagement.php">Add management</a></li>
                <li><a href="controller/logout.php">Logout</a></li>
                <?php elseif (isset($_SESSION['type']) && $_SESSION['type'] === "restaurantadmin" && isset($_SESSION['login']) && $_SESSION['login']) : ?>

                <li><a href="http://localhost/RMA/ADMIN/Project/view/">Home</a></li>
                <li><a href="viewprofile.php">View Profile</a></li>
                <li><a href="editprofile.php">Edit Profile</a></li>
                <li><a href="changepp.php">Change Profiel Picture</a></li>
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="viewmanagementprofile.php">View Management</a></li>
                <li><a href="addmanagement.php">Add Management</a></li>
                <li><a href="controller/logout.php">Logout</a></li>
                <?php else : ?>

                <li><a href="http://localhost/RMA/ADMIN/Project/view/">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <!-- <li><a href="registration_u.php">Registration</a></li>
                        <li><a href="registration_m.php">Management Registration</a></li> -->
                <li><a href="registration_ra.php">Restaurent Admin Registration</a></li>
                <?php endif; ?>

            </ul>
        </nav>
    </header>
    <?php } ?>