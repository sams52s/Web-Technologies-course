<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../../includes/css/registrationstyle.css">
</head>
<?php 
require_once '../../includes/common/header.php';
require_once '../../includes/common/links.php';
require_once '../../includes/common/navbar.php';
include '../../model/registrationmodel.php';
?>

<body>
    <div class="top">
        <h1>Registration</h1>
    </div>
    <div class="regform">
        <form action="" method="post">
            <div class="inputfield">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" id="Name" placeholder="Full name of yours" required></td>
                        <td>Name can not contain anything without alphabets (a-z,A-Z).</td>
                        <td>
                            <p id="errorname"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input onclick="myFunction()" type="text" id="userName" placeholder="Surname of yours"
                                required></td>
                        <td>Surname must be more then two latters.</td>
                        <td>
                            <p id="erroruname"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" id="email" placeholder="email@" required></td>
                        <td>Have to be valid email address. You can't use same email twice.</td>
                        <td>
                            <p id="erroremail"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="pass" placeholder="Password" required></td>
                        <td>Have to be more then 8 character.</td>
                        <td>
                            <p id="errorpass"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" id="cpass" placeholder="Confirm password" required></td>
                        <td>Have to be same as password you have given.</td>
                        <td>
                            <p id="errorcpass"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" id="phone" placeholder="01**********" required></td>
                        <td>start with 01. Have to be bangladeshi number.</td>
                        <td>
                            <p id="errorphne"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" id="add" placeholder="Address" required></td>
                        <td>Your present address</td>
                        <td>
                            <p id="erroradd"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                        <td><input type="date" id="dob" required></td>
                        <td>Enter your birth day</td>
                        <td>
                            <p id="errordob"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" id="male" name="gender" value="male"> Male
                            <input type="radio" id="female" name="gender" value="female"> Female
                            <input type="radio" id="other" name="gender" value="other"> Other
                        </td>
                        <td>Please select your gender</td>
                        <td>
                            <p id="errorgen"></p>
                        </td>
                    </tr>
                </table>
                <br>
                <input class="btn btn-warning" type="reset" value="Reset">
                <br>
                <input type="checkbox" id="agree" name="agree" value="agree">
                <label for="agree"> I agree with all terms and conditions</label><br>
                <input type="checkbox" id="sm" name="sm" value="sm">
                <label for="sm"> I accept mails</label><br>
            </div>
            <div class="btn">
                <a class="btn btn-outline-success" href="./users/registration.php" role="button">Registration</a>
            </div>
        </form>
    </div>
    <script>
    function myFunction() {
        var name = document.getElementById("Name").value;
        var userName = document.getElementById("userName").value;
        var email = document.getElementById("email").value;
        var pass = document.getElementById("pass").value;
        var cpass = document.getElementById("cpass").value;
        if (cpass !== pass) {
            document.getElementById("errorcpass").innerHTML = "Not match";
            document.getElementById("errorcpass").style.background = "red";

        } else {
            document.getElementById("errorcpass").innerHTML = "match";
            document.getElementById("errorcpass").style.background = "green";
        }
        var phone = document.getElementById("phone").value;
        if (phone != 0) {
            document.getElementById("errorphne").innerHTML = "Not match";
            document.getElementById("errorphne").style.background = "red";
        } else {
            document.getElementById("errorphone").innerHTML = " match";
            document.getElementById("errorphone").style.background = "red";
        }
        var add = document.getElementById("add").value;
        var dob = document.getElementById("dob").value;

    }
    </script>
</body>

<?php 
require_once '../../includes/common/footer.php';

?>

</html>