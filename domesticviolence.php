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
      style="background-image: url('images/dv.jfif')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <h2 class="banner-text" style="color : #20335c; margin-left: 150px; font-weight: 600; font-size: 300%;">
            Domestic Violence
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

        <ul style="list-style-type: none">
          <li class="page-summary-item">
            <a href="#description">Description</a>
          </li>
          <li class="page-summary-item"><a href="#causes">Causes of Domestic Violence</a></li>
          <li class="page-summary-item">
            <a href="#form">Forms Of Domestic Violence</a>
          </li>
          <li class="page-summary-item">
            <a href="#effects"
              >Effects of Domestic Violence</a
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
            <span class="Title1"
              >“Each time a woman stands up for herself without knowing it possibly, without claiming it, she stands up for all women.” </span
            >
            <footer>
              <cite>Maya Angelou</cite>
            </footer>
          </blockquote>

          <!-------------- description-------------------------- -->
          <div
            id="description"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Description</h3>

            <p>
              The Protection of Women from Domestic Violence Act (PWDVA), 2005[14] defines domestic violence as any act, omission or 
              commission or conduct of the respondent, which includes threat or actual abuse.Domestic violence against women is an 
              all-pervasive phenomenon worldwide. Declared as a “public health epidemic” by the World Health Organization (WHO), 
              it continues to afflict more than one-third of the women globally. It refers to “any act of gender-based violence 
              that results in, or is likely to result in, physical, sexual or psychological harm or suffering to women.” The act 
              of violence may occur in family, general community, or even being perpetrated and condoned by state. It has serious
               health consequences – not just for women and children but also for their family. 
            </p>
              <br />
              <p>You can read in detail 
              <a
                href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6691463/"
              ><span style = "color : brown">here</a>
              <br />
            </p>
          </div>

          <!-------------------Causes of Domestic Violence-------------------->
          <div
            id="causes"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Causes of Domestic Violence</h3>
            <p><strong>Psychiatric morbidity </strong></p>
              <p>
                Regular consumption of alcohol by the husband has been strongly associated with poor mental health of women.Alcohol has consistently emerged as a risk marker for partner violence that is specially consistent across a range of settings for all types of violence.
                There is evidence from many forensic cases that alcohol was the common denominator in violence against women.</p>
              <br />

              <p><strong>Sociodemographic factors</strong></p>
              <p>
                Patriarchy has been cited as the main cause of violence against women. Early (15–19 years;10–19 years), and young age (31–39 years), illiteracy, coupled with low level of education, poor socioeconomic status, women with no income of their own, and urban domicile have been cited as risk factors for domestic violence. 
                Where women have a higher economic status than their husbands and are seen as having sufficient power to change traditional gender roles, risk for violence is high.</p>
              <br />

              <p><strong>Family factors</strong></p>
              <p>Exposure to harsh physical discipline during childhood and witnessing the father beating the mother during childhood is a predictor of victimization and perpetration of violence against his wife in adulthood.
                In addition, the age-old custom of dowry and gifts for husband and in-laws has been found to be strongly related to violence against women in India. </p>
              <br />

              <p><strong>Traditional and cultural practices perpetuating violence against women</strong></p>
              <p>
                <ul>
                <li>Female genital mutilation</li>
                <li>Acid attacks</li>
                <li>Killing in the name of family honour</li>
                <li>Early marriages</li>
                </ul>
              </p>
              <br />

              <p><strong>Sociocultural factors disfavouring women</strong></p>
              <p>Stereotypes of gender roles have continued over the ages. The primary roles for women have been marriage and motherhood.
                Although the practice of Sati has declined, enforced widowhood is still prevalent. These sociocultural factors have continued over the years and have put women at risk for various forms of abuse.
              </p>
              <br />

              <p><strong>Life Stress</strong></p>
              <p>Poor quality of education, high competition in education and employment, corruption and inflation are the common stresses of the youth. The high-risk individual could be a young person, who lives away from his home, anxious and depressed, frequently views pornography and resorts to alcohol for recreation and relaxation.
              </p>
              <br />

              <p><strong>Judiciary and law enforcement machinery</strong></p>
              <p>An insensitive, inefficient, corrupt and unaccountable judicial system and law enforcement machinery fails to deter against various forms of crimes
              </p>
              <br />
          </div>

          <!--------------Forms Of Domestic Violence---------------------->

          <div
          id="form"
          class="text-section"
          tabindex="0"
          data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
        >
          <h3 class="Title2">Forms Of Domestic Violence</h3>
          <p><strong>a) Physical Abuse</strong></p>
              <p>
                While defining Domestic Violence under the Protection of Women from Domestic Violence Act, 2005, in section 3 of the act Physical Abuse is explained as any act or conduct which is of such nature as to cause bodily pain, harm or danger to life, limb, or health or impair the health or development of the aggrieved person and include assault criminal intimidation and criminal force. </p>
              <br />

              <p><strong>b) Psychological/ Emotional Abuse</strong></p>
              <p>
                Emotional or psychological abuse which has been categorized as verbal, is explained as to include – insults, ridicule, humiliation, name calling and insults especially with regard to not having a child or a male child and repeated there as to cause physical pain to any person in whom the aggrieved person is interested. Psychological abuses are one of the major forms of abuses faced by women.</p>
              <br />

              <p><strong>c) Sexual Abuse</strong></p>
              <p>The Protection of women from Domestic Violence Act, 2005 explains sexual abuse includes any conduct of a sexual nature that abuses humiliates degrades or otherwise violates the dignity of women. This form of abuse is specific to the interpersonal relation between a man and a woman most often in a marital relationship. </p>
              <br />

              <p><strong>c) Economic Abuse</strong></p>
              <p>Economic abuse is a deprivation of the basic need of a person to sustain him in a social se up. e) Intellectual Abuse
                Of all the abuses in Domestic Violence previously discussed, intellectual abuse has been missing from all the definitions of Domestic Violence. This is perhaps because in India a marital relationship or any other man-woman relationship is about the acceptance of inequality, where men dominate and injure and women get dominated and endure. 
                </p>
              <br />
        </div>

        <!---------------- Effects of Domestic Violence--------------------------------->

        <div
            id="effects"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Effects of Domestic Violence</h3>

            <p>
              Domestic abuse has significant health and public health consequences. Between 25%-50% of homeless families have lost 
              their homes as a result of intimate partner violence. Such victimization is also associated with nearly $6 billion in 
              health care costs and lost work productivity per year. Domestic violence sufferers are at higher risk of facing 
              discrimination in securing any form of insurance, including health, life, disability, and property insurances. 
              Victims of domestic violence are more likely to experience trouble raising their children and suffer family disruption,
               as well. Although psychological abuse can be harder to define than overt physical abuse, it has been found to cause at 
               least as much damage. Victims of intimate partner violence are vulnerable to developing depression, anxiety, and 
               substance abuse disorders.
            </p>
              <br />
              <p>
                Partner abuse of pregnant women has been associated with preterm deliveries of low-birth-weight babies. 
                Domestic partner abuse puts children of the couple at risk for lower intellectual functioning, being victims 
                of child abuse as children, and of intimate partner violence as adults. This form of family violence also puts 
                children at higher risk of having emotional problems and engaging in drug abuse. </p>
              <br />
              <p>
                Given such risks, the presence of intimate partner abuse in a family should be an important consideration in child 
                custody issues. Domestic violence results in homicide, as well. Victims who live in a household where weapons are 
                present and drugs are used have a greater risk of being killed by their abuser.</p>
              <br />
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
              style="background-color: #f6f5f5"
            >
            
              <div class="carousel-inner">
                <div class="item active">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px;"
                      >“Eating disorders become so ingrained in your personality that you feel like it’s part of who you are. You forget what it’s like to not have an eating disorder. Because I’d had it since I was 12 years old, I didn’t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it’s also going to be the most worthwhile. That's a really important message for anyone who's affected.” <a style = "color : #1181ae;" href="experience.html">..Read More</a></span
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
                    <span class="Title1" style = "font-size: 18px; text-shadow: none;  line-height: 30px;"
                      >“Eating disorders become so ingrained in your personality that you feel like it’s part of who you are. You forget what it’s like to not have an eating disorder. Because I’d had it since I was 12 years old, I didn’t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it’s also going to be the most worthwhile. That's a really important message for anyone who's affected.” <a style = "color : #1181ae;" href="experience.html">..Read More</a></span
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
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px;"
                      >“Eating disorders become so ingrained in your personality that you feel like it’s part of who you are. 
                      You forget what it’s like to not have an eating disorder. Because I’d had it since I was 12 years old, 
                      I didn’t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, 
                      but it’s also going to be the most worthwhile. That's a really important message for anyone who's affected.” <a style = "color : #1181ae;" href="experience.html">..Read More</a>
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
                style="background-color: #f6f5f5"
              >
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a
                class="carousel-control right"
                href="#DemoCarousel"
                data-slide="next"
                style="background-color: #f6f5f5"
              >
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
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
                  <a href="#"
                    ><span class="fa fa-chevron-right mr-2"></span>Contact</a
                  >
                </li>
                <li>
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
                      ><span class="icon fa fa-phone"></span
                      ><span class="text">+1234567889</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon fa fa-paper-plane pr-4"></span
                      ><span class="text">info@yourdomain.com</span></a
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
