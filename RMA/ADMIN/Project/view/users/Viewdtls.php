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
include '../../model/registrationmodel.php';
include_once '../../includes/database/dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../includes/css/viewdtls.css">
    <script>
    var userCount = 2;
    var adminCount = 2;
    if (adminCount == 0) {} else {}

    function myf() {
        document.getElementById("text").innerHTML = "One row decreased from view";
        document.getElementById("msg").style.background = "red";
        document.getElementById("text").style.color = " #1a1a1a";
    }

    function myfg() {
        document.getElementById("text").innerHTML = "One row add from view";
        document.getElementById("msg").style.background = "green";
        document.getElementById("text").style.color = " #e6e6e6";
    }

    function dark() {
        document.getElementById("all").style.background = "#1a1a1a";
        document.getElementById("all").style.color = "white";
        document.getElementById("white").disabled = false;
        document.getElementById("drk").disabled = true;
    }

    function white() {
        document.getElementById("all").style.background = "white";
        document.getElementById("all").style.color = "black";
        document.getElementById("white").disabled = true;
        document.getElementById("drk").disabled = false;
    }
    $(document).ready(function() {
        $("#user").click(function() {
            userCount = userCount + 1;
            $("#userv").load("../../includes/ajax/loadUsers.php", {
                commentNewCount: userCount
            });
        });
    });
    $(document).ready(function() {
        $("#userd").click(function() {
            if (userCount == 0) {} else {
                userCount = userCount - 1;
            }
            $("#userv").load("../../includes/ajax/loadUsers.php", {
                commentNewCount: userCount
            });
        });
    });
    $(document).ready(function() {
        $("#adminbtn").click(function() {
            adminCount = adminCount + 1;
            $("#addminv").load("../../includes/ajax/loadAdmin.php", {
                adminNewCount: adminCount
            });
        });
    });
    $(document).ready(function() {
        $("#adminbtnd").click(function() {
            if (adminCount == 0) {} else {
                adminCount = adminCount - 1;
            }
            $("#addminv").load("../../includes/ajax/loadAdmin.php", {
                adminNewCount: adminCount
            });
        });
    });
    </script>
</head>

<body id="all">
    <div class="mood" id="mood">
        <button id="drk" onclick="dark()" class="btn btn-outline-dark">Dark mode</button>
        <button id=" white" onclick="white()" class="btn btn-outline-light">Normal</button>
    </div>
    <div class="msg" id="msg">
        <P id="text"></P>
    </div>
    <div class="viewall">
        <div id="userv">
            <h2>User Info</h2>
            <?php 
    $sql ="SELECT * FROM reginfo LIMIT 2";  
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while ($row = mysqli_fetch_assoc($result) )
        {
            echo "<p>";
            echo "ID : ".$row['id'];
            echo "<br>";
            echo "Name : ".$row['Name'];
            echo "<br>";
            echo "Email : ".$row['email'];
            echo "<br>";
            echo "Gender : ".$row['gender'];
            echo "<br>";
            echo "address: ".$row['address'];
            echo "<br>";
            echo "User Name: ".$row['userName'];
            echo "<br>";
            echo "Phone: ".$row['Phone'];
            echo "<br>";
            echo "</p>";
            echo "<hr>";
        }
    }
    else{
        echo "there are no data";
    }
    ?>
        </div>
        <hr>
        <div id="addminv">
            <h2>Admin Info</h2>
            <?php 
    $sql ="SELECT * FROM admin LIMIT 2";  
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while ($row = mysqli_fetch_assoc($result) )
        {
            echo "<p>";
            echo "Id: ".$row['adminId'];
            echo "<br>";
            echo "Name: ".$row['adminName'];
            echo "<br>";
            echo "User Name: ".$row['adminSname'];
            echo "<br>";
            echo "Email: ".$row['adminEmail'];
            echo "<br>";
            echo "Phone: ".$row['adminPhone'];
            echo "<br>";
            echo "Gender: ".$row['adminGender'];
            echo "<br>";
            echo "</p>";
            echo "<hr>";
        }
    }
    else{
        echo "there are no data";
    }
    ?>
        </div>
    </div>
    <div class="btn">
        <button class="btn btn-outline-success" id="user" onclick="myfg()">Show more user</button>
        <button class="btn btn-outline-danger" id="userd" onclick="myf()">less view user</button>
        <button class="btn btn-outline-success" id="adminbtn" onclick="myfg()">Show more admin</button>
        <button class="btn btn-outline-danger" id="adminbtnd" onclick="myf()">less view admin</button>
    </div>
</body>
<?php 
require_once '../../includes/common/footer.php';
?>

</html>