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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../../includes/css/Editprofilestyle.css">
</head>

<body>
    <div class="epb">
        <div class="editp">
            <div class="editdtls">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button onclick="edtname()" id="edtname" class="btn btn-outline-warning" type="button">Edit
                        Name</button>
                    <div class="edtname" id="edtnamef">
                        <p></p>
                        <form action="../../controller/editprofilecontroller.php" method="post">
                            <input type="text" id="Name" name="Name" placeholder="Name of yours">
                            <input id="NameBtn" class="btn btn-outline-success" type="submit" value="Submit">
                        </form>
                    </div>
                    <button onclick="edtuname()" id="edtuname" class="btn btn-outline-warning" type="button">Edit User
                        Name</button>
                    <div class="edtuname" id="edtunamef">
                        <p></p>
                        <form action="#" method="post">
                            <input type="text" id="userName" name="userName" placeholder="Surname of yours">
                            <input id="unamebtn" class="btn btn-outline-success" type="#" value="Submit">
                        </form>
                    </div>
                    <button onclick="edtemail()" id="edtemail" class="btn btn-outline-warning" type="button">Edit
                        Email</button>
                    <div class="editemail" id="edtemailf">
                        <p></p>
                        <form action="#" method="post">
                            <input type="email" id="email" name="email" placeholder="email@">
                            <input id="emailbtn" class="btn btn-outline-success" type="#" value="Submit">
                        </form>
                    </div>
                    <button onclick="edtphn()" id="edtphn" class="btn btn-outline-warning" type="button">Edit phone
                        number</button>
                    <div class="edtphn" id="edtphnf">
                        <p></p>
                        <form action="#" method="post">
                            <input type="tel" id="phone" name="phone" placeholder="01**********">
                            <input id="phnbtn" class="btn btn-outline-success" type="#" value="Submit">
                        </form>
                    </div>
                    <button onclick="edtadd()" id="edtadd" class="btn btn-outline-warning" type="button">Edit
                        Address</button>
                    <div class="edtadd" id="edtaddf">
                        <p></p>
                        <form action="#" method="post">
                            <input type="text" id="add" name="add" placeholder="Address">
                            <input id="addbtn" class="btn btn-outline-success" type="#" value="Submit">
                        </form>
                    </div>
                </div>
                <div class="propic">
                    <div class="d-grid gap-2">
                        <button onclick="edtpic()" id="edtpic" class="btn btn-outline-info type=" button">Chang profile
                            picture</button>
                        <div class="edtpic" id="edtpicf">
                            <p></p>
                            <form action="#" method="post">
                                <input type="text" id="pic" name="pic">
                                <input id="picbtn" class="btn btn-outline-success" type="#" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        document.getElementById("edtnamef").hidden = true;
        document.getElementById("edtunamef").hidden = true;
        document.getElementById("edtemailf").hidden = true;
        document.getElementById("edtphnf").hidden = true;
        document.getElementById("edtaddf").hidden = true;
        document.getElementById("edtpicf").hidden = true;

        function edtname() {
            /*document.getElementById("Name").disabled = false;
            document.getElementById("NameBtn").disabled = false;*/
            document.getElementById("edtnamef").hidden = false;
        }

        function edtuname() {
            document.getElementById("edtunamef").hidden = false;

        }

        function edtemail() {
            document.getElementById("edtemailf").hidden = false;

        }

        function edtphn() {
            document.getElementById("edtphnf").hidden = false;

        }

        function edtadd() {
            document.getElementById("edtaddf").hidden = false;

        }

        function edtpic() {
            document.getElementById("edtpicf").hidden = false;

        }
        </script>
</body>
<?php 

require_once '../../includes/common/footer.php';

?>

</html>