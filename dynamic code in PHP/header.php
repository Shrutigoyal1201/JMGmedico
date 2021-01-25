<!DOCTYPE html>
<html>
<head>
	<title>JMG</title>
	<!-- CSS only -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- JS, Popper.js, and jQuery -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <!-- CSS only -->
	<link rel="icon" type="" href="img/logo10.jpg" />
	
	<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<!-- JS, Popper.js, and jQuery -->

	<style type="text/css">
		.n{
        	background-image: linear-gradient(to right,#1e3131,#69d6d6);
     	}
		.navbar-nav li
		{
			padding: 0 10px;
		}
		.navbar-nav li a
		{
			font-weight: 600;
			float: right;
			text-align: left;
			margin-right: 15px;
		}
		.logo
		{
			margin:-19% -25%;
		}
		.dropdown:hover>.dropdown-menu 
		{
		  display: block;
		}
		.dropdown>.dropdown-toggle:active 
		{
		  /*Without this, clicking will make it sticky*/
		    pointer-events: none;
		}
	</style>
	
</head>

<body>

	<!--nav start-->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top n">
		<!--anchor tag start-->
		<a href="index.html" class="navbar-brand">
			<img class="img-fluid logo" src="img/logo10.jpg" width="65px">
   		</a><!--anchor tag end-->
		<button class="navbar-toggler" data-toggle="collapse" data-target="#a">
	            <span class="navbar-toggler-icon"></span>
	    </button>
		<!--div start-->
		<div class="collapse navbar-collapse" id="a">
			<!--list tag start-->
			<ul class="navbar-nav ml-auto">
				<li>
					<a href="index.php" class="nav-link text-light">HOME</a>
				</li>
				<li>
					<a href="about.php" class="nav-link text-light">ABOUT US</a>
				</li>
				<li>
					<a href="ourproducts.php" class="nav-link text-light">OUR PRODUCTS</a>
				</li>
				<li>
					<a href="brands.php" class="nav-link text-light">BRANDS AVAILABLE</a>
				</li>
				<li>
					<a href="contact.php" class="nav-link text-light">CONTACT US</a>
				</li>
				<li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          	CONNECT NOW!
		        	</a>
		        	<!--dropdown menu start-->
					<div class="dropdown-menu"aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="tel:9144480962">
						 	<i class="fa fa-phone" aria-hidden="true" style="color:black;font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Call us
						</a>
						<a class="dropdown-item" href="https://wa.link/6hjrok">
							<i class="fa fa-whatsapp" aria-hidden="true" style="color:black;font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Chat with us
						</a>
						<a class="dropdown-item" href="https://www.instagram.com/jaimaagumano/">	
							<i class="fa fa-instagram" style="color:black;font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Join us on instagram
						</a>
						<a class="dropdown-item" href="https://m.facebook.com/HealthandmedicineatJMG/?tsid=0.3179322746523827&source=result">
							<i class="fa fa-facebook-official" style="color:black;font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Join us on facebook	
						</a>
						<a class="dropdown-item" href="mailto:sales.jaimaagumano@gmail.com">
						 	<i class="fa fa-google" aria-hidden="true" style="color:black;font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Send us an Email
						</a>
					</div><!--dropdown menu end-->
				</li>
			</ul><!--list tag end-->
		</div><!--div end-->	
	</nav><!--nav end-->