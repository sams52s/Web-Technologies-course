<?php
session_start();
require_once("./templates/header.php");
require_once("./templates/footer.php");

if (isset($_SESSION['login']) && $_SESSION['login']) {
    require_once("./model/database.php");
}
