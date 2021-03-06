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
    <title>Songs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/songstyle.css">
</head>
<?php

  //session_start(); 

    $server="localhost";
    $username="root";
    $password="";
    $database="headtobetterlife";

    $con= mysqli_connect($server,$username,$password,$database);
    $sql="select * from songs";
    //mysqli_select_db($con, $database);
    $query= mysqli_query($con, $sql);
    $number =1;    
    ?>

<body>

     <!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">New Life</a>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Disease</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Resources</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
            </ul>
          </div>
        </div>
      </nav> -->
    <!-- END nav -->

    <section class="hero-wrap " style="background-image: url('images/music.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <!-- <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p> 
                    <h1 class="mb-0 bread">"Music gives a soul to the universe, wings to the mind, flight to the imagination and life to everything"</h1>-->
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    <?php

    while($row = mysqli_fetch_array($query))
    { 
    $name = $row['SONG_NAME'];
    $url = $row['URL'];
    ?>  
        <div class="container">
            <div class="row">
                <!--<div class = "row2">-->
                        <div class = "col-md-12">
                            <a href = "<?php echo $url;?>" class = "album-poster">
                                <img src = "images/allthestar.jfif">
                            </a>
                            <h4><?php echo $name; ?> </h4>
                        </div>

                        <!--<div class = "col-md-12">
                            <a href = "https://www.youtube.com/watch?v=eAfyFTzZDMM" class = "album-poster">
                                <img src = "images/beautiful.jfif">
                            </a>
                            <h4>Beautiful</h4>
                        </div>

                        <div class = "col-md-12">
                            <a href = "https://www.youtube.com/watch?v=3Vzrr64ZrVU" class = "album-poster">
                                <img src = "images/bornthisway.jfif">
                            </a>
                            <h4>Born This Way</h4>
                        </div>

                        <div class = "col-md-12">
                            <a href = "https://www.youtube.com/watch?v=1k8craCGpgs" class = "album-poster">
                                <img src = "images/dontstopbelieving.jfif">
                            </a>
                            <h4>Don't Stop Believin'</h4>
                        </div>

                        

                        <div class = "col-md-12">
                            <a href = "https://www.youtube.com/watch?v=RwPS19swwiA" class = "album-poster">
                                <img src = "images/foolingyourself.jfif">
                            </a>
                            <h4>Fooling Yourself</h4>
                        </div>

                        <div class = "col-md-12">
                            <a href = "https://www.youtube.com/watch?v=X0vXCY-h9ks" class = "album-poster">
                                <img src = "images/girl.jfif">
                            </a>
                            <h4>GIRL</h4>
                        </div>

                        <div class = "col-md-12">
                            <a href = "https://www.youtube.com/watch?v=nO62scTZ7Qk" class = "album-poster">
                                <img src = "images/grandillusion.jfif">
                            </a>
                            <h4>Grand Illusion</h4>
                        </div>

                        <div class = "col-md-12">
                            <a href = "https://www.youtube.com/watch?v=936BapRFHaQ&feature=youtu.be" class = "album-poster">
                                <img src = "images/hewillholdmefast.jfif">
                            </a>
                            <h4>He Will Hold Me Fast</h4>
                        </div>

                        <div class = "col-md-12">
                            <a href = "https://www.youtube.com/watch?v=0IA3ZvCkRkQ" class = "album-poster">
                                <img src = "images/hero.jfif">
                            </a>
                            <h4>Hero</h4>
                        </div>-->
        <?php
        $number++;
    }
    ?>                    
                    <!--</div>-->
            </div>
        </div>
        
    </section>

<?php include './partials/_footer.php'; ?>

    <!--FOOTER-->
    <!-- <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">New Life</a></h2>
                        <p>???There is hope, even when your brain tells you there isn???t.??? ??? John Green</p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
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
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+1234567889</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
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
    <!-- <div id="aplayer"></div> -->


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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>

    <script>
        const ap = new APlayer({
        container: document.getElementById('aplayer'),
        listFolded:true,
        audio: [{
            name: 'Shreya Bucha',
            url: 'https://www.youtube.com/watch?v=P5WVaUajLm0',
            cover: 'download.jfif'}] });
    </script>
</body>
</html>