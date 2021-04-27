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
    <title>AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../includes/css/viewdtls.css">
    <script>
    var userCount = 2;
    var adminCount = 2;
    if (adminCount == 0) {} else {}

    function myf() {
        document.getElementById("text").innerHTML = "Information Decreased";
        document.getElementById("msg").style.background = "black";
        document.getElementById("text").style.color = " white";
    }

    function myfg() {
        document.getElementById("text").innerHTML = "Showing Next Information";
        document.getElementById("msg").style.background = "black";
        document.getElementById("text").style.color = "white";
    }

    
    
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

    
    <div class="msg" id="msg">
        <P id="text"></P>
    </div>
    <div class="viewall">
        
        <hr>
        <h2>Worker Information</h2>
        <div id="addminv">
           
            <?php 
    $sql ="SELECT * FROM admin LIMIT 3";  
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
        echo "No Information Left";
    }
    ?>

        </div>

    </div>
    <div class="btn">
       
        <button  id="adminbtn" onclick="myfg()">Show More </button>
        <button  id="adminbtnd" onclick="myf()">Show Less</button>
    </div>




</body>


</html>