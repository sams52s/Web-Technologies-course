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
                                    placeholder="Full name of yours">
                            </div>
                        </td>
                        <!--<td>Name can not contain anything without alphabets (a-z,A-Z).</td>-->
                        <td>
                            <p id="errorname"> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td>
                            <div class="input-field">
                                <input type="text" id="userName" name="userName" placeholder="Surname of yours">
                            </div>
                        </td>
                        <!--<td>Surname must be more then two latters.</td>-->
                        <td>
                            <p id="erroruname"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <div class="input-field">
                                <input type="email" id="email" name="email" placeholder="email@">
                            </div>
                        </td>
                        <!--<td>Have to be valid email address. You can't use same email twice.</td>-->
                        <td>
                            <p id="erroremail"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>
                            <div class="input-field">
                                <input type="password" id="pass" name="pass" placeholder="Password">
                            </div>
                        </td>
                        <!--<td>Have to be more then 8 character. Password must contain at least one of the special
                            characters (@, #, $,%)</td>-->
                        <td>
                            <p id="errorpass"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td>
                            <div class="input-field">
                                <input type="password" id="cpass" name="cpass" placeholder="Confirm password">
                            </div>
                        </td>
                        <!--<td>Have to be same as password you have given.</td>-->
                        <td>
                            <p id="errorcpass"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td>
                            <div class="input-field">
                                <input type="tel" id="phone" name="phone" placeholder="01**********">
                            </div>
                        </td>
                        <!-- <td>start with 01. Have to be bangladeshi number.</td>-->
                        <td>
                            <p id="errorphne"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            <input type="text" id="add" name="add" placeholder="Address" required>
                        </td>
                        <!--<td>Your present address</td>-->
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
                        <!--<td>Enter your birth day</td>-->
                        <td>
                            <p id="errordob"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" id="gender" name="gender" value="male"> Male
                            <input type="radio" id="gender" name="gender" value="female"> Female
                            <input type="radio" id="gender" name="gender" value="other"> Other
                        </td>
                        <!--<td>Please select your gender</td>-->
                        <td>
                            <p id="errorgen"></p>
                        </td>
                    </tr>
                    <tr class="UserType">
                        <td>User Type:</td>
                        <td><input type="radio" id="userType" name="userType" value="customer"> customer <br>
                            <input type="radio" id="userType" name="userType" value="admin"> admin <br>
                            <input type="radio" id="userType" name="userType" value="rowner"> Restaurant Owner<br>
                        </td>
                        <!--<td>Please select your User Type</td>-->
                        <td>
                            <p id="errorut"></p>
                        </td>
                    </tr>
                </table>
                <br>
                <input class="btn btn-warning" type="reset" value="Reset">
                <br>
                <input onclick="myFunction()" type="checkbox" id="agree" name="agree" value="agree">
                <label for="agree">All Information filled</label><br>
               
            </div>
            <div class="btn">
                <input id="myBtn" class="btn btn-outline-success" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <!-- <script>
    function go() {
        var userName = document.getElementById("userName").value;
        var name = document.getElementById("Name").value;
        var email = document.getElementById("email").value;
        var pass = document.getElementById("pass").value;
        var cpass = document.getElementById("cpass").value;
        var phone = document.getElementById("phone").value;
        var add = document.getElementById("add").value;
        var dob = document.getElementById("dob").value;
        var params = new URLSearchParams();
        params.append("userNamet", userName);
        params.append("name", name);
        params.append("email", email);
        params.append("pass", pass, "cpass", cpass);
        params.append("phone", phone);
        params.append("add", add);
        params.append("dob", dob);
        var url = "https://localhost/c2/Project/includes/Javascript/registration.js" + params.toString();
        location.href = url;
    }
    function un() {
        document.getElementById("erroruname").innerHTML = userName;
    }-->
    <script>
    var down = document.getElementById("errordob");

    function gfg() {
        var date =
            document.getElementById("dob").value;
        var inpDate = new Date(date);
        var currDate = new Date();

        if (inpDate.setHours(0, 0, 0, 0) ==
            currDate.setHours(0, 0, 0, 0)) {
            down.innerHTML =
                "The input date is today's date";
            document.getElementById("errordob").style.background = "red";
        } else {
            if (inpDate.setHours(0, 0, 0, 0) >
                currDate.setHours(0, 0, 0, 0)) {
                down.innerHTML =
                    "The input date is Not valid";
                document.getElementById("errordob").style.background = "red";
            } else {
                if (inpDate.setHours(0, 0, 0, 0) <
                    currDate.setHours(0, 0, 0, 0)
                ) {
                    down.innerHTML =
                        "The input date is  18 yead old ok";
                    document.getElementById("errordob").style.background = "green";
                }
            }
        }
    }

    function myFunction() {
        var userName = document.getElementById("userName").value;
        var unlenght = userName.length;
        var name = document.getElementById("Name").value;
        var email = document.getElementById("email").value;
        var pass = document.getElementById("pass").value;
        var cpass = document.getElementById("cpass").value;
        var phone = document.getElementById("phone").value;
        var address = document.getElementById("add").value;
        var dob = document.getElementById("dob").value;
        /*  var gender = document.getElementsById("gender").value;
          var userType = document.getElementsById("userType").value;
         if (userType == "" || userType == null) {
            document.getElementById("errorut").innerHTML = "Can Not be empty";
            document.getElementById("errorut").style.background = "red";
            document.getElementById("agree").checked = false;
        } else {
            document.getElementById("errorut").innerHTML = "valid";
            document.getElementById("errorut").style.background = "green";
        }
        if (gender == "" || gender == null) {
            document.getElementById("errorgen").innerHTML = "Can Not be empty";
            document.getElementById("errorgen").style.background = "red";
            document.getElementById("agree").checked = false;
        } else {
            document.getElementById("errorgen").innerHTML = "valid";
            document.getElementById("errorgen").style.background = "green";
        }
*/
if (userName == "" || userName == null) {
            alert("User Name Can not be empty")
        }
        if (name == "" || name == null) {
            document.getElementById("errorname").innerHTML = "Can Not be empty";
            document.getElementById("errorname").style.background = "white";
            document.getElementById("agree").checked = false;
        } else {
            if (name.match(/[0-9]/g)) {
                document.getElementById("errorname").innerHTML = "Numerical value not allowed";
                document.getElementById("errorname").style.background = "white";
                document.getElementById("agree").checked = false;
            } else {
                document.getElementById("errorname").innerHTML = "valid";
                document.getElementById("errorname").style.background = "white";
            }

        }
        if (unlenght < 2) {
            document.getElementById("erroruname").innerHTML = "length mus be more then 2";
            document.getElementById("erroruname").style.background = "white";
            document.getElementById("agree").checked = false;
        } else {
            document.getElementById("erroruname").innerHTML = "valid";
            document.getElementById("erroruname").style.background = "white";
        }
        if (pass == "" || pass == null || cpass == "" || cpass == null) {
            document.getElementById("errorpass").innerHTML = "Can Not be empty";
            document.getElementById("errorcpass").innerHTML = "Can Not be empty";
            document.getElementById("errorpass").style.background = "white";
            document.getElementById("errorcpass").style.background = "white";
            document.getElementById("agree").checked = false;
        } else {
            if (pass.length < 8) {
                document.getElementById("errorpass").innerHTML = "Not valid";
                document.getElementById("errorpass").style.background = "white";
                document.getElementById("agree").checked = false;
            } else {
                document.getElementById("errorpass").innerHTML = "valid";
                document.getElementById("errorpass").style.background = "white";
            }

            if (cpass !== pass) {
                document.getElementById("errorcpass").innerHTML = "Not match";
                document.getElementById("errorcpass").style.background = "white";
                document.getElementById("agree").checked = false;
            } else {
                document.getElementById("errorcpass").innerHTML = "match";
                document.getElementById("errorcpass").style.background = "white";
            }
        }
        if (phone.length != 11) {
            document.getElementById("errorphne").innerHTML = "Not valid";
            document.getElementById("errorphne").style.background = "white";
            document.getElementById("agree").checked = false;
        } else {
            document.getElementById("errorphne").innerHTML = "valid";
            document.getElementById("errorphne").style.background = "white";
        }
        if (document.getElementById("agree").checked == false) {
            document.getElementById("myBtn").disabled = true;
        } else {
            document.getElementById("myBtn").disabled = false;
        }

    }
    </script>
</body>
<?php 
require_once '../../includes/common/footer.php';
?>

</html>