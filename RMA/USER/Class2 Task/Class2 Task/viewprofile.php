<?php require_once("./controller/deps.php"); ?>
<?php header_section("Dashboard | View Profile"); ?>
<?php
if ($_SESSION['login'] == false) {
    header("Location: login.php");
    exit();
}

$time = "";
$new_date = "";
$time = strtotime(isset($_SESSION['dob']) ? $_SESSION['dob'] : "");
$new_date = date("d/m/Y", $time);

?>

<main class="clearfix">
    <div class="profile-info">
        <table>
            <tbody>

                <?php if (isset($_SESSION['name']) && !empty($_SESSION['name'])) : ?>
                    <tr>
                        <td>Name:</td>
                        <td><?php echo $_SESSION['name']; ?></td>
                    </tr>
                <?php endif; ?>
                <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])) : ?>

                    <tr>
                        <td>Email:</td>
                        <td><?php echo $_SESSION['email']; ?></td>
                    </tr>

                <?php endif; ?>
                <?php if (isset($_SESSION['gender']) && !empty($_SESSION['gender'])) : ?>

                    <tr>
                        <td>Phone:</td>
                        <td><?php echo ucwords($_SESSION['gender']); ?></td>
                    </tr>

                <?php endif; ?>
                <?php if (isset($_SESSION['location']) && !empty($_SESSION['location'])) : ?>

                    <tr>
                        <td>Location:</td>
                        <td><?php echo $_SESSION['location']; ?></td>
                    </tr>

                <?php endif; ?>
                <?php if (isset($_SESSION['type']) && !empty($_SESSION['type'])) : ?>

                    <tr>
                        <td>Type:</td>
                        <td><?php echo ucwords($_SESSION['type']); ?></td>
                    </tr>

                <?php endif; ?>

                <tr>
                    <td><a href="./editprofile.php">Edit Profile</a></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="profile-pic">
        <table>
            <tbody>
                <tr>
                    <td><img src="<?php echo isset($_SESSION['purl']) && !empty($_SESSION['purl']) ? $_SESSION['purl'] : "./images/defaultprofile.png" ?>" alt="Profile Picture"></td>
                </tr>
                <tr>
                    <td><a href="./changepp.php">Change Profile Picture</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
<?php footer_section(); ?>