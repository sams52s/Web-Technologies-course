<?php 
include_once '../../includes/database/dbcon.php';

    $commentNewCount=$_POST['commentNewCount'];

    $sql ="SELECT * FROM reginfo LIMIT $commentNewCount ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    while ($row = mysqli_fetch_assoc($result) )
    {
    echo "<p>";
        echo $row['id'];
        echo "<br>";
        echo $row['email'];
        echo "<br>";
        echo $row['Name'];
        echo "<br>";
        echo $row['gender'];
        echo "<br>";
        echo $row['address'];
        echo "<br>";
        echo $row['userName'];
        echo "<br>";
        echo $row['Phone'];
        echo "<br>";
        echo "</p>";

    }
    }
    else{
    echo"there are no data";
    }
?>