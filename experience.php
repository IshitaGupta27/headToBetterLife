<?php  session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{
    include './partials/_usernav.php';
}
else
{
    include './partials/_header.php' ;   
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Head To Better Life</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/flaticon.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/exp_style.css">
  </head>
  <body>
	  <!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Head to Better Life</a>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Disease</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Resources</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav> -->
    <!-- END nav -->

    <div class="main">
        <section class="experience">
            <div class="container1">
                <br>
                <h2 class="exp-title">EXPERIENCE</h2>
                <div class="exp-content">
                    <div class="person-image">
                        <img src="images/exp.jpg" alt="Avatar">
                        <!--<br>
                        <p style="text-align: center;">NAME HERE</p>-->
                    </div>
                    <div class="exp-text">
                        <!--<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>-->
                        <figure>
                            <blockquote>
                                The advice I???d give to somebody that???s silently struggling is, you don???t have to live that way. 
                                You don???t have to struggle in silence. You can be un-silent. 
                                You can live well with a mental health condition, as long as you open up to somebody about it,
                                 because it???s really important you share your experience with people so that you can get the 
                                 help that you need.
                                <footer>
                                    <cite>
                                        Demi Lovato
                                    </cite>
                                </footer>
                            </blockquote>
                        </figure>
                    </div>
                </div>
                <br>
            </div>
        </section>
    </div>
    <?php include './partials/_footer.php'?>
    <!-- <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">Head to Better Life</a></h2>
                        <p>???There is hope, even when your brain tells you there isn???t.??? ??? John Green</p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <!-- <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Explore</h2>
                        <ul class="list-unstyled">
                            <li><a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="index.html"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                            <!--<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li>-->
                            <!-- <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li> -->
                        </ul>
                    </div>
                </div>
<!--
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                             <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li> 
                        </ul>
                    </div>
                </div>
            
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <!-- <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li> -->
                                <!--<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+1234567889</span></a></li>
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
    </footer> -->
</body>
</html>
