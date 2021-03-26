<!DOCTYPE html>
<html lang="en">
<style>
.footer {
    text-align: center;
    font-size: 20px;
    color: RGB(250, 245, 250);
    background-color: RGBA(0, 0, 0, 70%);
    font-family: 'Pangolin', cursive;
    display: flex;
    padding: 10px;
    height: auto;

}

.copy {
    padding: 10px;
    margin-left: 35%;
}

.contractus {
    font-size: 2rem;
    margin-left: 20%;
    padding: 10px;

}

.contractus i {
    padding: 10px;
    /*For padding between iteams.. */
}
</style>

<body>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4e32f7f314.js" crossorigin="anonymous"></script>
-->

    <div class="footer">
        <div class="copy">
            <?PHP
        echo nl2br("Copyright (C) 2021 by toufiqul alam sams.\ngit link: https://github.com/sams52s.");
?>
        </div>

        <div class="contractus">
            <i class="fab fa-facebook-square"></i>
            <i class="far fa-envelope"></i>
            <i class="fab fa-github"></i>
        </div>
    </div>

</body>

</html>