<?php 
     function geteditdata($Name)
     {
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="c2";
        //create connection..
        try{
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
        }
        catch(PDOException $e)
        {
              echo $e->getMessage();
        }
        
        if(mysqli_connect_error())
        {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
        }
        else{
            $Name= stripcslashes($Name);  
            $Name = mysqli_real_escape_string($conn, $Name);
            $SELECT= "SELECT Name From reginfo Where $Name='$Name'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count==0)
            {
                echo"$Name not found";
            }
            else{
               $SELECT= "UPDATE  reginfo SET Name='$Name'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
               header("Location: https://localhost/c2/Project/view/users/viewprofile.php");
            }
            }
            $conn->close();
        }
     
?>