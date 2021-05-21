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
                        <img src="images/addictive1.jpg" alt="Avatar">
                        <!--<br>
                        <p style="text-align: center;">NAME HERE</p>-->
                    </div>
                   <div class="exp-text">
                        <!--<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>-->
                        <figure>
                            <blockquote>
                            It is a story of hope, of support and of recovery. I share this intimate tale so that you, my colleagues and friends in the medical field, can hear the human side of addictive disease, of its treacherous grip, and of the freedom and confidence from which I have emerged from this terrifying illness.My drug use did not begin until medical school. I was never a drinker in high school or even in college, nor did I use drugs socially. Then, one evening when I was finding it hard to stay awake to study for an organic chemistry exam, a friend directed me to some stimulants that were available in sample form. The result was perfect. I began using the pills, rather innocently, whenever I needed a boost. To me, it was like a cup of coffee, only better. I soon learned that I could order the pills on the Internet and have a supply whenever it was needed. Upon graduation, I entered practice determined to be the best doctor possible. I spent a great deal of time with my patients, who kept coming back. My patient load grew exponentially, and I had trouble keeping pace. I had no experience running a business, was working long hours, and was unable to juggle the growing load. I found myself taking more and more pills just to keep up, and then even more pills to get me to sleep again. I gave little thought to this drug use. After all, I was no street junkie making covert deals in dark alleys. I was a good doctor, with many patients, using my medical knowledge to make the path toward success a bit smoother. So I thought. My drug use escalated. In addition to Internet orders I would write prescriptions in the names of my family members. Suddenly, my uncle had knee pain, my father-in-law back problems, my aunt arthritis. I did not think about the record I was establishing of their purported use, nor did I think about the records of my own prescribing practices. I was out of control, but getting by, taking many pills to get through each day. Throughout this time I still felt on top. Despite my drug use, I was a physician with a thriving practice. I provided quality care and had no patient complaints. I had a wife and children that relied upon me and saw me as a great provider. My friends and family admired me. I was respected in the community. I enjoyed my status and felt it was deserved, having achieved academically as well as socially since childhood. And then one day, the Drug Enforcement Agency came to the door inquiring about fraudulent prescriptions. The reality of the situation took months to sink in. My reaction was disbelief. I was no druggie engaged in covert activities, and I was certainly no criminal. I was an admired and respected physician. I was sure the entire misunderstanding would be cleared up with a smile and an apology. I could not have been more wrong. The shame and magnitude of my tumble was immeasurable. Not only did I face the legal and professional ramifications of having written improper prescriptions, but I had to cope with the personal humiliation of a fall from grace. I was no longer the icon of success I had worked a lifetime to achieve. I was now tainted, not only in the eyes of my colleagues, but also, for the very first time, in my own. Fortunately, when everything was crumbling around me, I got support and advice. With the guidance of Physician Health Services (PHS), I got into a treatment program that helped me realize that I suffered from a virulent illness and was both worthy and deserving of help. I was medically detoxified from the effects of the medications I had now stopped taking. I learned to take responsibility for my behaviors, but also to recognize that I had been sick and could certainly get well. I learned that addiction would be a lifelong condition, but not a lifelong impairment, and I agreed to a long term monitoring contract with PHS. To comply with this contract, I had to work hard. I saw a therapist to address issues of addiction, shame, honesty and interpersonal relationships. I submitted to regular and random drug screens. I attended support group meetings, met with sponsors and mentors, and in doing so, changed my life dramatically. 
                            After months of treatment, out of state, learning about my disease and learning about myself, I came back home feeling strong. I was healthy, drug free, clear thinking, and ready to pull my career back together. Unfortunately, my career was not yet ready for me. Despite the fact that I had never had a malpractice case and had never harmed a patient, there would be months of waiting for the licensing board to address my petition to go back to work. I would be investigated, questioned and challenged. This process lasted for months on end, and when I did get my license it was with extensive restrictions and requirements for informing everyone with whom I had professional contact of my “probationary status” and of my disease. These required disclosures then led to a new round of inquiries by third party credentialing agencies without which I could not sustain a practice, so I began the journey again. More questions, more disclosures, more humiliation. The greatest challenge of all was the subsequent public disgrace. The day my license was finally restored, a press release issued informing the public of my professional discipline. My name became front-page news highlighted by lurid references to drugs, diversion, and criminal activity. There was no mention of my recovery from illness nor of the months and years of personal work and growth I had achieved. What was to be a day of celebration had become a day of pain and shame. My daughter had a soccer game that day, and through tears, even she had to face the humiliation of what I had hoped was well in my past. Although I was angry and frustrated with the obstacles I was facing, I now had the tools to deal with this stress. Through PHS I had a physician support group where I could meet and learn from other doctors who faced these same struggles. I had an outlet for sharing my experiences and for learning from example that there was indeed hope for my future. And most importantly, I had my sobriety and my health.
                            Ultimately, I did return to practice. It was no easy journey. The process took years. During this time I was doubted by others and I doubted myself. But now I am stronger. I have the confidence of knowing that whatever ills befall me, I can heal. As a result, I am a better healer. My practice is now as successful as ever. I continue to be board certified in my specialty. I continue to provide quality care. I also have additional contributions to make to the profession. I am more open-mind and less likely to pass judgment. I have learned that medicine is not about being powerful or respected, but about being respectful and compassionate. I have learned that physicians, like all people, have the susceptibility to become ill and the capacity to become well. However, to encourage wellness we, as a profession, need to provide resources and nurturance, not shame and humiliation. I am now sober and can’t imagine facing life any other way. And I share this story so that all of my colleagues in the medical field will know that they, too, can embark successfully upon this journey.



                            </blockquote>

                            <cite style="color: gray; margin-left:80%;">- Mark Walker
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
