<?php
include "conn.php";
session_start();


if (isset($_POST['updatedata'])) {
  $qry='';
  $user_id=$_SESSION['user_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $qry = "update user_master set Name='$name', Email_Id='$email', Mobile_Number='$mobile' , Password='$password' where User_Id='$user_id'";
  $result=mysqli_query($con,$qry);
  echo "<script>alert('Data Updated Succesfully.!');</script>";
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
.avatar {
  margin-bottom:15px;
  width: 99px;
  height: 99px;
  border-radius: 40%;
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
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<?php 
                  $query_new="select * from categories_types";
                  $result_new=mysqli_query($con,$query_new);
                   $watch_records_new=mysqli_num_rows($result_new);


                  ?>
                  <?php
              while($data=mysqli_fetch_array($result_new))
              {
            ?>

                <!-- <a class="dropdown-item" href="smart_watch_list.php">Shop</a> -->
            <a class="dropdown-item" href="smart_watch_list.php?id=<?php echo $data[0]; ?>"><?php  echo $data[1]; ?></a>
          
                    <?php } ?>
                
                
              </div>
            </li>


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
		




	          
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart" style="font-size: 20PX"></span></a></li>
           <?php if(isset($_SESSION['user'])){ ?>
            <?php } ?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    


    <?php 
$user_id=$_SESSION['user_id'];
include ('conn.php');
$qry = "select * from user_master where User_Id='$user_id'";
$result=mysqli_query($con,$qry);
$row = mysqli_fetch_assoc($result);
?>



<div class="hero-wrap hero-bread" style="background-image: url(images/bgs1.jpeg);">
  <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <!-- <div class="col-md-9 ftco-animate text-center">
          	
            <h1 class="mb-0 bread"><mark>Profile Page</mark></h1>

          </div> -->
          <div class="col-sm-13 ftco-animate text-center">
                <h2 class="subheading mb-4"><font color="red"><b><mark>Profile Page</mark></b></font></h2>
                <p><a href="profile.php" class="btn btn-primary">View Details</a></p>
              </div>
        </div>
      </div>
    </div>
      
    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <!-- <div class="w-100" align="center">
            <img src="img_avatar.png" alt="Avatar" class="avatar">
          </div> -->
         
        </div>
        


          <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">


         

            <form method="post"  class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" value="<?php echo $row['Name']?>" required="required" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" value="<?php echo $row['Email_Id']?>" required="required" placeholder="Your Email Id">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="mobile" value="<?php echo $row['Mobile_Number']?>" required="required" placeholder="Contact No">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="password" value="<?php echo $row['Password']?>" required="required" placeholder="Password">
              </div><br>
              <div class="form-group" align="center">
                <input type="submit"  name="updatedata" value="Update Now" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          

            
          
          </div>
         
          <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/logoo.png);" style="background-image: url(images/logoo.png);"><hr>
          </div>
        </div>  







        </div>
      </div>
    </section>
<br>	
		 

    <hr>

	
<br>

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