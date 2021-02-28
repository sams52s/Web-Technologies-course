<!DOCTYPE html>
<html>

<head>
    <style>
    /* pic size is random. so just for making pic size fixed... and the form page looking as given form  */
    .upPic img {
        height: 200px;
    }

    .propic {
        display: inline-grid;
        width: 100px;
        grid-template-columns: 300px 1000px;
        grid-template-rows: 34rem;


    }

    fieldset {
        padding: 2rem;
        background-color: whitesmoke;
        block-size: 32rem;
        border: 2px solid;
    }
    </style>

    <title>Profile Picture</title>
</head>

<body>
    <?php include './common/header.php';
    include './common/footer.php';?>

    <div class="propic">
        <div class="left">

            <?php include './common/Account.php';
    ?>
        </div>
        <div class="right">
            <form action="page2/part2.php" method="post" enctype="multipart/form-data">
                <!--after clicking submit btn this page will be loaded..-->

                <fieldset>
                    <legend><B>PROFILE PICTURE</B></legend> <br>
                    <!--fieldset is just to make a separate sectin and legend for naming this fieldset. div is for separate that img for editing..-->
                    <div class="upPic">
                        <img src="page2/upPic.jpg"><br><br>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <br>
                    <hr>
                    <input type="submit" name="submit">
                </fieldset>
            </form>

        </div>





    </div>


</body>

</html>