<?php require_once("./controller/deps.php"); ?>
<?php header_section("Registration"); ?>
<?php

$errors_message = [];
$success_message = "";

if (isset($_GET['successfull'])) {
    if ($_GET['successfull'] == "true") {
        // var_dump($_GET);
        $success_message = "Successfully registered";
    }
}

if (isset($_GET['errors'])) {
    $errors_code = explode(",", $_GET['errors']);


    foreach ($errors_code as $error) {
        if ($error == "emptyname") {
            array_push($errors_message, "Empty Name");
        }
        if ($error == "emptyemail") {
            array_push($errors_message, "Empty email");
        }
        if ($error == "emptyadminid") {
            array_push($errors_message, "Empty Admin ID");
        }
        if ($error == "emptywtype") {
            array_push($errors_message, "Empty Worker Type");
        }
        if ($error == "emptyphone") {
            array_push($errors_message, "Empty Phone");
        }
        if ($error == "emptylocation") {
            array_push($errors_message, "Empty Location");
        }
        if ($error == "emptynid") {
            array_push($errors_message, "Empty NID");
        }
        if ($error == "emptyrid") {
            array_push($errors_message, "Empty Restaurent ID");
        }
        if ($error == "emptypassword") {
            array_push($errors_message, "Empty Password");
        }
        if ($error == "emptycpassword") {
            array_push($errors_message, "Empty Confirm Password");
        }
        if ($error == "emptytype") {
            array_push($errors_message, "Empty Type");
        }
        if ($error == "name") {
            array_push($errors_message, "Name must be larger than 2 character, alphanumeric");
        }
        if ($error == "password") {
            array_push($errors_message, "Password must be larger than 8 character, include at least one of them (@, #, $, %)");
        }
        if ($error == "cpassword") {
            array_push($errors_message, "Confirm Password didn't match your Password");
        }
        if ($error == "email") {
            array_push($errors_message, "Invalid Email");
        }
        if ($error == "duplicate") {
            array_push($errors_message, "Duplicate Email address");
        }
        // if ($error == "midnotfound") {
        //     array_push($errors_message, "Management user not found");
        // }
        // if ($error == "gender") {
        //     array_push($errors_message, "Invalid Gender");
        // }
        if ($error == "type") {
            array_push($errors_message, "Invalid Type");
        }
        // if ($error == "dob") {
        //     array_push($errors_message, "Invalid Date Of Birth");
        // }
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
    <form action="./controller/registration.php" method="post">

        <!-- <input type="hidden" name="usertype" value="employee"> -->
        <input type="hidden" name="type" value="user">
        <table>
            <tbody>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input class="inp" id="name" type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input class="inp" id="email" type="text" name="email"></td>
                </tr>
                <!-- <tr>
                    <td><label for="mid">Management ID</label></td>
                    <td><input class="inp" id="mid" type="number" name="mid"></td>
                </tr> -->
                <tr>
                    <td><label for="adminid">Select Admin</label></td>
                    <td>
                        <input id="admin1" type="radio" name="adminid" value="1">
                        <label for="admin1">Rubaiyad</label>

                        <input id="admin2" type="radio" name="adminid" value="2">
                        <label for="admin2">Shams</label>

                        <input id="admin3" type="radio" name="adminid" value="3">
                        <label for="admin3">Sufian</label>

                        <input id="admin4" type="radio" name="adminid" value="4">
                        <label for="admin4">Naimul</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="location">Location</label></td>
                    <td><input class="inp" id="location" type="text" name="location"></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone</label></td>
                    <td><input class="inp" id="phone" type="text" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="nid">NID</label></td>
                    <td><input class="inp" id="nid" type="text" name="nid"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input class="inp" id="password" type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="cpassword">Confirm Password</label></td>
                    <td><input class="inp" id="cpassword" type="password" name="cpassword"></td>
                </tr>
                <!-- <tr>
                    <td><label>Gender</label></td>
                    <td>
                        <input id="male" type="radio" name="gender" value="male">
                        <label for="male">Male</label>

                        <input id="female" type="radio" name="gender" value="female">
                        <label for="female">Female</label>

                        <input id="others" type="radio" name="gender" value="others">
                        <label for="others">Others</label>
                    </td>
                </tr> -->
                <!-- <tr>
                    <td><label>Type</label></td>
                    <td>

                        <input id="restaurant" type="radio" name="type" value="restaurantadmin">
                        <label for="restaurant">Restaurant Admin</label>

                        <input id="management" type="radio" name="type" value="management">
                        <label for="management">Management</label>

                        <input id="user" type="radio" name="type" value="user">
                        <label for="user">User</label>
                    </td>
                </tr> -->
                <!-- <tr>
                    <td><label for="dob">Date Of Birth</label></td>
                    <td><input class="inp" id="dob" type="date" name="dob"></td>
                </tr> -->
                <tr>
                    <td><button class="btn" type="reset">Reset</button></td>
                    <td><button class="btn" id="submit" type="submit" name="registration">Registration</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</main>
<?php

 footer_section(); ?>