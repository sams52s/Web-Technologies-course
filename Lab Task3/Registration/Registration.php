<!DOCTYPE HTML>
<html>

<head>
    <!--This style part is only for making similar as qus-->
    <style>
    .Reg {

        margin-right: 50rem;
    }

    .error {
        color: #FF0000;
        /*this is color red*/
    }
    </style>
</head>

<body>

    <?php
    //var creating..
$flag=1;  // this flag is an indecator for json.. whine flag=0 on that time something wrong input happend so that we can't accept that in json.
$nameErr = $emailErr = $genderErr = $dobErr = $name = $email = $dob = $gender = "";
$username = $password = "";
$userNameErr = $passErr = $confirmpassErr = $confirmpass = "";
$message = '';  
$error = ''; 
//chacking all input...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";//if this field id empty 
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) //name input con checking1..
    {
      $nameErr = "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2)//name input con checking2..
     {
      $nameErr = "At least two words needed";
      $name ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";//if this field id empty 
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) //email validation checking
    {
      $emailErr = "Invalid email format Give valid";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["birthday"])) {
    $dobErr = "Date of birth is required";//if this field id empty 
    $flag=0;
  } else {
    $dob = test_input($_POST["birthday"]);//taking dob
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Select gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
  //taking user name or nick name.. same as that name field.

  if (empty($_POST["username"])) {
    $userNameErr = "Give user name or nick name";//if this field id empty 
    $flag=0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username))
     {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
      $flag=0;
    }
    else if (strlen($username)<2) {
      $userNameErr = "At least two charecters needed";
      $username ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["Password"])) {
    $passErr = "Password is required";//if this field id empty 
    $flag=0;
  } else {
    $password = test_input($_POST["Password"]);
    if (strlen($password)<8)
     {
      $passErr = "Password must be 8 charecters";
      $password ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
      $password ="";
      $flag=0;
    }
  }
  if (empty($_POST["confirmpass"])) {
    $confirmpassErr = "Retype The Current Password";//if this field id empty 
    $flag=0;
  } else {
    $confirmpass = test_input($_POST["confirmpass"]);
    if (strcmp($password, $confirmpass)==1) {
      $confirmpassErr = "Password & Retyped Password Dosen't Match";
      $confirmpass ="";
      $flag=0;
    }
  } 
 if ($flag==1)//flag =1 so no invalid input. so all info can be hold in json.
  {
      //this fild is for json...
 	if(isset($_POST["submit"]))  
    {
 	if(file_exists('Registration.json'))
 		{
 			$current_data = file_get_contents('Registration.json');  //this registration named file is json file where file readed.
            $array_data = json_decode($current_data, true);  //json data decoding here. json decode and encode data so 1st decode and save data.
            $extra = array// giving data as array life set of data.
            (  
                 'name'               =>     $_POST['name'],
                 'email'          =>     $_POST["email"],
                 'username'          =>     $_POST["username"],
                 'password'          =>     $_POST["confirmpass"],  
                 'gender'          =>     $_POST["gender"],  
                 'dateOfBirth'     =>     $_POST["birthday"]  
                );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);  //all data taken now time to encode..
            if(file_put_contents('Registration.json', $final_data))  
            {  
                 $message = "<label>Data Recorded Successfully</p>";  
            }  
        }  
        else  
        {  
           $error = 'JSON File not exits';  
        }  
    }
 }
}
//for data manupulation 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <p><span class="error">* required field</span></p>
    <div class="Reg">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!--fieldset is for creating a specific section box where  -->
            <fieldset>
                <!--legend is name of fieldset-->
                <legend>REGISTRATION:</legend>
                Name: <input type="text" name="name">
                <span class="error">* <?php echo $nameErr;?></span>
                <br>
                <hr>
                E-mail: <input type="text" name="email">
                <span class="error">* <?php echo $emailErr;?></span>
                <br>
                <hr>
                User Name: <input type="text" name="username">
                <span class="error">* <?php echo $userNameErr;?></span>
                <br>
                <hr>
                Password: <input type="Password" name="Password">
                <span class="error">* <?php echo $passErr;?></span>
                <br>
                <hr>
                Confirm Password: <input type="Password" name="confirmpass">
                <span class="error">* <?php echo $confirmpassErr;?></span>
                <br>
                <hr>
                <fieldset>
                    <legend>Gender</legend>
                    Gender:
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="other">Other
                    <span class="error">* <?php echo $genderErr;?></span>
                </fieldset>
                <hr>
                <fieldset>
                    <legend>Date Of Birth</legend>
                    <input type="date" name="birthday">
                    <span class="error">* <?php echo $dobErr;?></span>
                    <br>
                </fieldset>
                <hr>
                <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset">

            </fieldset>
        </form>
    </div>
    <?php
    //just for show any worng info or wrong action message...
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
</body>

</html>