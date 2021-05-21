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
                            I abused narcotics and barbiturates for the better part of 15 years. I initially liked the way the drugs made me feel. Toward the end of my use, however, everything had changed. I was hopelessly addicted. I lived in terror of being caught, thinking that I was maybe one of two or three doctors in the entire country with such a shameful problem. I went to bed every night vowing not to use tomorrow, but I always did. I despised myself for my lack of will power and for not being able to control my drug use. Friends, family, and colleagues commented upon my unpredictable mood swings, bizarre behavior, and fits of anger.Finally, the day came when I reached bottom. I had been removed from my job, my family life was in shambles, and I felt that my life had been a total waste. A friend gave me the number of Physician. It was a difficult call. I was afraid that whoever I spoke with would be shocked by my situation and disgusted by my story. It didn’t happen. My call was handled with dignity and understanding. PHS suggested a number of things, including attendance at one of their support meetings for physicians. I will never forget that first meeting. I entered the room in total fear and desperation, unsure of how disturbed the one or two other addicts in the room might be. To my surprise, I was warmly greeted by a room full of recovering addicts. Finally! Finally, I was no longer alone! On that day, I felt the first stirrings of hope. It was a powerful sensation.`PHS helped me arrange for outpatient treatment for my addiction. They set up a voluntary contract where I was randomly screened for drugs for three years while having a fellow physician at my job serve as a monitor. PHS taught me that my compulsive drug use was not a moral issue but a disease called addiction. They explained that my drug use had nothing to do with will power. In fact, my addictive behaviors were (and are) completely out of my control. These were hard concepts for me to accept. I reasoned that, as a hard-driving doctor, I demonstrated my superior power for all to see on a daily basis and that I could control anything and anybody that came my way. I now know that these attitudes helped contribute to my problems. At the meetings, people spoke about the importance of humility, acceptance, and making amends for past behaviors. I was told that I am not responsible for my addiction, but I am responsible for my recovery. These concepts sounded odd to me when I first started coming around. Could following these suggestions really keep me from using drugs? I initially resisted accepting the tenants of the PHS program until I witnessed physician success stories firsthand and heard testimonials from the lips of my brethren in the program. Imagine self-centered, controlling, egotistical health care professionals helping one another to stay clean and becoming better, more compassionate human beings in the process! Thanks to the physician my life has turned around completely. I have several years of recovery at this time. In my job,  I have gone from someone that my colleagues tried to avoid to someone who is often sought out for professional and personal counsel and advice. I feel that I am a far better physician, father, and member of society today than I ever was before. This is because I now live in hope rather than fear. I will always be an addict. There will always be a part of me that wants to use drugs. However, as long as PHS is available, as long as I can meet with and help other recovering and struggling health care professionals, I will stay clean. PHS saves lives. I’m living proof.



                            </blockquote>

                            <cite style="color: gray; margin-left:80%;">- Alley John
                            </cite>
                        </figure>




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
                        <p>“There is hope, even when your brain tells you there isn’t.” ― John Green</p>
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
