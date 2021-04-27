<?php require_once("./controller/deps.php"); ?>
<?php header_section("Dashboard"); ?>
<?php
if ($_SESSION['login'] == false) {
    header("Location: login.php");
    exit();
}
?>

<main class="clearfix">
    <h1 class="main-title">Welcome to the Dashboard</h1>
</main>
<?php footer_section(); ?>