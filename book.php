<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php

  session_start(); 

    $server="localhost";
    $username="root";
    $password="";
    $database="headtobetterlife";

    $con= mysqli_connect($server,$username,$password,$database);
    $sql="select * from Books";
    //mysqli_select_db($con, $database);
    $query= mysqli_query($con, $sql);
    $number =1;    
    ?>

<body>

<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <!-- <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a> -->
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a> -->
                        <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a> -->
                        <!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a> -->
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-paper-plane mr-1">headtobetterlife@gmail.com</span></a>
                        <!-- <span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Head To Better Life</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Diseases</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Resources</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Groups</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="hero-wrap " style="background-image: url('images/book.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">

<!--         <h1 style="text-align:center;color:aliceblue">“Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers.”
        </h1> -->
    </div>
</div>


<div class="container" style="padding: 2rem 0rem; right: margin 10%;">
    <h1 style="text-align:center;color:black">Books Available</h1>
    <div class="row justify-content-between">
        <!-- col-12 col-sm-8 col-lg-5 -->
        <div class=" col-12 col-sm-8 col-lg-5 ">
        <?php

while($row = mysqli_fetch_array($query))
{ 
    $name = $row['BOOK_NAME'];
    $abst = $row['ABSTRACT'];
    $url = $row['URL'];
    ?>
  <div class="list-group">
  <a href="<?php echo $url; ?> " class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
      <div class="flex-column">
   <h5>  <?php echo $name; ?>  </h5>
          <p><small><?php echo $abst; ?> </small></p>
          <span class="badge badge-info badge-pill"><?php echo $url; ?></span>
      </div>
      <!--<div class="image-parent" style="max-width: 70px;">
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="img-fluid" alt="quixote">
      </div>-->
  </a>
  <!--<a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
      <div class="flex-column">
      <h5><?php //echo $name; ?></h5>
      <p><small><?php //echo $abst;?></small></p>

          <span class="badge badge-primary badge-pill"><?php// echo $url; ?></span>
      </div>
      <div class="image-parent" style="max-width: 70px;">
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/as_I_lay.jpg" class="img-fluid" alt="lay">
      </div>
  </a>
  <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center ">
      <div class="flex-column">
      <h5><?php //echo $name; ?></h5>
      <p><small><?php //echo $abst;?></small></p>

          <span class="badge badge-primary badge-pill"><?php //echo $url; ?></span>
      </div>
      <div class="image-parent" style="max-width: 70px;">
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/things_fall_apart.jpg" class="img-fluid" alt="things">
      </div>
  </a>
</ul>-->
<!--<div class=" col-12 col-sm-8 col-lg-5">
                <ul class="list-group">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div class="flex-column">
                        <h5><?php //echo $name; ?></h5>
                        <p><small><?php// echo $abst;?></small></p>
                  
                            <span class="badge badge-primary badge-pill"><?php// echo $url; ?></span>
                         </div>
                        <div class="image-parent" style="max-width: 70px;">
                            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="img-fluid" alt="quixote">
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div class="flex-column">
                        <h5><?php //echo $name; ?></h5>
                        <p><small><?php //echo $abst;?></small></p>
                  
                            <span class="badge badge-primary badge-pill"><?php //echo $url; ?></span>
                         </div>
                        <div class="image-parent" style="max-width: 70px;">
                            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/as_I_lay.jpg" class="img-fluid" alt="lay">
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center ">
                        <div class="flex-column">
                        <h5><?php //echo $name; ?></h5>
                        <p><small><?php //echo $abst;?></small></p>
                  
                            <span class="badge badge-primary badge-pill"><?php //echo $url;?></span>
                         </div>
                        <div class="image-parent" style="max-width: 70px;">
                            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/things_fall_apart.jpg" class="img-fluid" alt="things">
                        </div>
                    </a>
                </ul>-->
                <?php
                $number++;
} ?>
        </div>
        </div>
        </div>
    </div>

    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
        <li class="page-item"><a class="active" href="http://localhost/headtobetterlife/book.php">1</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/headtobetterlife/book1.php">2</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/headtobetterlife/book2.php">3</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/headtobetterlife/book3.php">4</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/headtobetterlife/book4.php">5</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost/headtobetterlife/book5.php">Next</a></li>
    </ul>



    <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">Head To Better Life</a></h2>
                        <p>“There is hope, even when your brain tells you there isn’t.” ― John Green</p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <!-- <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Explore</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li>
                            <!-- <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <!-- <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <!-- <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li> -->
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+1234567889</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">headtobetterlife@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <p class="mb-0" style="color: rgba(255,255,255,.5);">
                            @We take all responsibilty of our customers data privacy.

                        </p>
                    </div>
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
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
