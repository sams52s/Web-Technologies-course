<?php 
     function getdata($id,$password)
     {
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="labtask6";
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
            $sql="select * from loginform where id='".$id."' AND password='".$password."' limit 1";
            $result=$conn->query($sql);
            if(mysqli_num_rows($result)==1)
            {
                echo "Login Succesfull.";
                exit();
            }
            else{
                echo"Wrong password";
            }
            $conn->close();
        }
     }
?>