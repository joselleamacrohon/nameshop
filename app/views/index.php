<!DOCTYPE html>
<html>
<head>
	<title>csp2 - landing page</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<!-- bootstrap	 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script> 

<!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


</head>
<body>

<!-- START NAVBAR -->

<?php require_once("../partials/navbar.php") ?>

<!-- END NAVBAR -->

<main>
	<section class="jumbotron">
		<h1 class="display-4">Pick Click Wear</h1>
		<p class="lead">lorem ipsom hello hi goodbye buy me buy me hugs kisses</p>
		<p>lorem ipsom hello hi goodbye buy me buy me hugs kisses</p>
		<p>
			<a href="#" class="btn btn-info btn-lg" role="button">SHOP NOW</a>
		</p>
	</section>

	<section class="container-fluid">
		<div class="row">
			<div id="new-arrivals1" class="col-md-6">
				<h3>sometext here</h3>
			</div>
			<div id="new-arrivals2" class="col-md-6">
				<h3>sometext here</h3>
			</div>
		</div>
		
	</section>

	<section class="container-fluid" id="featured-products-section">
		<h3>Featured Items</h3>
		<div class="row">
			<div class="col-md-3 featured-products p-0">
				<div class="card">
					<img class="card-img-top featured-product-details-img" src="../assets/images/g.jpg" alt="featured-products">
					<div class="card-body px-0 pb-0">
						<h5 class="card-title featured-product-details-text">Product1</h5>
						<p class="card-text featured-product-details-text">Price</p>
						<a href="#" class="btn btn-info featured-product-details-btn">View Product</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 featured-products p-0">
				<div class="card">
					<img class="card-img-top featured-product-details-img" src="../assets/images/g.jpg" alt="featured-products">
					<div class="card-body px-0 pb-0">
						<h5 class="card-title featured-product-details-text">Product1</h5>
						<p class="card-text featured-product-details-text">Price</p>
						<a href="#" class="btn btn-info featured-product-details-btn">View Product</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 featured-products p-0">
				<div class="card">
					<img class="card-img-top featured-product-details-img" src="../assets/images/g.jpg" alt="featured-products">
					<div class="card-body px-0 pb-0">
						<h5 class="card-title featured-product-details-text">Product1</h5>
						<p class="card-text featured-product-details-text">Price</p>
						<a href="#" class="btn btn-info featured-product-details-btn">View Product</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 featured-products p-0">
				<div class="card">
					<img class="card-img-top featured-product-details-img" src="../assets/images/g.jpg" alt="featured-products">
					<div class="card-body px-0 pb-0">
						<h5 class="card-title featured-product-details-text">Product1</h5>
						<p class="card-text featured-product-details-text">Price</p>
						<a href="#" class="btn btn-info featured-product-details-btn">View Product</a>
					</div>
				</div>
			</div>
			
		</div>
	</section>

	<section class="container-fluid">
			<h3>some text here</h3>
		
		<div class="row text-center">
			<div class="col-md-6 show">
				<h4>some text here</h4>
			</div><div class="col-md-6 show">
				<h4>some text here</h4>
			</div>
		</div>
	</section>
	
</main>


<footer class="bg-dark">
	<section id="footer-mailinglist" class="footer-sections">
		<form class="d-flex justify-content-center align-items-center flex-column">
		<h3 class="text-white">STAY CONNECTED</h3>
		<p class="text-white footer-mailinglist-text">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
		<div class="form-group row mailinglist-form-container">
			<div class="col-11 p-0 m-0">
				<input id="footer-mailinglist-input" type="email" placeholder="        Email Address " required="" name="">
			</div>
			<div class="col-1 p-0 m-0">
				<button id="footer-mailinglist-button"> > </button>
			</div>
		</div>
		</form>
	</section>
	<section id="footer-info" class="footer-sections"></section>
</footer>



<!-- Custom JS -->
<script type="text/javascript" src="../assets/js/script.js"></script>

 <!-- jQuery, Popper.js, and our own JavaScript plugins -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>