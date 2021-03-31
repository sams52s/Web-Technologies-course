<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    i {
        padding: 4px;

    }

    .htop {
        background: rgb(224, 87, 0);
        background: linear-gradient(90deg, rgba(224, 87, 0, 1) 0%, rgba(189, 73, 0, 1) 9%, rgba(189, 89, 25, 1) 16%, rgba(176, 82, 23, 1) 24%, rgba(161, 68, 10, 0.958420868347339) 30%, rgba(91, 39, 10, 0.8519782913165266) 45%, rgba(0, 0, 0, 0.38139005602240894) 51%, rgba(0, 141, 170, 0.7203256302521008) 58%, rgba(0, 167, 201, 0.8743872549019608) 66%, rgba(0, 190, 228, 1) 80%, rgba(0, 212, 255, 1) 92%);
        height: 4rem;
        display: flex;
        row-gap: 10px;
        flex-direction: row;
        width: 100%;

    }

    .hleft {
        display: flex;
        width: 50%;
    }

    .hlogo img {
        height: 4rem;
        width: 4rem;
        border-radius: 45px;
    }

    .hright {
        width: 50%;



    }

    .hcontent {
        float: right;
        padding: 20px;
    }

    .hsolid-line {
        border: 1px, solid;
        width: 100%;
        height: 12px;
        margin-top: 5px;
        background: rgb(224, 87, 0);
        background: linear-gradient(90deg, rgba(224, 87, 0, 1) 0%, rgba(0, 141, 170, 0.8015581232492998) 21%, rgba(0, 167, 201, 0.8743872549019608) 47%, rgba(0, 190, 228, 1) 66%, rgba(0, 212, 255, 1) 88%);
    }

    .hsolid-line2 {
        border: 1px, solid;
        width: 100%;
        height: 5px;
        margin-top: 2px;
        background: rgb(0, 212, 255);
        background: linear-gradient(90deg, rgba(0, 212, 255, 1) 11%, rgba(0, 190, 228, 1) 17%, rgba(107, 139, 140, 0.8883928571428571) 28%, rgba(134, 128, 92, 1) 37%, rgba(163, 115, 62, 1) 56%, rgba(224, 87, 0, 1) 90%);
    }

    .hname {
        padding: 5px;
    }
    </style>
</head>

<body>
    <nav>
        <div class="hfull">
            <div class="htop">
                <div class="hleft">
                    <div class="hlogo"> <img
                            src="http://localhost/Final%20project/Project/resources/img/Component%207.png" alt="logo">
                    </div>
                    <div class="hname">
                        <h2>G1_1 Restaurant Assistant</h2>
                    </div>
                </div>
                <div class="hright">
                    <div class="hcontent">
                        <i class="fas fa-user">
                            <a href="#">Login</a></i>
                        <i class="fas fa-phone-square-alt">
                            <a href="http://localhost/Final%20project/Project/view/ContactUs.php">Contact us</a></i>
                        <i class="fas fa-house-damage">
                            <a href="../view/h.php">Home page</a></i>
                    </div>
                </div>
            </div>
            <div class="hsolid-line">

            </div>
            <div class="hsolid-line2">

            </div>
        </div>
    </nav>

</body>

</html>