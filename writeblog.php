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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/flaticon.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/wrblogstyle.css">


    <title>Blog</title>

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

  <div class="content">
    
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <h3 class="mb-3">Write Your Blog !</h3>
          <p>
            Blogs offer a huge instructional potential as an online resource. A learning weblog is a learning diary that 
            reports the learning experience, both the learning content and the learning process.
          </p>
          <p>Go ahead with your blog !</p>
          
        </div>

        <div class="col-md-6">
          <div class="box">
            <h3 class="heading">Get In Touch With Us</h3>
            <form method="POST" class="mb-5" id="contactForm" action="./php/writeblogphp.php" >
              <div class="row">
                
                <div class="col-md-6 form-group">
                  <label for="name" class="col-form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="titlename" class="col-form-label">Title</label>
                  <input type="text" class="form-control" name="titlename" id="titlename">

                  <label for="titledesc" class="col-form-label">Title Description</label>
                  <input type="text" class="form-control" name="titledesc" id="titledesc">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message" class="col-form-label">Blog</label>
                  <textarea class="form-control" name="blog" id="blog" cols="30" rows="7"></textarea>
                </div>
              </div>
              

              <div class="row">
                <div class="col-md-12">
                  <input type="submit" name="submit" id="submit" value="Submit Blog" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your blog has been submitted, thank you!
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  <?php include './partials/_footer.php'?>
  <!-- <footer class="ftco-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 logo"><a href="#">Head to Better Life</a></h2>
                    <p>“There is hope, even when your brain tells you there isn’t.” ― John Green</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Explore</h2>
                    <ul class="list-unstyled">
                        <li><a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li>
                        <!-- <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li> 
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <!-- <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                            
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


    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>