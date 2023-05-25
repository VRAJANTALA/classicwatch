<?php

include "conn.php";
session_start();
if (isset($_POST['sendmsg'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $sub=$_POST['sub'];
  $msg=$_POST['msg'];
  
    $query="INSERT INTO contact_table( Name  ,Email , Subject  , Message   ) VALUES ('$name','$email','$sub','$msg')";
   if (mysqli_query($con,$query)) {
      

      
      echo "<script>alert('Sucessfully Send   Message');</script>";

    } 
    else
    {

      
      echo "<script>alert('Something is wrong try again');</script>";
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
	         
            <?php
            if(isset($_SESSION["user"]))
            {
              ?>
              <li class="nav-item">
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
             <?php
            
            }
            else
            {
                ?>
            
            <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black" href="log_in_page/already_user_page.php"><i style='font-size: 20px' class='fas fa-user-circle'></i></a>
            </li>
            <?php
            }
        ?>
	         
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart" style="font-size: 20px"></span></a></li>
           <?php if(isset($_SESSION['user'])){ ?>
              
            <?php } ?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->



<div class="hero-wrap hero-bread" style="background-image: url(images/bgs1.jpeg);">
<div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <!-- <div class="col-md-9 ftco-animate text-center">
          	
            <h1 class="mb-0 bread"><mark>Profile Page</mark></h1>

          </div> -->
          <div class="col-sm-13 ftco-animate text-center">
                <h2 class="subheading mb-4"><font color="red"><b><mark>Contact Us</mark></b></font></h2>
                <p><a href="contact.php" class="btn btn-primary">View Details</a></p>
              </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> <br> <a>22 Surypur Industry,Near Podar Arcade,Surat-395006.</a> </p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://+919898924242">+91 84019 02747</a></p>
              <p><span>Phone:</span> <a href="tel://+919724137340">+91 81284 46720</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span><br> <a href="mailto:info@yoursite.com">info@classicwatch.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website:</span> <br><a href="#">classicwatch.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">

            <form method="post"  class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" required="required" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" required="required" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="sub" required="required" placeholder="Subject">
              </div>
              <div class="form-group">
                
                <input type="text" class="form-control" name="msg"   cols="30" rows="7"  placeholder="Message" required>
              </div>
              <div class="form-group">
                <input type="submit"  name="sendmsg" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/logoo.png);">
            
          </div>
        </div>
      </div>
    </section>




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