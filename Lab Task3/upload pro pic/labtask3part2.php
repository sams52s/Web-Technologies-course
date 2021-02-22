<!DOCTYPE html>
<html>

<head>
    <style>
    /* pic size is random. so just for making pic size fixed... and the form page looking as given form  */
    .upPic img {
        height: 200px;
    }

    .propic {
        width: 100px;
    }
    </style>

    <title>Profile Picture</title>
</head>

<body>
    <div class="propic">


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
        </form>
        </fieldset>

    </div>


</body>

</html>