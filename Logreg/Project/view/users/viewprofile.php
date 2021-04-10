<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
require_once '../../includes/common/header.php';
require_once '../../includes/common/navbar.php';
include '../../model/registrationmodel.php';

?>

<body>
    <?php 
$objs =json_decode(file_get_contents('http://localhost/Logreg/Project/includes/json/profile.json'),true);//decode the json file.
//print_r($obj);
$n=$_SESSION["SuserName"];
$vname="";
$vphone="";
$vemail="";
$vuserType="";
$vusername="";
$vgender="";
$vaddresse="";
$vdateOfBirth="";
foreach($objs as $obj)
{
    if($obj["username"]==$n)
                {
                    $vname=$obj["name"];
                    $vphone=$obj["phoneNumber"];
                    $vemail=$obj["email"];
                    $vuserType=$obj["userType"];
                    $vusername=$obj["username"];
                    $vgender=$obj["gender"];
                    $vaddresse=$obj["address"];
                    $vdateOfBirth=$obj["dateOfBirth"];
                }
}
?>
    <table class="table table-hover table-dark" style="height:25rem">
        <tr scope="col">
            <td>Name:
            </td>
            <td class="output">
                <?php 
                echo $vname.'<br>';
            ?>
            </td>
        </tr>
        <tr>
            <td>User Type:
            </td>
            <td class="output">
                <?php 
                echo $vuserType.'<br>';
            ?>
            </td>
        </tr>
        <tr>
            <td>User Name:
            </td>
            <td class="output">
                <?php 
                echo $vusername.'<br>';
            ?>
            </td>
        </tr>
        <tr>
            <td>Phone Number:
            </td>
            <td class="output">
                <?php 
                echo $vphone.'<br>';
            ?>
            </td>
        </tr>
        <tr>
            <td>Email:
            </td>
            <td class="output">
                <?php 
                echo $vemail.'<br>';
            ?>
            </td>
        </tr>
        <tr>
            <td>Gender:
            </td>
            <td class="output">
                <?php 
                echo $vgender.'<br>';

            ?>
            </td>
        </tr>
        <tr>
            <td>Addresse:
            </td>
            <td class="output">
                <?php 
                echo $vaddresse.'<br>';
            ?>
            </td>
        </tr>
        <tr>
            <td>Date Of Birth:
            </td>
            <td class="output">
                <?php 
                echo $vdateOfBirth.'<br>';
            ?>
            </td>
        </tr>

    </table>
</body>
<?php 

require_once '../../includes/common/footer.php';

?>

</html>