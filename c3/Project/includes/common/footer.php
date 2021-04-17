<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .footer {
        text-align: center;
        font-size: 20px;
        background: rgb(0, 212, 255);
        background: linear-gradient(90deg, rgba(0, 212, 255, 1) 11%, rgba(0, 190, 228, 1) 20%, rgba(107, 139, 140, 0.8883928571428571) 35%, rgba(134, 128, 92, 1) 46%, rgba(163, 115, 62, 1) 56%, rgba(255, 135, 59, 1) 90%);
        font-family: 'Pangolin', cursive;
        display: flex;
        padding: 10px;
        height: auto;

    }

    .fcopy {
        padding: 10px;
        margin-left: 35%;
    }

    .fcontractus {
        font-size: 2rem;
        margin-left: 20%;
        padding: 10px;

    }

    .fcontractus i {
        padding: 10px;
        /*For padding between iteams.. */
    }
    </style>
</head>

<body>
    <div class="footer">
        <div class="fcopy">
            <?PHP
        echo nl2br("Copyright (C) 2021 by Group 11.\ngit link: https://github.com/sams52s.");
?>
        </div>

        <div class="fcontractus">
            <i class="fab fa-facebook-square">

            </i>
            <i class="far fa-envelope">

            </i>

            <a href="https://github.com/sams52s"><i class="fab fa-github"></i></a>

        </div>
    </div>

    </div>

</body>

</html>