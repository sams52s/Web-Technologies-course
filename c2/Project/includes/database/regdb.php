<?php 
     function getdata($Name ,$email, $gender , $address, $userName,$pass,$phone,$dob,$userType)
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
            $SELECT= "SELECT email From reginfo Where email=? Limit 1"; 
            $INSERT ="INSERT Into reginfo (Name,email,gender,address,userName,pass,Phone,dob,userType)values(?,?,?,?,?,?,?,?,?)";
            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param('s',$email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum=$stmt->num_rows;
            if($rnum==0)
            {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssssssbs",$Name,$email, $gender , $address, $userName,$pass,$phone,$dob,$userType);
                $stmt->execute();
                echo"Registration Done";
                echo"";
            }
            else{
                echo"Already an account registard by this mail. New mail id requiared";
            }
            $stmt->close();
            $conn->close();
        }
     }
?>