<?php
include "conn.php";
session_start();
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
  #ictb {
    margin-left: 628px;
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
              $query_new = "select * from categories_types";
              $result_new = mysqli_query($con, $query_new);
              $watch_records_new = mysqli_num_rows($result_new);


              ?>
              <?php
              while ($data = mysqli_fetch_array($result_new)) {
              ?>

                <!-- <a class="dropdown-item" href="smart_watch_list.php">Shop</a> -->
                <a class="dropdown-item" href="smart_watch_list.php?id=<?php echo $data[0]; ?>"><?php echo $data[1]; ?></a>

              <?php } ?>


            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link link text-black" href="contact.php">Contact Us</a>
          </li>


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
          <?php if (isset($_SESSION['user'])) { ?>
          <?php } ?>

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
            <font color="red"><b><mark>My Order</mark></b></font>
          </h2>
          <p><a href="myorder.php" class="btn btn-primary">View Details</a></p>
        </div>
      </div>
    </div>
  </div>




  <form method="post" align="center">

    <br><br><br><br>


    <div class="content-wrapper">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <h2 class="page-title"><b>My Order </b></h2><br>

            <div class="panel panel-default"><br>
              <div class="panel-body">

                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" align="center" width="150%">
                  <thead align="center">
                    <tr>

                      <th>
                        <h6><b>Name</b></h6>
                      </th>
                      <th>
                        <h6><b>City</b></h6>
                      </th>
                      <th>
                        <h6><b>Address</b></h6>
                      </th>
                      <th>
                        <h6><b>Pincode</b></h6>
                      </th>
                      <th>
                        <h6><b>Contect Number</b></h6>
                      </th>
                      <th>
                        <h6><b>Email</b></h6>
                      </th>
                      <th>
                        <h6><b>Product Name</b></h6>
                      </th>
                      <th>
                        <h6><b>Product Quantity</b></h6>
                      </th>
                      <th>
                        <h6><b>Product Price</b></h6>
                      </th>
                      <th>
                        <h6><b>Total</b></h6>
                      </th>
                      <th>
                        <h6><b>Payment Method</b></h6>
                      </th>
                      <th>
                        <h6><b>Return Order</b></h6>
                      </th>
                      <th>
                        <h6><b>Cancle Order</b></h6>
                      </th>

                      <!-- <th><b>Address</b></th>

											<th><b>Address</b></th>
                      <th><b>Pincode</b></th>
                      <th><b>Contect Number</b></th>
											<th><b>Email</b></th>
                      <th><b>Product Name</b></th>
                      <th><b>Product Quantity</b></th>
                      <th><b>Product Price</b></th>
                      <th><b>Total</b></th>
											<th><b>Payment Method</b></th>
                      <th><b>Cancle Order</b></th> -->

                    </tr>
                    <?php
                    $uid = $_SESSION['user_id'];
                    echo "<script>console.log('" . json_encode($uid) . "');</script>";
                    $sql = mysqli_query($con, "select user_master.User_id,ordersummary.* from  user_master,ordersummary where  ordersummary.User_id= user_master.User_id and ordersummary.User_id= $uid	");
                    while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                      <th><?php echo $row['Name'] ?></th>
                      <th><?php echo $row['City'] ?></th>
                      <th><?php echo $row['Address'] ?></th>
                      <th><?php echo $row['Pincode'] ?></th>
                      <th><?php echo $row['PhoneNumber'] ?></th>
                      <th><?php echo $row['Email'] ?></th>
                      <th><?php echo $row['Product_name'] ?></th>
                      <th><?php echo $row['Product_quantity'] ?></th>
                      <th><?php echo $row['Product_price'] ?></th>
                      <th><?php echo $row['Total'] ?></th>
                      <th><?php echo $row['Payment_method'] ?></th>
                      <th> <a href="return.php?id=<?php echo $row["User_id"]; ?>" style="color:RED"><b>Return </b></a></th>
                      <th> <a href="cancle.php?id=<?php echo $row["User_id"]; ?>" style="color:RED"><b>Cancle</b></a></th>


                      </tr> 
                    <?php } ?>
                    <tr>

                  </thead>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </form>










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

</body>

</html>