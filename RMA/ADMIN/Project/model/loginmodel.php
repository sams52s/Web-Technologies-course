<?php 
class loginModel{
    public $flag=0;
    private  $email ,$pass,$userName;
    //public  $nameErr =$userNameErr =$emailErr =$passErr=$cpassErr=$phoneErr="";
      public function __construct( $email,$pass,$userName)
      {
          $this ->email =$email;
          $this ->pass =$pass;
          $this->userName=$userName;
          include '../includes/database/logindb.php';
          getlogdata($email,$userName,$pass);
      }
}
?>