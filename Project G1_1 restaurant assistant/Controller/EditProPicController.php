<!DOCTYPE html>
<html>

<head>
    <title>Uploded Profile Picture</title>
    <style>
    .photo img {
        height: 200px;
    }

    .photo {
        width: 100px;
    }
    </style>
</head>

<body>
    <?php
$target_dir = "../View/./Propic/";//alocating location holding uploaded pic
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //add file...
$flag = 1;//a flag to indicate action is sucsesfull or not...
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));// img file path locating.

//for img adding..
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);// uploaded file saving...
    $flag  = 1;
  }
   else {
    echo "File is not an image<br>";
    $flag = 0;
  }


if (file_exists($target_file)) { // if this file is already uploaded or already in that located folder...
  echo "Sorry, file already exists<br>";
  $flag  = 0;
}
//make file size fixed.. 
if ($_FILES["fileToUpload"]["size"] > 4000000) {
  echo "Picture size should not be more than 4MB<br>";
  $flag  = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")//img extantion chekhing for cheking is it img or not..
 { 
  echo "Sorry, only JPG, JPEG, & PNG files are allowed<br>";
  $flag  = 0;
}

if ($flag  == 0) {
  echo "Sorry, your file was not uploaded<br>"; // flag=1 so action sucsessful. and 0 so there is some issue. so ont uploaded..
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Profile Picture Uploaded Succesfully<br>";
  } else {
    echo "Sorry, there was a problem uploading your file<br>";//if there is any problem except logical then this.
  }
}

?>
    <div class="photo">
        <fieldset>
            <legend><B>PROFILE PICTURE</B></legend> <br>
            <br><img src="../View/./Propic/<?php echo($_FILES["fileToUpload"]["name"]) ?>" alt="Profile Picture">
        </fieldset>

    </div>
    <a href="../View/./User/ViewProfile.php">OK</a>




</body>

</html>