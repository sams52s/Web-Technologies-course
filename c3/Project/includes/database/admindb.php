<?php 
     function getadmindata($email,$userName,$pass)
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
            $SELECT= "SELECT * From reginfo Where email='$email' and pass='$pass'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count==0)
            {
                echo"Email not found".'<br>'."Wrong password";
            }
            else{
               $SELECT= "SELECT * From reginfo Where email='$email' and userName='$userName'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count==0)
            {
                echo"ID not found".'<br>'."wrong user Name";
            }
            else{
                $email= stripcslashes($email);    
                $email = mysqli_real_escape_string($conn, $email);   
                $SELECT= "DELETE From reginfo Where email='$email'"; 
                $result = mysqli_query($conn, $SELECT);
                echo"Delete done";
            }
            }
            }
            $conn->close();
        }
     
?>