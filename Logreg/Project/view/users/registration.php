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

include '../../model/registrationmodel.php';

?>

<body>
    <div class="top">
        <h1>Registration</h1>
    </div>
    <div class="regform">
        <form action="../../controller/registrationcontroller.php" method="post">
            <div class="inputfield">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td>
                            <div class="input-field">
                                <input class="reginput" type="text" id="Name" name="Name"
                                    placeholder="Full name of yours" required>
                            </div>
                        </td>
                        <td>Name can not contain anything without alphabets (a-z,A-Z).</td>
                        <td>
                            <p id="errorname"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td>
                            <div class="input-field">
                                <input type="text" id="userName" name="userName" placeholder="Surname of yours"
                                    required>
                            </div>
                        </td>
                        <td>Surname must be more then two latters.</td>
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
                        <td>Have to be valid email address. You can't use same email twice.</td>
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
                        <td>Have to be more then 8 character. Password must contain at least one of the special
                            characters (@, #, $,%)</td>
                        <td>
                            <p id="errorpass"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td>
                            <div class="input-field">
                                <input type="password" id="cpass" name="cpass" placeholder="Confirm password" required>
                            </div>
                        </td>
                        <td>Have to be same as password you have given.</td>
                        <td>
                            <p id="errorcpass"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td>
                            <div class="input-field">
                                <input type="tel" id="phone" name="phone" placeholder="01**********" required>
                            </div>
                        </td>
                        <td>start with 01. Have to be bangladeshi number.</td>
                        <td>
                            <p id="errorphne"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            <input type="text" id="add" name="add" placeholder="Address" required>
                        </td>
                        <td>Your present address</td>
                        <td>
                            <p id="erroradd"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                        <td>
                            <div class="input-field">
                                <input type="date" id="dob" name="dob" required>
                            </div>
                        </td>
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
                    <tr class="UserType">
                        <td>User Type:</td>
                        <td><input type="radio" id="customer" name="userType" value="customer"> customer <br>
                            <input type="radio" id="admin" name="userType" value="admin"> admin <br>
                            <input type="radio" id="rowner" name="userType" value="rowner"> Restaurant Owner<br>
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
                <input onclick="myFunction()" type="checkbox" id="agree" name="agree" value="agree">
                <label for="agree"> I agree with all terms and conditions</label><br>
                <input type="checkbox" id="sm" name="sm" value="sm">
                <label for="sm"> I accept mails</label><br>
            </div>
            <div class="btn">
                <input class="btn btn-outline-success" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <!--<script type="text/javascript" src="../../includes/Javascript/registration.js">
    </script>-->
</body>

<?php 

require_once '../../includes/common/footer.php';

?>

</html>