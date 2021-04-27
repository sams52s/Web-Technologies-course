<?php 
class editModel{
    public $flag=0;
    private  $Name ;
    //public  $nameErr =$userNameErr =$emailErr =$passErr=$cpassErr=$phoneErr="";
      public function __construct($Name )
      {
          $this ->$Name  =$Name ;
          include '../includes/database/editdb.php';
          geteditdata($Name);
      }
}
?>