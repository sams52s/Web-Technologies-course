<?php 
class regModel {
    public $flag=0;
    private $Name , $email , $gender , $address , $userName,$pass, $cpass,$phone,$dob,$userType;
    public  $nameErr ,$userNameErr ,$emailErr ,$passErr,$cpassErr,$phoneErr;
      public function __construct($Name , $email , $gender , $address , $userName,$pass, $cpass,$phone,$dob,$userType)
      {
          $this ->Name =$Name;
          $this ->email =$email;
          $this ->gender =$gender;
          $this ->address =$address;
          $this ->userName =$userName;
          $this ->pass =$pass;
          $this ->cpass =$cpass;
          $this ->phone =$phone;
          $this ->dob =$dob;
          $this->userType=$userType;
      }
      public function namevalidation()
      {
        if(strlen($this->Name)<2)
        {
            $this->nameErr = "At least two words needed ".'<br>';
            $this->flag=1;
        }
        else{
            if (!preg_match("/^[a-zA-Z-.' ]*$/",$this->Name)) //name input con checking1..
        {
            $this->nameErr = "Only letters white space, period & dash allowed".'<br>';
          $this->flag=1;
        }
        else{
            $this->nameErr ="";

        }
        }
        return $this->nameErr;
      }
      public function userNamevalidation()
      {
        if(strlen($this->userName)<2)
        {
            $this->userNameErr = "At least two words needed".'<br>';
            $this->flag=1;
        }
        else{
            $this->userNameErr ="";

        }
        return $this->userNameErr;
    }
      public function emailvalidation()
      {if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        $this->flag=1;
        $this->emailErr = "Invalid email format Give valid".'<br>';
      }
      else{

        $this->emailErr="";
    }
    return $this->emailErr;
    }
      public function passvalidation()
      {if(strlen($this->pass)<6)
        {
            $this->passErr = "Password must contain at least 8 char".'<br>';
            $this->flag=1;
        }
        else{
            if(!preg_match("/[@,#,$,%]/",$this->pass))
            {
                $this->flag=1;
                $this->passErr = "Password must contain at least one of the special characters (@, #, $,%)".'<br>';
            }
            else{
                $this->passErr="";

            }
        }
        return $this->passErr;
    }
      public function cpassvalidation()
      {if($this->cpass!=$this->pass)
        {
            $this->cpassErr="Did not match with password.".'<br>';
            $this->flag=1;
        }
        else{
            $this->cpassErr="";

        }
        return $this->cpassErr;
    }
    public function phonevalidation()
      { if(strlen($this->phone)!=11)
        {
            $this->flag=1;
            $this->phoneErr="Phone number must be 0-9 char".'<br>';
        }
        else{

            $this->phoneErr="";
        }
        return $this->phoneErr;
    }
      public function validation()
      {
        $this->namevalidation();
        $this->emailvalidation();
        $this->passvalidation();
        $this->cpassvalidation();
        $this->phonevalidation();
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
      return $this->address;
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
           
        
            'userType'           =>    $this ->userType ,
            'name'               =>    $this ->Name ,
            'username'           =>    $this ->userName, 
            'email'              =>    $this ->email,
            'phoneNumber'        =>    $this ->phone, 
            'password'           =>    $this ->pass, 
            'gender'             =>    $this ->gender, 
            'address'            =>    $this ->address,
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