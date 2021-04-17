<?php 
session_start();
if(isset($_SESSION["SuserName"]))
{

}
else{
  //  header("Location: https://localhost/c2/Project/view/users/login.php");
}

require_once '../../includes/common/header.php';
require_once '../../includes/common/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../../includes/css/registrationstyle.css">
</head>

<body>
    <div class="addmin">
        <div class="del">
            <form action="../../controller/admincontroller.php" method="post">
                <div class="inputfield">
                    <table>
                        <tr>
                            <td>User Name:</td>
                            <td>
                                <div class="input-field">
                                    <input type="text" id="userName" name="userName" placeholder="Surname of yours"
                                        required>
                                </div>
                            </td>
                            <td>Give user name</td>
                            <td>
                                <p id="erroruname"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <div class="input-field">
                                    <input type="email" id="email" name="email" placeholder="email@" required>
                                </div>
                            </td>
                            <td>Give email</td>
                            <td>
                                <p id="erroremail"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td>
                                <div class="input-field">
                                    <input type="password" id="pass" name="pass" placeholder="Password" required>
                                </div>
                            </td>
                            <td>Give Password</td>
                            <td>
                                <p id="errorpass"></p>
                            </td>
                        </tr>

                        <br>
                        <tr>
                            <td></td>
                            <td><input class="btn btn-warning" type="reset" value="Reset"></td>
                        </tr>
                        <br>
                        <tr>
                            <td></td>
                            <td>
                                <div class="btn">
                                    <input class="btn btn-outline-success" type="submit" value="Submit">
                                </div>
                            </td>
                        </tr>
                </div>
                <tr>
                    <td>

                    </td>
                    <td>
                        <div class="add">
                            <a class="btn btn-outline-dark" href="./registration.php">Add User</a>
                        </div>
                    </td>
                </tr>

                </table>
            </form>
        </div>


    </div>

</body>
<?php 
require_once '../../includes/common/footer.php';
?>

</html>