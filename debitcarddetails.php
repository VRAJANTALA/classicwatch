<?php

include "conn.php";
if (isset($_POST['submit'])) {
  $cnum=$_POST['cnum'];
  $cvv=$_POST['cvv'];
  $expdate=$_POST['expdate'];
  $cname=$_POST['cname'];
  
    $query="INSERT INTO `debitcard` ( `cardnumber`, `cvv`, `expdate`, `cname`) VALUES ( '$cnum', '$cvv', '$expdate', '$cname')";
   if (mysqli_query($con,$query)) {
    	
       echo "<script>alert('Payment Suceesfully')
               window.location.assign('myorder.php')</script>";
    
    	
    	

    } 
    else
    {
      header("Location: myorder.php");	
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
    #sb{
      background:#82AE46;
      color:white;
      border:none;
      height: 42px;
      width:122px;
      cursor:pointer;
      
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
            <li class="nav-item">
            <a class="nav-link link text-black" href="profile.php"><i class='fas fa-user-edit' style="font-size: 18px"></i></a>
          </li>

          <li class="nav-item">
            <a class="nav-link link text-black" href="myorder.php"><i class='fas fa-shopping-bag' style="font-size: 18px"></i></a>
          </li>

          <li class="nav-item">
            <a class="nav-link link text-black" href="logout.php"><i class='fas fa-sign-out-alt' style="font-size: 20px"></i></a>
          </li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart" style="font-size: 20PX"></span></a></li>







          </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url(images/bgs1.jpeg);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-sm-13 ftco-animate text-center">
          <h2 class="subheading mb-4">
            <font color="red"><b><mark>Debit Card</mark></b></font>
          </h2>
          <p><a href="debitcard.php" class="btn btn-primary">View Details</a></p>
        </div>
      </div>
    </div>
  </div>

    <section class="ftco-section">
    	<form method="POST" >
      <div class="container">
        <div class="row justify-content-center">
        	
          
          <div class="col-xl-7 ftco-animate">
						<form action="#" class="billing-form">
							<h3 class="mb-4 billing-heading"><b>DebitCard Details</b></h3>

					<div class="row align-items-end">
	          		<div class="col-md-8">
	                <div class="form-group">
	                	<label for="firstname">Card Number</label>
	                  <input type="text" class="form-control" placeholder="---- -------- ----" name="cnum" required="required" pattern="[0-9]{12,16}">
	                </div>
	              </div>
	              <div class="col-md-4">
	                <div class="form-group">
	                	<img src="images/card.jpg" height="55px" width="180px">
	                </div>
                </div>
	          	 
	             
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label >CVV</label>
	                  <input type="password" name="cvv" class="form-control" placeholder="---" required="required">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label >Expiry Date</label>
	                  <input type="month" name="expdate" class="form-control" placeholder="Expiry Date" required="required">
	                </div>
		            </div>
		             
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label >Card On Name</label>
	                  <input type="text" name="cname" class="form-control" placeholder="Card On Name" required="required">
	                </div>
		            </div>
		            
                <div class="col-md-12 " >
                	<div class="form-group mt-4" >

                		<center> <input type="submit" name="submit" value="Place an Order" id="sb" ></center>
										
									</div>
                </div>
               
	            </div>
	          </form><!-- END -->
					</div>
					


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
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="index.php" target="_blank">CLASSIC WATCH</a>
						  
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>