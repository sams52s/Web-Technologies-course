<?php require_once("./controller/deps.php"); ?>
<?php header_section("Home"); ?>
<?php
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header("Location: dashboard.php");
    exit();
}
?>
<main class="clearfix">
    <h1 class="main-title">Welcome to the company</h1>
</main>
<?php footer_section(); ?>