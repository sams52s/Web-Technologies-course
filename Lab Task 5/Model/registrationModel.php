<?php 
     function getdata($mail,$Name,$UserName,$password,$Gender,$DOB,$Phoneno,$city)
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
            $SELECT= "SELECT mail From labtask6 Where mail=? Limit 1"; 
            $INSERT ="INSERT Into labtask6 (Name,UserName,password,Gender,DOB,Phoneno,city)values(?,?,?,?,?,?,?)";
            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param('s',$mail);
            $stmt->execute();
            $stmt->bind_result($mail);
            $stmt->store_result();
            $rnum=$stmt->num_rows;
            if($rnum==0)
            {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssbss",$Name,$UserName,$password,$Gender,$DOB,$Phoneno,$city);
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