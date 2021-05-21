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
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/disease_layout.css" />    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
    <style>
        .Title2 {color : #854777;}
        .page-summary-item a{
            color : #854777;
        }
        .item{
            background-color: #dddddd;
        }
    </style>
     
  </head>
  <body>
    <!-- <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Head to Better Life</a>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
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

    <!--banner image-->
    <div
      class="hero-wrap banner-image"
      style="background-image: url('images/personalityDisorder.jpeg')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <h2 class="banner-text" style="color : #854777; margin-left: 10%;">
           <center>Personality Disorder</center>
          </h2>
        </div>
      </div>
    </div>

    <!-- main content page -->

    <div
      id="page-frame"
      class="content-of-page"
      
    >
      <!-- left side of page -->
      <div id="page-left-side" class="left-side-summary">
        <h6 id="page-summary-heading" class="text-uppercase">
          <center>On this page</center>
        </h6>

        <ul style="list-style-type: none; text-align : left">
          <li class="page-summary-item">
            <a href="#description">Description</a>
          </li>
          <li class="page-summary-item"><a href="#symptoms">Symptoms</a></li>
          <li class="page-summary-item">
            <a href="#treatment">Treatment</a>
          </li>
          <li class="page-summary-item">
            <a href="#helping-someone-with-disorder"
              >Helping Someone With Personality Disorder</a
            >
          </li>
          <li class="page-summary-item">
            <a href="#experience">Lived Experience</a>
          </li>
          
        </ul>
      </div>

      <!--center page-->
      <div id="page-center">
        <div id="page-content">
          <!-- quote -->
          <blockquote
            class="overview"
            tabindex="0"
            data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
          >
            <span class="Title1" style = "color : #ff9292;"
              >“There's still a belief that if you are diagnosed with a personality disorder, you are never going to recover. That's completely wrong..”</span
            >
            <footer>
              <cite>Kelly</cite>
            </footer>
          </blockquote>

          <!-- description -->
          <div
            id="description"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Description</h3>

            <p>
                Personality is the way of thinking, feeling and behaving that makes a person different from other people. An individual’s personality is influenced by experiences, environment (surroundings, life situations) and inherited characteristics. A person’s personality typically stays the same over time </p>
              <br />
              <p>
                A personality disorder is a way of thinking, feeling and behaving that deviates from the expectations of the culture, causes distress or problems functioning, and lasts over time. There are 10 specific types of personality disorders. Personality disorders are long-term patterns of behavior and inner experiences that differs significantly from what is expected.</p>
              <br />
              <p>
                The pattern of experience and behavior begins by late adolescence or early adulthood and causes distress or problems in functioning. Without treatment, personality disorders can be long-lasting. Personality disorders affect at least two of these areas: Way of thinking about oneself and others ,
                    Way of responding emotionally , Way of relating to other people, Way of controlling one’s behavior</p>
              <br />
              <p>
                You can know more about the types of disease at 
              <a
                href="https://www.psychiatry.org/patients-families/personality-disorders/what-are-personality-disorders"
              ><span style = "color : brown">here</a>
              <br />
            </p>
          </div>

          <!-- Symptoms -->
          <div
            id="symptoms"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Symptoms</h3>
            <p>
              <ol>
              <li> Pervasive distrust and suspicion of others and their motives.</li>
              <li> Unjustified belief that others are trying to harm or deceive you.</li>
              <li> Angry or hostile reaction to perceived slights or insults.</li>
              <li> Peculiar dress, thinking, beliefs, speech or behavior.</li>
              <li>Flat emotions or inappropriate emotional responses.</li>
              <li>Persistent lying, stealing, using aliases, conning others</li>
              <li>Consistently irresponsible, Unstable and intense relationships, Constantly seeking attention</li>
              </ol>
            </p>

          </div>

          <!-- Treatment  -->

          <div
          id="treatment"
          class="text-section"
          tabindex="0"
          data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
        >
          <h3 class="Title2">Treatment</h3>
          <p>The treatment that's best for you depends on your particular personality disorder, its severity and your life situation. Often, a team approach is needed to make sure all of your psychiatric, medical and social needs are met. Because personality disorders are long-standing, treatment may require months or years. Your treatment team may include your primary doctor or other primary care provider. If you have mild symptoms that are well-controlled, you may need treatment from only your primary doctor, a psychiatrist or other therapist. If possible, find a mental health professional with experience in treating personality disorders.</p>
          <p>
            Treatments include:
            <ul>
            <li><strong>Psychotherapy </strong> - During psychotherapy with a mental health professional, you can learn about your condition and talk about your moods, feelings, thoughts and behaviors. You can learn to cope with stress and manage your disorder. Family therapy provides support and education to families dealing with a family member who has a personality disorder.</li>
            <li><strong>Medications</strong>- There are no medications specifically approved by the Food and Drug Administration (FDA) to treat personality disorders. However, several types of psychiatric medications may help with various personality disorder symptoms like Antidepressants, Mood stabilizer, Antipsychotic medications, Anti-anxiety medications.</li>
            <li><strong>Hospital and residential treatment programs</strong>- In some cases, a personality disorder may be so severe that you need to be admitted to a hospital for psychiatric care. This is generally recommended only when you can't care for yourself properly or when you're in immediate danger of harming yourself or someone else.</li>
            </ul>
          </p>
        </div>

        <!-- Helping someone with an OCD -->

        <div
            id="helping-someone-with-disorder"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Helping Someone With A Personality Disorder</h3>
            <p>
                Supporting someone with a personality disorder can be challenging because the person may not accept they have a problem. You can help them by learning as much as you can about the disorder and encouraging them to seek treatment with a mental health professional. Allowing time and space for the person to talk and open up about their experience, if they want to, can be helpful. Encourage their self-care through diet, exercise, and making time to relax. Help them to plan at least one enjoyable activity each day.
            </p></br>
            <p>
                If you are in a close relationship with the person, it’s especially important to be patient and let them know that things can get better. Ask how you can help, encourage treatment, and accept that progress will take time. In helping someone with a personality disorder, it is important to look after yourself as well, and have good supports around you. 
            </p></br>

            <p>
                The following 9 strategies can help you support a person with PD:<br>
                1. Learn about BPD.<br>
                2. Show confidence and respect.<br>
                3. Be trustworthy.<br>
                4. Manage conflict with attachment.<br>
                5. Encourage Professional Help.<br>
                6. Identify strengths.<br>
                7. Have fun together.<br>
                8. Take suicide seriously.<br>
                9. Be self-aware.<br>
              </p>
          </div>

          <!--Lived Experience-->
          <div
            id="experience"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
          <h3 class="Title2">Lived Experience</h3>
         
          <div class="thumbnail" style="width: 800px">
            <div
              id="DemoCarousel"
              class="carousel slide"
              data-interval="20000"
              data-ride="carousel"
              style="background-color: #dddddd"
            >
            
              <div class="carousel-inner">
                <div class="item active">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px;  color:#e6739f"
                      >“Eating disorders become so ingrained in your personality that you feel like it’s part of who you are. You forget what it’s like to not have an eating disorder. Because I’d had it since I was 12 years old, I didn’t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it’s also going to be the most worthwhile. That's a really important message for anyone who's affected.” <a style = "color : #e6739f;" href="experience.html">..Read More</a></span
                    >
                    <footer >
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                    
                </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none;  line-height: 30px;  color:#e6739f"
                      >“Eating disorders become so ingrained in your personality that you feel like it’s part of who you are. You forget what it’s like to not have an eating disorder. Because I’d had it since I was 12 years old, I didn’t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it’s also going to be the most worthwhile. That's a really important message for anyone who's affected.” <a style = "color : #e6739f;" href="experience.html">..Read More</a></span
                    >
                    <footer>
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                  
                </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px; color:#e6739f"
                      >“Eating disorders become so ingrained in your personality that you feel like it’s part of who you are. 
                      You forget what it’s like to not have an eating disorder. Because I’d had it since I was 12 years old, 
                      I didn’t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, 
                      but it’s also going to be the most worthwhile. That's a really important message for anyone who's affected.” <a style = "color : #e6739f;" href="experience.html">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                  
                </div>
                </div>
              </div>
              <a
                class="carousel-control left"
                href="#DemoCarousel"
                data-slide="prev"
                style="background-color: #dddddd"
              >
                <span  style = "color : #e6739f" class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a
                class="carousel-control right"
                href="#DemoCarousel"
                data-slide="next"
                style="background-color: #dddddd"
              >
                <span style = "color : #e6739f"class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>
          </div> 

      </div>
    </div>
    <?php include './partials/_footer.php'?>
    <!-- footer -->
    <!-- <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Head to Better Life</a></h2>
              <p>
                “There is hope, even when your brain tells you there isn’t.” ―
                John Green
              </p>
              <ul class="ftco-footer-social list-unstyled mt-2"></ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Explore</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="about.html"
                    ><span class="fa fa-chevron-right mr-2"></span>About</a
                  >
                </li>
                <li>
                  <a href="index.html"
                    ><span class="fa fa-chevron-right mr-2"></span>Services</a
                  >
                </li>
                <!--<li>
                  <a href="#"
                    ><span class="fa fa-chevron-right mr-2"></span>What We Do</a
                  >
                </li>
               
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <a href="#"
                      ><span class="icon fa fa-paper-plane pr-4"></span
                      ><span class="text">headtobetterlife@gmail.com</span></a
                    >
                  </li>
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
              <p class="mb-0" style="color: rgba(255, 255, 255, 0.5)">
                @We take all responsibilty of our customers data privacy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="js/diseaseJs.js" charset="utf-8"></script>
  </body>
</html>
