<?php 
class adminModel{
    private  $email;
    //public  $nameErr =$userNameErr =$emailErr =$passErr=$cpassErr=$phoneErr="";
      public function __construct( $email,$userName,$pass)
      {
          $this ->email =$email;
          include '../includes/database/admindb.php';
          getadmindata($email,$userName,$pass);

      }
}
?>