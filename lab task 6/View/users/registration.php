<!DOCTYPE HTML>
<html>
<Title> Registration</Title>
<?php 
require '../../Model/linking.php';
require '../common/header.php';
?>

<body>
    <link rel="stylesheet" href="../../Fille/css/registration.css">
    <form action="../../Controller/registrationController.php" method="POST">
        <div class="regfield">
            <fieldset>
                <legend>REGISTRATION:</legend>
                <table>
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name" required></td>
                        <td>Only letters with space, period & dash allowed</td>
                    </tr>
                    <tr>
                        <td>User Name: </td>
                        <td><input type="text" name="userName"></td>
                        <td>At least two words</td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td><input type="password" name="password" required></td>
                        <td>Password must contain at least one of the special characters (@, #, $,%)</td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="confirmPassword" required></td>
                        <td>Retype The Current Password</td>
                    </tr>
                    <tr>
                        <td>Gender :</td>
                        <td>
                            <input type="radio" name="gender" value="f">Female
                            <input type="radio" name="gender" value="m">Male
                            <input type="radio" name="gender" value="o">Other
                        </td>
                        <td> Select gender</td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" name="mail" required></td>
                        <td>Valied Email is required</td>
                    </tr>
                    <tr>
                        <td>Phone no :</td>
                        <td>
                            <input type="phone" name="phone" required>
                        </td>
                        <td>
                            Use Bangladeshi phone Number.
                        </td>
                    </tr>
                    <tr>
                        <td>City: </td>
                        <td><select name="city" required>
                                <option selected hidden value="">Select Your City</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="chattogram">chattogram</option>
                            </select></td>
                        <td>
                            Enter your Current location
                        </td>
                    </tr>
                    <tr>
                        <td>Date Of Birth :</td>
                        <td><input type="date" name="dob"></td>
                        <td>You have to be 18 year old</td>
                    </tr>
                    <tr>
                        <div class="btn">
                            <td></td>
                            <td><input type="submit" value="Submit"></td>
                            <td><input type="reset" value="Reset"></td>
                        </div>
                    </tr>
                </table>
            </fieldset>
        </div>
    </form>

</body>
<?php 

require '../common/footer.php';
?>

</html>