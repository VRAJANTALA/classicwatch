<?php
session_start();

include("conn.php");
if (isset($_GET)) {

	$detid = $_GET['id'];
}
$query = "select * from cart where cid=$detid";
$result = mysqli_query($con, $query);
$watch_records = mysqli_num_rows($result);
?>



<?php
include "conn.php";
if (isset($_POST['placeorder'])) {
	$uid = $_SESSION['user_id'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$add = $_POST['address'];
	$pin = $_POST['pincode'];
	$mn = $_POST['phone'];
	$email = $_POST['email'];
	$tot = $_POST['total'];
	$pay = $_POST['payment'];
	$image = "images/" . $_POST['image'];
	$pname = $_POST['Product_name'];
	$pqty = $_POST['Product_quantity'];
	$Product_price = $_POST['Product_price'];
	$query = "INSERT INTO ordersummary(User_id, Name , City , Address , Pincode,PhoneNumber,Email,
Total ,Payment_method,image,Product_name,Product_quantity,Product_price  ) VALUES 
                            ('$uid','$name','$city','$add','$pin','$mn','$email','$tot','$pay','$image','$pname','$pqty','$Product_price')";
	if (mysqli_query($con, $query)) {

		/*echo "<script>alert('order accpected');</script>";
    	*/
		if (isset($_POST['payment'])) {

			switch ($_POST['payment']) {
				case 'Cash on Delivery':

					echo "<script>alert('Payment succesfull')
    			     window.location.assign('myorder.php')</script>";
					/*header("Location: Ordersummary.php");*/
					break;
				case 'Debit Card':
					header("Location: debitcarddetails.php");
					break;
				case 'Credit Card':
					header("Location: creditcard.php");
					break;
				default:
					# code...
					break;
			}
		}
		$query_delete = "DELETE FROM  cart where cid=$detid";
		$result = mysqli_query($con, $query_delete);
	} else {

		header("Location: checkout.php");
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CLASSIC WATCH</title>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
	#sb {
		background: #82AE46;
		color: white;
		border: none;
		height: 42px;
		width: 122px;
		cursor: pointer;

	}
</style>

<body class="goto-here">
	<div class="py-1 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">+91 8401902747</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text">info@classicwatch.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">3-5 Business days delivery &amp; Free Returns</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">CLASSIC WATCH</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="smart_watch_list.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">

							<a class="dropdown-item" href="smart_watch_list.php">Shop</a>

							<a class="dropdown-item" href="cart.php">Cart</a>

						</div>
					</li>


					<li class="nav-item"><a href="contact.php" class="nav-link">Contact US</a></li>
					<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart" style="font-size: 20px"></span></a></li>
					<li class="nav-item"><a class="nav-link link text-black" href="logout.php"><i class='fas fa-sign-out-alt' style="font-size: 20px"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->


	<div class="hero-wrap hero-bread" style="background-image: url(images/bgs1.jpeg);">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<!-- <div class="col-md-9 ftco-animate text-center">
          	
            <h1 class="mb-0 bread"><mark>Profile Page</mark></h1>

          </div> -->
			<div class="col-sm-13 ftco-animate text-center">
				<h2 class="subheading mb-4">
					<font color="red"><b><mark>Checkout Here</mark></b></font>
				</h2>
			</div>
		</div>
	</div>
	</div>

	<section class="ftco-section">
		<form method="POST">
			<div class="container">
				<div class="row justify-content-center">


					<div class="col-xl-7 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
							<div class="row align-items-end">
								<div class="col-md-12">

									<div class="form-group">
										<label for="firstname"> Name</label>
										<input type="text" class="form-control" placeholder="Enter your name" name="name" required="required">
									</div>
								</div>

								<div class="w-100"></div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="streetaddress">City</label>
										<input type="text" name="city" class="form-control" placeholder="Enter your city" required="required">
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="streetaddress">Street Address</label>
										<input type="text" name="address" class="form-control" placeholder="House number and street name" required="required">
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label for="postcodezip">Pincode</label>
										<input type="text" name="pincode" class="form-control" placeholder="Enter your pin code" required="required">
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required="required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="emailaddress">Email Address</label>
										<input type="text" name="email" class="form-control" placeholder="Enter your email" required="required">
									</div>
								</div>
								<div class="w-100"></div>
								<div class="col-md-12">
									<div class="form-group mt-4">

									</div>
								</div>
							</div>
						</form><!-- END -->
					</div>
					<div class="col-xl-5">
						<div class="row mt-5 pt-3">

							<div class="col-md-12 d-flex mb-5">

								<div class="cart-detail cart-total p-3 p-md-4">

									<?php
									// $query_new="select * from categories_types";
									// 				$result_new=mysqli_query($con,$query_new);
									// 				 $watch_records_new=mysqli_num_rows($result_new);

									$query_new = "select * from cart where cid=$detid";
									$result_new = mysqli_query($con, $query_new);
									$watch_records = mysqli_num_rows($result_new);
									
									
									?>
									<?php
									while ($data = mysqli_fetch_array($result_new)) {
										echo "<script>console.log('" . json_encode($data) . "');</script>"; 
									?>


										<h3 class="billing-heading mb-4">Product Total</h3>

										<p class="d-flex">

											<span>Product Image</span>
											<td><img src="<?php echo $data['image'] ?>" name="img"  alt="" ></td><br>


											</td>
										<p class="d-flex">
										
											<span>Product Name</span>
											<span><input type="text"  name="Product_name" value="<?php echo $data['name']; ?>" ></span>


										</p>

										</p>
										<p class="d-flex">

											<span>ProductPrice</span>
											<span><input type="text"  name="Product_price" value="<?php echo $data['pri']; ?>" ></span>

											
										</p>

										<p class="d-flex">

											<span>Product Qunatity</span>
											<span><input type="text"  name="Product_quantity" value="<?php echo $data['qty']; ?>" ></span>

										</p>

										<hr>
										<p class="d-flex total-price">
											<span>Total</span>
											<span><input type="text"  name="total" value="<?php echo $data['tot']; ?>" ></span>

										</p>
									<?php   } ?>

								</div>
							</div>





							<div class="col-md-12">
								<div class="cart-detail p-3 p-md-4">
									<h3 class="billing-heading mb-4">Payment Method</h3>

									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
												<label><input type="radio" class="mr-2" name="payment" value="Cash on Delivery" required="required">Cash on Delivery</label>
											</div>
										</div>
										<div class="col-md-12">
											<div class="radio">
												<label><input type="radio" class="mr-2" name="payment" value="Debit Card" required="required">Debit Card</label>
											</div>
										</div>
										<div class="col-md-12">
											<div class="radio">
												<label><input type="radio" class="mr-2" name="payment" value="Credit Card" required="required">Credit Card</label>
											</div>
										</div>
									</div>



									<p><input type="submit" name="placeorder" value="Place an Order" id="sb"></p>


									<!-- <a class="btn btn-outline-dark btn-lg" href="javascript:void(0)" id="payment_id" onclick="pay_now()"><i class="fas fa-money-bill"></i> Payment</a> -->
								</div>
							</div>
						</div>
					</div>
					<!-- .col-md-8 -->
				</div>

			</div>
		</form>
	</section> <!-- .section -->

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
		<div class="container py-4">
			<div class="row d-flex justify-content-center py-5">
				<div class="col-md-6">
					<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
					<span>Get e-mail updates about our latest shops and special offers</span>
				</div>
				<div class="col-md-6 d-flex align-items-center">
					<form action="#" class="subscribe-form">
						<div class="form-group d-flex">
							<input type="text" class="form-control" placeholder="Enter email address">
							<input type="submit" value="Subscribe" class="submit px-3">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
					<a href="#" class="mouse-icon">
						<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
					</a>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">CLASSIC WATCH</h2>
						<p>Believe In Quality</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="https://twitter.com/hashtag/login"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://en-gb.facebook.com/login/"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/accounts/login/"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">

				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">22 Surypur Industry,Near Podar Arcade,Surat-395006.</span></li>
								<li><a href="contact.php"><span class="icon icon-phone"></span><span class="text">+91 8401902747</span></a></li>
								<li><a href="contact.php"><span class="icon icon-envelope"></span><span class="text">info@classicwatch.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="index.php" target="_blank">CLASSIC WATCH</a>

					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function() {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function(e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function(e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>




	<script>
		function pay_now() {
			var options = {
				"key": "rzp_test_Rtneb7ABLqWv9A", // Enter the Key ID generated from the Dashboard
				"amount": 100,
				"currency": "INR",
				"description": "sa",
				"image": "images/logo/logo.jpeg",
				"handler": function(response) {
					// alert(response.razorpay_payment_id);
					window.location.href = "index.php"
				},
			};
			var rzp1 = new Razorpay(options);
			document.getElementById('payment_id').onclick = function(e) {
				rzp1.open();
				e.preventDefault();
			}
		}
	</script>










</body>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


</html>