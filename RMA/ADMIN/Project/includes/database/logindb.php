<?php 
     function getlogdata($email,$userName,$pass)
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
            
            $email= stripcslashes($email);  
            $pass = stripcslashes($pass);  
            $userName = stripcslashes($userName);  
            $email = mysqli_real_escape_string($conn, $email);  
            $pass = mysqli_real_escape_string($conn, $pass);  
            $userName = mysqli_real_escape_string($conn, $userName); 
            $SELECT= "SELECT * From admin Where adminEmail='$email' and adminPassword='$pass'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count==0)
            {
                echo"admin Email not found".'<br>'."Wrong password";
            }
            else{
               $SELECT= "SELECT * From admin Where adminEmail='$email' and adminSname='$userName'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count==0)
            {
                echo"ID not found".'<br>'."wrong user Name";
            }
            else{
                session_start();
                $_SESSION["SuserName"]="$userName";

               // header("Location: https://localhost/c2/Project/includes/database/viewdb.php");
               header("Location: https://localhost/c3/Project/view/users/viewprofile.php");
            }
            }
            }
            $conn->close();
        }
     
?>