<!DOCTYPE html>
<html lang="en">
<head>

  <title>Great & Cheaper Game Prices</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  h1.header1{
  		color: #660000;
  }
  h1.header2{
  	background-color: #0000cc;
  	color: #FFF;
  }
  body{

  	font-family: Verdana, Geneva, sans-serif;
	}
  .navbar {
  		margin-bottom: 0;
  		border-radius: 0;
  		background-color: #0000cc;
  		color: #FFF;
  		padding: 1% 0%;
  		font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  		font-size: 1.3em;
  		border: 0;
  }
  .left{

  	float: left;
  }


  .navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav {
  	color: #FFF;
  	background-color: #0000cc;




  }



  .navbar-inverse .navbar-nav li a{

  	color: #D5D5D5;
  }
  .carousel-caption{
  	top: 50%;
  	transform: translateY(-50%);
  	text-transform: uppercase;
  }
  .btn{
  	font-size: 18px;
  	color: #D3D3D3;
  	padding: 12px 22px;
  	background-color: orange;
  	border: 2px solid #FFF;
  }
  .container{
  	margin: 4% auto;
  }
  #icon{
  	max-width: 200px;
  	margin: 1% auto;
  }
  footer{
  	width: 100%;
  	background-color: #0000cc;
  	padding: 5%;
  	color: #FFF;
  }
  .fa{
  	padding: 15px;
  	font-size: 25px;
  	color: #FFF;
  }
  .fa:hover{
  	color: #D5D5D5;
  	text-decoration: none;

  }
  .fa-facebook{
  	color: #365899;
  }
  .fa-twitter{

  	color: #1da1f2
  }
  .color{
  		color: #0000cc;
  		font-size: 5rem;
  }
  div.line{
  	background-color: #0000cc;
  }





  @media (max-width: 900px){
   .fa{
   		font-size: 20px;
   		padding: 10px;
   }
  }


  @media (max-width: 600px){
  	.carousel-caption{
  		display: none;
  	}
  	#icon{
  		max-width: 150px;
  	}
  	h4{
  		font-size: 1.7em;
  	}

  }


  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>

			<div class="collapse navbar-collapse" id="MyNavbar">



				<a class="left" href="home.php"><img src="img/serve.png"></a>
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="home.php">Home</a></li>
						<li class="active"><a href="management.php">Management</a></li>
						<li class="active"><a href="services.php">Services</a></li>
						<li class="active"><a href="product.php">Products</a></li>
						<li class="active"><a href="../../../Game_Shop/index.php">Buy Here!</a></li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a>Contact Us</a></li>
						<li class="active"><a href="#" class="fa fa-facebook"></a></li>
						<li class="active"><a href="#" class="fa fa-twitter"></a></li>
						<li class="active"><a href="#" class="fa fa-google"></a></li>
					</ul>
			</div>
		</div>
	</nav>

	<!--end slider -->
	<div class="container text-center">
		<div class="row">
			<div>
			<h1 class="header2">Home</h1>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="color">Serves</h1>
				<h3>“Serving with quality and sufficiency”</h3>
				<h4>We are a company open to serve the needs of the clients and provide solutions that can help people understand gaming industry.</h4>
				<h1>Mission</h1>
				<h4>Providing High-quality games and becoming a household company.</h4>
				<h1>Vision</h1>
				<h4><li>To satisfy the clients need </li></h4>
				<h4><li>To develop not only the service but also the skills of the employees</li></h4>
				<h4><li>And be known in our field of business</li></h4>
			</div>
			<div class="col-md-6">
				<img src="img/logoserves.png" class="img-responsive">
			</div>
		</div>
	</div>

	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-6">
				<h3> Develop By </h3>
				<br>
				<h4>Kimani Incopperated</h4>
			</div>
			<--<div class="col-sm-">
				<h3>Connect</h3>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
				<a href="#" class="fa fa-youtube"></a>
			</div>-->
			<div class="col-sm-6">
				<img src="img/ironman2.png" class="icon">
			</div>

		</div>
	</footer>


</body>
</html>
