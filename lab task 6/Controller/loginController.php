<?php 
include '../Model/loginmodel.php';


$id=$_POST['id'];
$password= $_POST['password'];

if(!empty($password)&&!empty($id))
{
    getdata($id,$password);

}
else{
    echo"All field are required";
    die();
}


?>