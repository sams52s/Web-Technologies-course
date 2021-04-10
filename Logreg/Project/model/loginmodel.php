<?php 
class loginModel{
    public $flag=0;
    private  $email ,$pass;
    //public  $nameErr =$userNameErr =$emailErr =$passErr=$cpassErr=$phoneErr="";
      public function __construct( $email,$pass)
      {
          $this ->email =$email;
          $this ->pass =$pass;
      }
      public function matching()
      {
      $objs =json_decode(file_get_contents('http://localhost/Logreg/Project/includes/json/profile.json'),true);//decode the json file.
      //print_r($obj);
      
      foreach($objs as $obj)
      {
          if($obj["email"]==$obj["email"])
                      {
                        if($obj["password"]==$obj["password"])
                        {
                            $this->flag=2;
                        }
                        else{
                            $this->flag=1;
                            
                        }
                          
                      }
                      else{
                        $this->flag=0;
                      }
        return $this->flag;
      }
      
    }
}
?>