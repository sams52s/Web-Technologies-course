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
	
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img_pic.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img_pic1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img_pic2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
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
              <a href="about.php" class="btn btn-success"> check More </a>
          </div>
	<section class="my=5">
		<div class="py-5">
	
		<h3 class="text-center">OUR SERVICES (RESTURANTS IN DHAKA CITY)</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
  	<img class="card-img-top" src="images/img_pic4.jpg" alt="Card image">
					<div class="card-body">
    				<h4 class="card-title">Al Fresco</h4>
    				<p class="card-text">Alfresco is a famous and familiar restaurant for Fast Food, Chinese, Thai, Italian
Food & Pizza . At present we have 4 branches in Dhaka. We promises to deliver ...</p>
    				<a href="https://m.facebook.com/Alfrescorooftop/" class="btn btn-primary">See Profile</a>
  				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
  	<img class="card-img-top" src="images/img_pic6.jpg" alt="Card image">
					<div class="card-body">
    				<h4 class="card-title">DINN</h4>
    				<p class="card-text">| DINN! is an Italian design innovation firm ... /dɪnn/ is the mix between Design and Innovation. It's the sound of a brilliant idea.</p>
    				<a href="https://www.facebook.com/bddinn/" class="btn btn-primary">See Profile</a>
  				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
  	<img class="card-img-top" src="images/img_pic5.jpg" alt="Card image">
					<div class="card-body">
    				<h4 class="card-title">ChA TIME</h4>
    				<p class="card-text">Chatime is a Taiwanese global franchise teahouse chain based in Zhubei. Chatime is the largest teahouse franchise in the world. Its expansion and growth model is through franchising. It operates 2500+ outlets in 38 countries..</p>
    				<a href="https://www.facebook.com/chatimebd/" class="btn btn-primary">See Profile</a>
  				</div>
			</div>
		</div>

	</div>
</div>
<section class="my=5">
	<div class="py-5">
		<h2 class="text-center">Resturant Food Gellary</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img_pic.jpg" class="img-fluid pb-3">

			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img_pic.jpg" class="img-fluid pb-3">
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img_pic.jpg" class="img-fluid pb-3">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img_pic.jpg" class="img-fluid pb-3">
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img_pic.jpg" class="img-fluid pb-3">
				
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img_pic.jpg" class="img-fluid pb-3">
				
			</div>
		</div>
	</div>

</section>
<section class="my=5">
	<div class="py-5">
		<h2 class="text-center">Contact US</h2>

</div>

<div class="w-50 m-auto">
	 <form action="userinfo.php" method="post">
	 	<div class="form-group">
	 		<label>Username</label>
	 		<input type="text" name="user" autocomplete="off"
	 		class="form-control">
	 	</div>
	 		 	<div class="form-group">
	 		<label>Email</label>
	 		<input type="text" name="email" autocomplete="off"
	 		class="form-control">
	 		</div>
	 			 	<div class="form-group">
	 		<label>Moblie</label>
	 		<input type="text" name="mobile" autocomplete="off"
	 		class="form-control">
	 	
	 	</div>
	 	<div class="form-group">
	 		<label>Comments</label>
	 		<textarea class="form-control" name="comments">
	 		</textarea>
	 	</div>
	 	<button type="submit" class="btn btn-success">Submit</button>
	 </form>
	</div>
</section>
<?php include 'model/footer2.php';?>

        <a href="routers/logout.php"class="btn btn-primary">Logout</a>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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