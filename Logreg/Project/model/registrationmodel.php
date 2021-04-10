<?php 
class regModel {
    public $flag=0;
    private $Name , $email , $gender , $add , $userName,$pass, $cpass,$phone,$dob,$userType;
    //public  $nameErr =$userNameErr =$emailErr =$passErr=$cpassErr=$phoneErr="";
      public function __construct($Name , $email , $gender , $add , $userName,$pass, $cpass,$phone,$dob,$userType)
      {
          $this ->Name =$Name;
          $this ->email =$email;
          $this ->gender =$gender;
          $this ->add =$add;
          $this ->userName =$userName;
          $this ->pass =$pass;
          $this ->cpass =$cpass;
          $this ->phone =$phone;
          $this ->dob =$dob;
          $this->userType=$userType;
      }
      public function validation()
      {
        if(strlen($this->Name)<2)
        {
            $Name ="";
            $this->flag=1;

        }
        else{
            if (!preg_match("/^[a-zA-Z-.' ]*$/",$this->Name)) //name input con checking1..
        {
          $Name ="";
          $this->flag=1;
        }
    }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->flag=1;
            $email="";
          }
          $objs =json_decode(file_get_contents('http://localhost/Logreg/Project/includes/json/profile.json'),true);//decode the json file.
//print_r($obj);

foreach($objs as $obj)
{
    if($obj["email"]==$obj["email"])
                {
                    $this->flag=1;
                }
}
        if(strlen($this->pass)<6)
        {
            $this->flag=1;
        }
        else{
            if(!preg_match("/[@,#,$,%]/",$this->pass))
            {
                $this->flag=1;
            $pass="";
            }
        }
        if($this->cpass!=$this->pass)
        {
            $this->flag=1;
        }
        if(strlen($this->phone)<11)
        {
            $this->flag=1;
            $phone="";
        }
        return $this->flag;
      }
  public function getName()
  {
      return $this->Name;
  }
  public function getemail()
  {
      return $this->email;
  }
  public function getgender()
  {
      return $this->gender;
  }
  public function getadd()
  {
      return $this->add;
  }
  public function getuserName()
  {
      return $this->userName;
  }
  public function getpass()
  {
      return $this->pass;
  }
  public function getcpass()
  {
      return $this->cpass;
  }
  public function getphone()
  {
      return $this->phone;
  }
  public function getdob()
  {
      return $this->dob;
  }



  public function json()
  {
    if(file_exists('../includes/json/profile.json'))
    {
        $current_data = file_get_contents('../includes/json/profile.json');  //this registration named file is json file where file readed.
       $array_data = json_decode($current_data, true);  //json data decoding here. json decode and encode data so 1st decode and save data.
       $extra = array// giving data as array life set of data.
       (  
           
        
            'userType'                 =>    $this ->userType ,
            'name'               =>    $this ->Name ,
            'username'           =>    $this ->userName, 
            'email'              =>    $this ->email,
            'phoneNumber'        =>    $this ->phone, 
            'password'           =>    $this ->pass, 
            'gender'             =>    $this ->gender, 
            'address'            =>    $this ->add,
            'dateOfBirth'        =>    $this ->dob,  
           );  
       $array_data[] = $extra;  
       $final_data = json_encode($array_data);  //all data taken now time to encode..
       if(file_put_contents('../includes/json/profile.json', $final_data))  
       {  
           
            $message = "<label>Data Recorded Successfully</p>";  
       }  
   }  
   else  
   {  
      $error = 'JSON File not exits';  
      return $error;
   }  
  }
  
}
?>