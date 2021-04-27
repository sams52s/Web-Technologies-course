<?php
include 'includes/connect.php';
include 'includes/wallet.php';

  if($_SESSION['customer_sid']==session_id())
  {
    ?>
<!DOCTYPE html>
<html>
<head>
  <title>HOME</title>
  
  <title>LOGIN</title>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <?php include 'model/menu.php';?>
    
<div class="jumbotron">
  <h1>Resturant list</h1>
  <p>You can find easily your favourite ONE</p>
</div>
<section class="my=5">
  <div class="py-5">
  <div>
    <h3 class="text-center">About us</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class= "col-lg-6 col-md-6 col-12">
        <img src="images/img_pic3.jpg" class="img-fluid aboutimg">
      </div>
      <div class= "col-lg-6 col-md-6 col-12">
      <h2 class="display-5">G 1_1resturant.</h2>
      <p class="py-3">importance of restaurant?
              Beyond the basic purpose of restaurants to provide food and drink, restaurants have, historically, fulfilled a human need for connection and shaped social relations. In 21st century American life restaurants occupy an increasingly important place in shaping our overall economy and the nature and makeup of our cities.
              It broadens your potential audience and increases your bottom line. For customers, it's great since it allows them to easily and conveniently place orders whenever they want. Plus, they can be sure that there will be no misunderstandings when they place their orders.</p>
             




</body>
</html>
<?php
  }
  else
  {
    if($_SESSION['admin_sid']==session_id())
    {
      header("location:admin-page.php");    
    }
    else{
      header("location:login.php");
    }
  }
?>