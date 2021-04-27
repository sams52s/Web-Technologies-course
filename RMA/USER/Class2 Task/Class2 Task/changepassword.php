<?php require_once("./controller/deps.php"); ?>
<?php header_section("Dashboard | Change Password"); ?>
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
        $success_message = "Successfully Change the Password";
    }
}

if (isset($_GET['errors'])) {
    $errors_code = explode(",", $_GET['errors']);


    foreach ($errors_code as $error) {
        if ($error == "cpassword") {
            array_push($errors_message, "Current Password is not matched");
        }
        if ($error == "npassword") {
            array_push($errors_message, "Password must be larger than 8 character, include at least one of them (@, #, $, %)");
        }
        if ($error == "ccpassword") {
            array_push($errors_message, "Confirm Password didn't match your Password");
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
    <form action="./controller/changepass.php" method="post">
        <input type="hidden">
        <table>
            <tbody>
                <tr>
                    <td><label for="cpassword">Current Password</label></td>
                    <td><input class="inp" id="cpassword" type="password" name="cpassword" onkeyup="validateCurrentPass(this)"></td>
                    <td class="err-msg"></td>
                </tr>
                <tr>
                    <td><label for="npassword">New Password</label></td>
                    <td><input class="inp" id="npassword" type="password" name="npassword" onkeyup="validateNPassword(this)"></td>
                    <td class="err-msg"></td>
                </tr>
                <tr>
                    <td><label for="ccpassword">Confirm Password</label></td>
                    <td><input class="inp" id="ccpassword" type="password" name="ccpassword" onkeyup="validateCCPassword(this)"></td>
                    <td class="err-msg"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn" id="changepassword" type="submit" name="changepass">Change Password</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</main>
<?php footer_section(); ?>