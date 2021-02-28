<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editprofile</title>
    <style>
    .ep {
        display: inline-grid;
        grid-template-columns: 300px 1000px;
        grid-template-rows: 34rem;
        margin-left: 20px;
        padding: 10px;
    }

    .info {
        display: inline-grid;
        grid-template-columns: 400px 200px;
        grid-template-rows: 34rem;

    }

    fieldset {
        padding: 2rem;
        background-color: whitesmoke;
        block-size: 32rem;
        border: 2px solid;
    }

    .val {
        margin-top: 3rem;
        padding: 2rem;
    }

    .pp img {
        height: 26rem;
        padding: 3rem;
        margin-left: 4rem;
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
  } 
  else {
    $name= test_input($_POST["name"]);
    
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
    else{
     
      
      $_SESSION['name']= $name;

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
    <?php include './common/header.php';
    include './common/footer.php';?>

    <div class="ep">
        <!--ep is for Edit profile-->
        <div class="left">

            <?php include './common/Account.php'; ?>
        </div>

        <div class="right">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <!--after clicking submit btn this page will be loaded..-->

                <fieldset>
                    <legend><B>Edit profile</B></legend> <br>

                    <div class="info">
                        <div class="val">
                            Name: <input type="text" name="name">
                            <span class="error">* <?php echo $nameErr;?></span>
                            <br>
                            <hr>
                            E-mail: <input type="text" name="email">
                            <span class="error">* <?php echo $emailErr;?></span>
                            <br>
                            <hr>
                            Gender: <br>
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="other">Other
                            <span class="error">* <?php echo $genderErr;?></span>
                            <br>
                            <hr>

                            Date Of Birth<input type="date" name="birthday">
                            <span class="error">* <?php echo $dobErr;?></span>
                            <br>
                            <hr>
                            <br><br>
                            <input type="submit" name="submit">
                        </div>
                        <div class="pp">
                            <!--pp is for profile picture-->
                            <img src="./page2/pic/mypic.jpg" alt="pro pic">
                        </div>
                    </div>


                </fieldset>
            </form>



        </div>

    </div>



</body>

</html>