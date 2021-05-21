<!doctype html>
<html lang="en">

    <head>
        <title>Head To Better Life</title>
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

  $server="localhost";
  $username="root";
  $password="";
  $database="headtobetterlife";

  $con= mysqli_connect($server,$username,$password,$database);
  $sql="select * from blogs";
  //mysqli_select_db($con, $database);
  $query= mysqli_query($con, $sql);
  $number =0;    
  ?>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Head to Better Life</a>
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
	  </nav>
	  
	 
	  <div class="hero-wrap" style="background-image: url('images/blog.png');" >
      
    </div>
        <!-- header ends -->
        <!-- two sided blog part starts -->
        <div class="container-fluid ">
            <div class="row ">
                <!-- to get the space form left and right -->
                <div class="col-xl-10  col-lg-10 col-md-12 col-11 mx-auto my-5">
                    <div class="row gx-5 mx-sm-auto">
                        <!-- left side of the blog  -->
                        <div class="col-lg-8 col-md-11 col-11 mx-auto">
                            <div class="row gy-5 ">
                                <div class="col-12 card p-4 shadow blog_left__div">
                                <?php

while($row = mysqli_fetch_array($query))
{ 
    $name = $row['username'];
    $title = $row['title'];
    $desc = $row['description'];
    $blog = $row['blog'];
    ?>
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase"><?php echo $title; ?></h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> <?php echo $desc; ?>, </span><?php echo $name; ?></p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="https://images.pexels.com/photos/3815750/pexels-photo-3815750.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold"></span> <?php echo $blog, $number; ?> </p>
                                    

                                </div>
                                <!-- 2nd topic 
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Title Heading</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> Title description, </span> Date </p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="https://images.pexels.com/photos/4050291/pexels-photo-4050291.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold"></span> ENTER YOUR TEXT HERE !! </p>
                                    
                                    
                                </div>
                                3rd topic
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Title Heading</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> Title description, </span> Date </p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="https://images.pexels.com/photos/4050303/pexels-photo-4050303.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold"></span> ENTER YOUR TEXT HERE !! </p>
                                    
                                    
                                </div> -->
                                <?php 
                                $number++;
}
?>
                            </div>
                        
                        <!--  *******************************************************
            **********************************************************.
            right side of the div
            *******************************************************
            **********************************************************
            -->
        
                        <div class="col-lg-3 col-md-7 col-11  justify-content-end m-lg-0 m-auto ">
                            <div class="row gy-5 left_div__blog">   
							
                              <center><b><span class="subheading"><p style="font-size:25px" "color:black"><b>OUR SERVICES</b></p></span>
							  <h2 class="mb-3"><p style="font-size:16px" "color:grey"><b>WE CAN HELP YOU WITH THESE ISSUES</b></p></h2>  
                              </b> </center>
							  <br>
							<b>	<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a href="anxiety.html" ><p style="color:blue">1. ANXIETY DISORDERS</p></a> 
						  </li>
						  <br>
						  <li class="nav-item text-left">
						    <a href="bipolar.html"><p style="color:blue">2. BIPOLAR AND RELATED DISORDERS</p></a>
						  </li>
						  <br>
						  <li class="nav-item text-left">
						    <a  href="Depressive_Disorders.html"><p style="color:blue">3. DEPRESSIVE DISORDERS</p></a>
						  </li>
						   <br>
						  <li class="nav-item text-left">
						    <a href="Addictive_Disorders.html"><p style="color:blue">4. ADDICTIVE DISORDERS</p></a>
						  </li>
						   <br>
						  <li class="nav-item text-left">
						    <a href="Eating_Disorder.html"><p style="color:blue">5. EATING DISORDERS</p></a>
						  </li>
						   <br>
						  <li class="nav-item text-left">
						    <a href="OCD.html"><p style="color:blue">6. OBSESSIVE-COMPULSIVE AND RELATED DISORDERS</p></a>
						  </li>
						   <br>
						  <li class="nav-item text-left">
						    <a href="Personaliy_Disorder.html"><p style="color:blue">7. PERSONALITY DISORDERS</p></a>
						  </li>
						   <br>
						  <li class="nav-item text-left">
						    <a href="Schizophrenia.html"><p style="color:blue">8. SCHIZOPHRENIA AND PSYCHOTIC DISORDERS</p></a>
						  </li> <br>
						  <li class="nav-item text-left">
						    <a href="Trauma.html"><p style="color:blue">9. TRAUMA AND STRESS RELATED DISORDERS</p></a>
						  </li> <br>
						  <li class="nav-item text-left">
						    <a href="loss.html"><p style="color:blue">10. GRIEF AND LOSS WHEN CARING</p></a>
						  </li> <br>
						  <li class="nav-item text-left">
						    <a href="selfharm.html"><p style="color:blue">11. SELF HARM</p></a>
						  </li> <br>
						  <li class="nav-item text-left">
						    <a href="sucide.html"><p style="color:blue">12. SUICIDAL THOUGHTS</p></a>
						  </li> <br>
						  <li class="nav-item text-left">
						    <a href="domesticviolence.html"><p style="color:blue">13. DOMESTIC VIOLENCE</p></a>
						  </li> <br>
						</ul>
				 </b>
                                
                                
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">Head to Better Life</a></h2>
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
            -->
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <!-- <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li> -->
                                <!--<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+1234567889</span></a></li>-->
                                <li><a href="#"><span class="icon fa fa-envelope"></span><span class="text">headtobetterlife@gmail.com</span></a></li>
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
        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script type="text/javascript">
        const like = document.getElementById('like_btn');
        const singleClick = () => {
            like.style.fontWeight = 'bold';
            like.style.background = '#bbe1fa';
            like.style.color = '#1b262c';
            like.innerHTML = "✓ Liked";
        }
        const doubleClick = () => {
            like.style.fontWeight = 'normal';
            like.style.background = '#3282b8';
            like.style.color = '#fff';
            like.innerHTML = "Like";
        }
        var clickCount = 0;
        like.addEventListener('click', function() {
            clickCount++;
            if (clickCount === 1) {
                singleClickTimer = setTimeout(function() {
                    clickCount = 0;
                    singleClick();
                }, 400);
            } else if (clickCount === 2) {
                clearTimeout(singleClickTimer);
                clickCount = 0;
                doubleClick();
            }
        }, false);
        // show and hide the replies
        const reply = (rep) => {
            console.log('hi');
            // debugger;
            var res = document.getElementById(rep);
            console.log(res);
            if (res.className == "replies") {
                res.className = "thapa_show";
                res.style.WebkitTransition = 'all 0.3s ease';
                // res.style.transition = 'all 0.3s ease';
                // console.log(thapa_show);
            } else if (res.className == 'thapa_show') {
                // res.className = " ";
                console.log('thapa show');
                res.className = "replies";
            }
        }
        </script>
    </body>

</html>
