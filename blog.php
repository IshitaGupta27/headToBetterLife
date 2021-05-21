<?php  session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{
    include './partials/_usernav.php';
}
else
{
    include './partials/_header.php' ;   
}?>
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
    <style>
        body{
            background-color: rgb(156, 156, 96);
        }
        .hero-wrap{
          background-size: contain;
        }
    </style>
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
	          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav> -->
	  
	 
	  <div class="hero-wrap" style="background-image: url('images/BLOGS.jpeg');" >
      
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
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Depression</h1>
                                        <p class="blog_title"> <span class="font-weight-bold">
                                            Depression (major depressive disorder) is a common and serious medical illness that negatively 
                                            affects how you feel, the way y </span>
                                        </p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                       <center> <img src="images/blog1.jpeg" class="img-fluid shadow"></center>
                                    </figure>
                                    <p><span class="font-weight-bold"></span>
                                        Depression affects more than 264 million peopleTrusted Source worldwide — yet it can be hard 
                                        for some people who live with depression to find the resources they need.Whether it’s a safe 
                                        space to anonymously share your feelings, useful self-care methods, or the latest in mental 
                                        health research, you can turn to these blogs and know that you aren’t alone.  Depression is 
                                        fairly common, affecting more than 15 million adults in the United States. Depression is also 
                                        the leading cause of disability among U.S. individuals aged 15 to 44 years.
                                         With treatment and support, most individuals with depression can fully recover. Eating a 
                                         healthful diet and partaking in physical activity can make a significant difference to your 
                                         recovery time, as well as improving your general health.Many organizations offer support
                                        groups, counseling, and other resources that may help with depression. It is important that
                                        you try to participate in social activities to avoid becoming isolated. Getting support plays
                                        an essential role in overcoming depression. On your own, it can be difficult to maintain a 
                                        healthy perspective and sustain the effort required to beat depression. At the same time, 
                                        the very nature of depression makes it difficult to reach out for help. When you’re depressed,
                                         the tendency is to withdraw and isolate so that connecting to even close family members and 
                                         friends can be tough.You may feel too exhausted to talk, ashamed at your situation, or guilty 
                                         for neglecting certain relationships. But this is just the depression talking. Staying 
                                         connected to other people and taking part in social activities will make a world of difference 
                                         in your mood and outlook. Reaching out is not a sign of weakness and it won’t mean you’re a burden 
                                         to others. Your loved ones care about you and want to help. And if you don’t feel that you have 
                                         anyone to turn to, it’s never too late to build new friendships and improve your support network.
                                    </p>
                                    

                                </div>
                                <!-- 2nd topic  -->
                                <br>
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Anxiety</h1>
                                        <p class="blog_title"> <span class="font-weight-bold">6-Step Morning Routine to Reduce Anxiety</span> </p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                    <center> <img src="images/blog2.jpeg" class="img-fluid shadow"></center>
                                    </figure>
                                    <p><span class="font-weight-bold"></span>
    Rebekah Lyons wasn’t always a morning person. For years, the renowned author and speaker experienced panic attacks and severe 
    anxiety.But in the last few years, Lyons said the panic attacks faded. She said turning over her anxieties to God in surrender, 
    plus having time alone in the morning, were “a game changer.”“Morning routine sets the framework for the day,” Lyons said. “It's 
    just absolutely essential.”In her latest book, Rhythms of Renewal, Lyons chronicles just how routines and practices—what she calls 
    rhythms—bring her peace.“When we begin our days by spending time with God…it brings healing,” Lyons wrote in the book. “There’s no 
    script, no race, no rules. There’s only peace, courage, and strength for the day ahead.”Prior to this, she wrote about her 
    experience battling panic attacks in the books Freefall to Fly and You Are Free, sharing how faith and prayer helped her face 
    anxiety.“The science and the research tells us that 77% of us in society are showing physical symptoms of stress,” Lyons told 
    Guideposts.org. “The goal [of] my work has been to give tools and resources for people who feel discouragement or despair or 
    they're hitting relapse moments and they're like, ‘Am I going to come out of it?’”Here are the five steps to her morning routine:
                                        
    1. Prepare the night before
    Lyons is well aware that getting up early is difficult. She has four children, two with special needs, and runs a business with her
     husband. She says establishing a morning routine you actually stick to requires committing to it the night before.“I'll do a brain
      dump before I go to bed,” Lyons said. “I'll put those [thoughts] either in the notes app on my phone [or] a shared note with my 
      assistant or someone on my team.”Jotting things down helps Lyons sleep better and prevents her mind from compulsively running 
      over her to-do list.
                                        
      2. Start with water
      Lyons appreciates a steaming mug of coffee in the morning, but she found that starting her day with caffeine led to more anxiety.
       The solution? Drink water first.“I drink 20 ounces of water first thing in the morning with fresh-squeezed lemon,” Lyons said. 
       “It's a detoxifier and it's a really great way to hydrate yourself physically before you start drinking caffeine.”
                                        
    3. Kneel and pray
    Lyons has done yoga for years and knows how child’s pose relaxes her heart and mind.“Kneeling is a natural position for an exhale,”
     Lyons said. “It is a posture of surrender and release.”The act of kneeling puts Lyons in a peaceful state of mind.“I've found 
     [kneeling helps to] slow my breathing,” Lyons said. “My central nervous system [is] able to calm down. I [am] 
     able to think clearly about the things I need to lay down from yesterday so that I can begin anew today.”
                                        
     4. Read encouraging liturgy and scripture
     Every day, Lyons read Scripture, usually focusing on the Psalms or something that will inspire her heart.“Each morning I turn to
      God’s word, which nourishes my soul and fills me up after the previous day’s pouring out,” Lyons wrote in Rhythms of Renewal.
                                        
      5. Journal your intention for the day
      Journaling is important for Lyons’ morning routine. “[After] I lay down the cares and the burdens from yesterday I say, ‘Just
       help me to receive what you have for me today,’” Lyons said.Sometimes she’ll write down the name of a friend and some
        encouragement she wants to share with them that day.“My prayer is that I don't miss an opportunity that presents itself right 
        in front of me,” Lyons said. “That I would be a person who notices things and doesn't just barrel by.”
                                        
      6. End your routine with gratitude
      “Scripture says that God's mercy is new every morning,” Lyons said. “It's like a gift.”Lyons ends her morning routine by 
      writing down specific things she is grateful to God for. Journaling her gratitude not only helps Lyons begin the day with a 
      peaceful attitude, it also provides a record of God’s faithfulness.Lyons understands that everyone’s morning routine will be 
      different. The most important thing, she says, is to appreciate the gift of each day.“You get to wake up with…a clean slate,”
       Lyons said. “Today is a new day. I want to start my day in a posture of surrender and release, so that I can be ready to receive.”
                                    </p>
                                    
                                    
                                </div>
                                <!-- 3rd topic --> <br>
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Dealing with Depression</h1>
                                        <p class="blog_title"> <span class="font-weight-bold">5 Prayers for Depression</span> </p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                    <center> <img src="images/blog3.jpeg" class="img-fluid shadow"></center>
                                    </figure>
                                    <p><span class="font-weight-bold"></span>
  I’ve been a chaplain for 9 years and I’ve been married for just as long to my wife, the Rev. Jessica Shields. We have two vibrant, 
  engaging daughters:  Abigail, 6 and Morgan, 3. I enjoy my life, my vocation, and I still live with depression.My depression first 
  surfaced for me in high school, the year my older sister went away to college and my best friend moved away to another school. At 
  that time, my only understanding of mental health treatment was the “padded room” I saw in my elementary school, to keep children 
  with special needs and some with mental conditions from hurting themselves. I thought, “I don’t need a padded room; I just don’t care
   if I wake up the morning.”Fortunately, my parents were paying close attention to my behavioral changes and sought help from family,
    friends and our pastor. Thanks to our pastor’s recommendation, I began a medication and therapy regimen with a psychiatrist to help
     me manage what was diagnosed as acute depression. Get spiritual support for your problems in the new book, Spiritual Remedies .While 
     in college, I believed that God did not desire for people to have depression and that God would heal me, so I stopped taking
      my medications and receiving treatment. I strongly discourage this behavior. After a significant life event in 2009, I could no 
      longer deny that I still lived with depression. I sought out a new psychiatrist, psychologist and medication regimen, and have 
      been managing my depression with my team ever since. I still don’t believe God desires us to have depression; God wants us to have
       life and life more abundantly! But as a chaplain, I also know “God’s grace is sufficient.” Getting treatment doesn’t mean I am
        depression free, nor do I long for God to “take it away,” or try to speed through depressive episodes anymore. Like Paul, I 
        am learning to be content in all things; I accept that I live with depression and try to see what God wants to teach me through
         each experience.One of the ways I accept depression in my life is by praying. When I feel a heavy gray cloud hovering above me,
          I begin to pray for myself, for my wife, my children, and all others who live with depression. Here are a few of my prayers.
           --Rev. Brian A. Shields
                                        
                                    </p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <!--  *******************************************************
            **********************************************************.
            right side of the div
            *******************************************************
            **********************************************************
            -->
        <!--
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
            </div>-->
            
        </div>
        </div>
        </div>
        
<!-- //         <footer class="ftco-footer">
//         <div class="container">
//             <div class="row mb-5">
//                 <div class="col-sm-12 col-md">
//                     <div class="ftco-footer-widget mb-4">
//                         <h2 class="ftco-heading-2 logo"><a href="#">Head to Better Life</a></h2>
//                         <p>“There is hope, even when your brain tells you there isn’t.” ― John Green</p>
//                         <ul class="ftco-footer-social list-unstyled mt-2">
//                             <!-- <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
//                             <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
//                             <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
//                         </ul>
//                     </div>
//                 </div>
//                 <div class="col-sm-12 col-md">
//                     <div class="ftco-footer-widget mb-4 ml-md-4">
//                         <h2 class="ftco-heading-2">Explore</h2>
//                         <ul class="list-unstyled">
//                             <li><a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
//                             <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
//                             <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>What We Do</a></li>
//                             <!-- <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Plans &amp; Pricing</a></li>
//                         </ul>
//                     </div>
//                 </div>
// <!--
//                 <div class="col-sm-12 col-md">
//                     <div class="ftco-footer-widget mb-4">
//                         <h2 class="ftco-heading-2">Company</h2>
//                         <ul class="list-unstyled">
//                             <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
//                             <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
//                             <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
//                              <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li> 
//                         </ul>
//                     </div>
//                 </div>
//             
//                 <div class="col-sm-12 col-md">
//                     <div class="ftco-footer-widget mb-4">
//                         <h2 class="ftco-heading-2">Have a Questions?</h2>
//                         <div class="block-23 mb-3">
//                             <ul>
//                                 <!-- <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
//                                 <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+1234567889</span></a></li>
//                                 <li><a href="#"><span class="icon fa fa-envelope"></span><span class="text">headtobetterlife@gmail.com</span></a></li>
//                             </ul>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//         <div class="container-fluid px-0 py-5 bg-black">
//             <div class="container">
//                 <div class="row">
//                     <div class="col-md-12">

//                         <p class="mb-0" style="color: rgba(255,255,255,.5);">
//                             @We take all responsibilty of our customers data privacy.

//                         </p>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     </footer> -->
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
    <?php include './partials/_footer.php'?>
</html>