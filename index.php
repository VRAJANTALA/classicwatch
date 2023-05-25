
<?php
include("conn.php");
session_start();
$query="select * from categories_types";
$result=mysqli_query($con,$query);
 $watch_records=mysqli_num_rows($result);

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
  <body class="goto-here">
<style>
.avatar {
  margin-bottom:15px;
  width: 21px;
  height: 18px;
  border-radius: 40%;
}

</style>
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
    						    <span class="text">info@classicwatch.com
    </span>
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
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <?php
              while($data=mysqli_fetch_array($result))
              {
            ?>

              	<!-- <a class="dropdown-item" href="smart_watch_list.php">Shop</a> -->
				  	<a class="dropdown-item" href="smart_watch_list.php?id=<?php echo $data[0]; ?>"><?php  echo $data[1]; ?></a>
					
                    <?php } ?>
            
                
              </div>
            </li>
              
            <?php
            if(isset($_SESSION["user"]))
            {
              ?>
              <li class="nav-item">
            </li>

                <!-- <li class="nav-item">
                     <a class="nav-link link text-black" href="myorder.php">My Order</a>
                </li> -->
                <li class="nav-item">
                     <a class="nav-link link text-black" href="contact.php">Contact Us</a>
                </li>

                

                <li class="nav-item">
                     <a class="nav-link link text-black" href="profile.php"><i class='fas fa-user-edit'  style="font-size: 18px"></i></a>
                </li>

                <li class="nav-item">
                     <a class="nav-link link text-black" href="myorder.php"><i class='fas fa-shopping-bag'  style="font-size: 18px"></i></a>
                </li>
                
                <li class="nav-item">
                     <a class="nav-link link text-black" href="logout.php"><i class='fas fa-sign-out-alt'  style="font-size: 20px"></i></a>
                </li>

                


             <?php
            
            }
            else
            {
                ?>
                <!-- <li class="nav-item">
                    <a class="nav-link text-black" href="log_in_page/already_user_page.php">Login / Sign Up</a>
                </li> -->
                <li class="nav-item">
                  <a href="contact.php" class="nav-link">Contact US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="log_in_page/already_user_page.php"><i style='font-size: 20px' class='fas fa-user-circle'></i></a>
                </li>
                <?php
            }
        ?>
	          
            <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><i style='font-size: 20px' class='icon-shopping_cart'></i></a> </li>
	          <!-- <li class="nav-item "><a href="profile.php" class="nav-link">
<span  style="font-size: 15px"><img src="img_avatar.png" alt="Avatar" class="avatar"/></span></a></li> -->
            <?php if(isset($_SESSION['user'])){ ?>

              <?php } ?>
              <!-- <li class="nav-item"><a href="AT/loginform.php" class="nav-link">Admin</a></li> -->

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/imgg1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2"><font size='30' color="red"><b><mark>SMART WATCH</mark></b></font></h1>
	              <h2 class="subheading mb-4"><font color="red"><b><mark>Apple,Samsung,Fossil,Oneplus,Fastrack,Fitbit</mark></b></font></h2>
	              <p><a href="smart_watch_list.php" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

        

	      <div class="slider-item" style="background-image: url(images/imgg2.jpeg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            

              <div class="col-sm-13 ftco-animate text-center">
                <h1 class="mb-2"><font size='30' color="red"><b><mark>PREMIUM WATCH</mark></b></font></h1>
                <h2 class="subheading mb-4"><font color="red"><b><mark>Rolex,Rado,Hublot,Cartier,Breitling</mark></b></font></h2>
                <p><a href="premium_watch.php" class="btn btn-primary">View Details</a></p>
              </div>


	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over Rs.500</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Brand New</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" height="100px" width="100px" style="background-image: url(images/logoo.png);">
									<div class="text text-center">
										<h2>Unique Collection Of Watch </h2>
										
										<p><font color="green"><h5>Believe In Quality</h5></font></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"  style="background-image: url(images/cat1.png);" >
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="premium_watch.php">Premium Watch</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/cart2.png);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="smart_watch_list.php">Smart Watch</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/cat3.png);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="steel_belt_watch.php">Steel Belt Watch</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/cat4.png);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="leather_watch.php">Leather Watch</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    
		
		 

    <hr>

	

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Website</h2>
          	<span>Get e-mail updates about our latest watch and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address" required>
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
    
  </body>
</html>