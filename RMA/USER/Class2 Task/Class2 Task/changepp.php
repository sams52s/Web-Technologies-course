<?php require_once("./controller/deps.php"); ?>
<?php header_section("Dashboard | Edit Profile Picture"); ?>
<?php

if ($_SESSION['login'] == false) {
    header("Location: login.php");
    exit();
}

$errors_message = [];
$success_message = "";

if (isset($_GET['success'])) {
    if ($_GET['success'] == "true") {
        // var_dump($_GET);
        $success_message = "Successfully Uploaded";
    }
}

if (isset($_GET['errors'])) {
    $errors_code = explode(",", $_GET['errors']);


    foreach ($errors_code as $error) {
        if ($error == "choosefile") {
            array_push($errors_message, "Select an Image");
        }
        if ($error == "emptyid") {
            array_push($errors_message, "Empty ID");
        }
        if ($error == "fileexists") {
            array_push($errors_message, "File is already exists");
        }
        if ($error == "bigfile") {
            array_push($errors_message, "File size is greater than 40mb");
        }
        if ($error == "notfiletype") {
            array_push($errors_message, "File type is invalid. only (jpg, jpeg and png) file type supported");
        }
    }
}
?>

<main class="clearfix">
    <?php if (count($errors_message)) : ?>

        <div class="errors-list">
            <table>
                <tbody>

                    <?php foreach ($errors_message as $err_msg) : ?>

                        <tr>
                            <td>!! <?php echo $err_msg; ?></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    <?php endif; ?>
    <?php if (!empty($success_message)) : ?>

        <div class="success">
            <table>
                <tbody>
                    <tr>
                        <td><?php echo $success_message; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php endif; ?>
    <div class="file-upload">
        <form action="./controller/changepp.php" method="post" enctype="multipart/form-data">
        <?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) : ?>
            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
        <?php endif; ?>
        <?php if (isset($_SESSION['type']) && !empty($_SESSION['type'])) : ?>
            <input type="hidden" name="type" value="<?php echo $_SESSION['type']; ?>">
        <?php endif; ?>
            <table>
                <tbody>
                    <tr>
                        <td><input class="inp" id="file" type="file" name="profilepicfile"></td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn" id="submit" type="submit" name="upload">Upload</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="file-info">
        <table>
            <tbody>
                <tr>
                    <td><img src="<?php echo isset($_SESSION['purl']) && !empty($_SESSION['purl']) ? $_SESSION['purl'] : "./images/defaultprofile.png" ?>" alt="Profile Picture"></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
<?php footer_section(); ?>