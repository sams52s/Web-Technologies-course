<?php 
include_once '../../includes/database/dbcon.php';

    $adminNewCount=$_POST['adminNewCount'];

    $sql ="SELECT * FROM admin LIMIT $adminNewCount ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    while ($row = mysqli_fetch_assoc($result) )
    {
        echo "<p>";
        echo $row['adminId'];
        echo "<br>";
        echo $row['adminName'];
        echo "<br>";
        echo $row['adminSname'];
        echo "<br>";
        echo $row['adminEmail'];
        echo "<br>";
        echo $row['adminPhone'];
        echo "<br>";
        echo $row['adminGender'];
        echo "<br>";
        echo "</p>";
    }
    }
    else{
    echo"there are no data";
    }
?>