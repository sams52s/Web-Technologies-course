<?php require_once("./controller/deps.php"); ?>
<?php header_section("Forget Password"); ?>
<?php
$errors_message = [];
$success_message = "";

if (isset($_GET['errors'])) {
    $errors_message = [];

    if (isset($_GET['errors'])) {
        $errors_code = explode(",", $_GET['errors']);
    
    
        foreach ($errors_code as $error) {
            if ($error == "emptyemail") {
                array_push($errors_message, "Empty email");
            }
            if ($error == "emptytype") {
                array_push($errors_message, "Empty type");
            }
            if ($error == "type") {
                array_push($errors_message, "Invalid type");
            }
            if ($error == "email") {
                array_push($errors_message, "Invalid Email");
            }
            if($error == "notfoundemail") {
                array_push($errors_message, "Email does not exist");
            }
        }
    }
}

if (isset($_GET['success']) && !empty($_GET['success'])) {
    $success_message = $_GET['success'];
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
                        <td><?php echo "Your temporary Password is: $success_message"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php endif; ?>
    <form action="./controller/forgetpass.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td><label for="email">Enter Email</label></td>
                    <td><input class="inp" id="email" type="text" name="email"></td>
                </tr>
                <tr>
                    <td><label>Type</label></td>
                    <td>

                        <input id="restaurant" type="radio" name="type" value="restaurantadmin">
                        <label for="restaurant">Restaurant Admin</label>

                        <input id="management" type="radio" name="type" value="management">
                        <label for="management">Management</label>

                        <input id="user" type="radio" name="type" value="user">
                        <label for="user">User</label>

                        <input id="admin" type="radio" name="type" value="admin">
                        <label for="admin">Admin</label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn" id="changepassword" type="submit" name="changepass">Submit</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</main>
<?php footer_section(); ?>