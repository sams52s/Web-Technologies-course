<?php require_once("./controller/deps.php"); 
include_once '../../../ADMIN/Project/includes/common/navbar.php';
include_once '../../../ADMIN/Project/includes/common/links.php';
?>
<?php header_section("Login"); ?>
<?php
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header("Location: dashboard.php");
    exit();
}

$errors_message = [];

if (isset($_GET['errors'])) {
    $errors_code = explode(",", $_GET['errors']);


    foreach ($errors_code as $error) {
        if ($error == "emptyemail") {
            array_push($errors_message, "Empty email");
        }
        if ($error == "emptypass") {
            array_push($errors_message, "Empty password");
        }
        if ($error == "email") {
            array_push($errors_message, "Invalid Email");
        }
        if($error == "notlogin") {
            array_push($errors_message, "Login credential is not correct");
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
    <form action="./controller/login.php" method="post" autocomplete="off" id="login">
        <input type="hidden">
        <table>
            <tbody>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input class="inp" id="email" type="text" name="email" onkeyup="validateEmail(this)"></td>
                    <td class="err-msg"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input class="inp" id="password" type="password" name="password"
                            onkeyup="validateLoginPassword(this)"></td>
                    <td class="err-msg"></td>
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
                    <td class="err-msg"></td>
                </tr>
                <!-- <tr>
                    <td><input id="remember" type="checkbox" name="remember"></td>
                    <td><label for="remember">Remember me</label></td>
                    <td></td>
                </tr> -->
                <tr>
                    <td><a href="./forgetpassword.php">Forget Your Password?</a></td>
                    <td><button class="btn" id="loginsubmit" type="submit" name="login">Login</button></td>
                    <td class="err-msg"></td>
                </tr>
            </tbody>
        </table>
    </form>
</main>
<?php 
include_once '../../../ADMIN/Project/includes/common/footer.php';
footer_section(); ?>