<?php session_start(); ?>
<!DOCTYPE html>
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
  <body>
  <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-paper-plane mr-1">headtobetterlife@gmail.com</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Head to Better Life</a>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			<?php 
				if(isset($_SESSION['username']) && !empty($_SESSION['username']))
				{ 
			?>
				<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="#disease" class="nav-link">Disease</a></li>
	          <li class="nav-item"><a href="books.php" class="nav-link">Books</a></li>
	          <li class="nav-item"><a href="song.php" class="nav-link">Music</a></li>
			  <li class="nav-item"><a href="forum.php" class="nav-link">Discussion Forum</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="./php/logout.php" class="nav-link">Logout</a></li>
			  Welcome, <?php echo $_SESSION['username']; ?>
			<?php } 
			else { ?>
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
			  <li class="nav-item"><a href="#disease" class="nav-link">Disease</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
			<li class="nav-item"><a href="#send_message" class="nav-link">Contact Us</a></li>
			<?php } ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/home.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text w-100">
	             <h1 class="mb-4">Revitalized Minds</h1>
	            <p class="mb-4">Some of the most comforting words in the universe are ???me too.??? That moment when you find out that your struggle is also someone else???s struggle, that you???re not alone, and that others have been down the same road.</p> 
	            <p><a href="about.php" class="btn btn-primary py-3 px-4">About us</a> <a href="#send_message" class="btn btn-white py-3 px-4">Contact Us</a></p>
            </div>
          </div>
          
        </div>
      </div>
    </div>

       <section class="ftco-intro">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="intro aside-stretch d-lg-flex w-100">
              <!--
    					<div class="icon">
    						<span class="flaticon-checklist"></span>
    					</div>
            -->
					<div class="text">
    						<h2>100% Confidential</h2>
							<p align = justify>We value your privacy and recognize our role in protecting your personal data. We care about the privacy of children also. Accordingly, we do not direct our Sites to children under the age of 16 or knowingly collect Personal Data from them. If we learn that a user is under 16, we will promptly delete any Personal Data that the individual has provided to us.</p>
    				</div>
    					
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-1 d-lg-flex w-100">
              <!--
    					<div class="icon">
    						<span class="flaticon-employee"></span>
    					</div>
            -->
    					<div class="text">
    						<h2>Our Patient Promise</h2>
    						<p align = justify>We promise to be there for you every step of your journey. Our goal is to help you grow from your struggles, heal from your pain, and move forward to where you want to be in your life. </p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex">
    				<div class="intro color-2 d-lg-flex w-100">
              <!--
    					<div class="icon">
    						<span class="flaticon-umbrella"></span>
    					</div>
            -->
    					<div class="text">
    						<h2>Responsible</h2>
							<p align = justify>We pride ourselves in providing a nurturing, clean and confidential atmosphere for our friends.
								We are committed to help our friends and their families achieve health solutions in a comforting, confidential, and supportive environment.
							</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		<section class="ftco-section" id = "services">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Services</span>
            <span class="subheading">Services</span>
            <p align = center>Connect with the world where you are not alone. No judgements, just unconditional support, acceptance & guidance so that you can reclaim your inner harmony</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-calendar"></span>
	    					</div>
    					</div>
    					<h2>Provide Trusted Information</h2>
    					<p>We provide you with correct information related to disease</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-qa"></span>
	    					</div>
    					</div>
						<h2>Discuss with the world</h2>
  						<p>Provide you a platform to talk and write about your experiences</p>
    					
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<span class="flaticon-checklist"></span>
	    					</div>
    					</div>
    					<h2>Entertainment</h2>
  						<p>Along with recommending music we offer you read online books</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/Image.jpg);">
					</div>
					<div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light">
	          <div class="heading-section">
	          	<span class="subheading">Welcome to New Life</span>
	            <h2 class="mb-4">Best Site To Deal With Mental Health Issues</h2>

	            <p>A report by the World Health Organization (WHO) revealed that 7.5 percent of the Indian population suffers from some form of mental disorder. Mental illnesses constitute one-sixth of all health-related disorders and India accounted for nearly 15% of the global mental, neurological and substance abuse disorder burden. The treatment gap, which is defined as the prevalence of mental illnesses and the proportion of patients that get treatment, is over 70 percent. WHO also predicts that by 2020, roughly 20 percent of India will suffer from mental illnesses. And to cater to this demographic, we have less than 4,000 mental health professionals. </p>
	            
	          </div>

					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section" id="disease">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Our Services</span>
            <h2 class="mb-3">We Can Help You With These Issues</h2>
          </div>
        </div>
				<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Anxiety Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Bipolar and Related Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Depressive Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4">Addictive Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5">Eating Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Obsessive-Compulsive and Related Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7">Personality Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-8">Schizophrenia and Psychotic Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-9">Trauma and Stress Related Disorders</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-10">Grief and loss when caring</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-11">Self Harm</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-12">Suicidal Thoughts</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-13">Domestic Violence</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	<div class="img" style="background-image: url(images/anxiety.jpg);"></div>
						  	<h3>Anxiety Disorders</h3>
						  	<p>Anxiety disorders are a group of mental illnesses that cause constant and overwhelming anxiety and fear.  
								The excessive anxiety can make you avoid work, school, family get-togethers, and other social 
								situations that might trigger or worsen your symptoms. 
								With treatment, many people with anxiety disorders can manage their feelings.
								<br>
								It can be challenging and frustrating to live with an anxiety disorder. The constant worry and fear can make you feel 
								tired and scared. If you???ve talked to a doctor about your symptoms, then you???ve taken the first step toward letting go 
								of the worry. It can take some time to find the right treatment that works for you. If you have more than one anxiety 
								disorder, you may need several kinds of treatment. For most people with anxiety disorders, a combination of medicine 
								and counseling is best. With proper care and treatment, you can learn how to manage your symptoms and thrive.
								<a href="anxiety.php"><span style = "color : blue">Read More</a>
							</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	<div class="img" style="background-image: url(images/1.jpg);"></div>
						  	<h3>Bipolar and Related Disorders</h3>
						  	<p>
								Bipolar disorder, formerly called manic depression, is a mental health condition that causes extreme mood 
								swings that include emotional highs (mania or hypomania) and lows (depression). When you become depressed, 
								you may feel sad or hopeless and lose interest or pleasure in most activities. When your mood shifts to mania 
								or hypomania (less extreme than mania), you may feel euphoric, full of energy or unusually irritable. 
								These mood swings can affect sleep, energy, activity, judgment, behavior and the ability to think clearly.          
								Episodes of mood swings may occur rarely or multiple times a year. While most people will experience some 
								emotional symptoms between episodes, some may not experience any. Although bipolar disorder is a lifelong 
								condition, you can manage your mood swings and other symptoms by following a treatment plan. In most cases, 
								bipolar disorder is treated with medications and psychological counseling (psychotherapy). 
								<a href="bipolar.php"><span style = "color : blue">Read More</a>
							  </p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	<div class="img" style="background-image: url(images/dv.jfif);"></div>
						  	<h3>Depressive Disorders</h3>
						  	<p align = justify>
Feelings of sadness, guilt, irritability or even worthlessness are something most people experience at some point. However, when these feelings are present for most of the day, every day for at least two weeks and interfere in daily functioning (such as work, school or sport commitments), then this is considered clinical depression. Depression often results in impaired sleeping patterns and appetite, diminished interest in daily activities and general fatigue. Although sometimes triggered by life events, such as bullying or the breakup of a relationship, depression can often occur without any obvious reason or trigger. Severe depression may result in suicidal thoughts. 
Non-melancholic depression, also known as major or clinical depression, is the most common form of depression. Clinical depression often occurs in response to 
psychological factors, such as experiencing a series of stressful events, but may not resolve once these issues have been resolved. 
As non-melancholic depression does not have any defining symptoms (such as psychotic features or impaired mental functioning) it may 
be difficult to diagnose. Other forms of depression include melancholic depression, which is typically more severe than a non-melancholic depression, and psychotic depression. 
Melancholic depression is thought to be more strongly influenced by biological factors than non-melancholic depression, affecting around 1-2% of the general population. 
Psychotic depression, which presents with psychotic features, is relatively uncommon. Depression can often co-occur with other anxiety and substance abuse disorders . <a href="Depressive_Disorders.html"><span style = "color : blue">Read More</a> 
 
</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	<div class="img" style="background-image: url(images/addict.jpg);"></div>
						  	<h3>Addictive Disorders</h3>
						  	<p align = justify>Alcohol is one of the most prevalent recreational drugs in Australia, and is a major cause of injury and death for young Australians. Drinking can become problematic when many alcoholic drinks are consumed in a short period of time (binge drinking), or when a person becomes psychologically and/or physically dependant on alcohol. Situations involving alcohol and drugs use often lead to other risky behaviours and activities, such as drink driving, unsafe sex or outbursts of violence.
Signs alcohol or drug use may be a problem :- 
1) experiencing blackouts when drinking
2) drinking alone
3) concealing drinking from family and friends
4) having unsafe sex, or regretting past sexual activity that occurred under the influence of alcohol or drugs
5) physical withdrawal symptoms including, sweating, nausea, shaking or trembling in the absence of drug or alcohol use
6) social withdrawal
7) mood swings
8) failing relationships with friends and family
9) impaired performance at school or work . <a href="Addictive_Disorders.php"><span style = "color : blue">Read More</a>
</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	<div class="img" style="background-image: url(images/eatingDisorder.jpg);"></div>
						  	<h3>Eating Disorders</h3>
						  	<p>
								An eating disorder is about much more than food; it is a mental illness. Unhealthy eating
								 behaviours and relentless thoughts about food are symptoms of more complex issues. Your 
								 eating behaviours may have developed as a way of dealing with things in your life that feel 
								 out of control, or they may be a way of coping with troubling emotions. Eating in the way 
								 your disorder compels you to can make you feel guilty, ashamed, and disgusted. Your hidden 
								 feelings about your eating may lead you to deny your behaviours, or hide them from yourself 
								 and others. Having an eating disorder may make you feel like you have lost control of your 
								 body and your behaviours, but it may also be a way of feeling control over an aspect of your 
								 life. Either way, an eating disorder can become a key part of the way you see yourself. 
								 An eating disorder can take over your life, and it may seem too big to deal with. But it is 
								 important to remember that all eating disorders can be treated, and full recovery is possible 
								 at every age.
								 <a href="Eating_Disorder.php"><span style = "color : blue">Read More</a>
							  </p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	<div class="img" style="background-image: url(images/OCD3.jpg);"></div>
						  	<h3>Obsessive-Compulsive and Related Disorders</h3>
						  	<p>
								Obsessive-Compulsive and related disorders include
								obsessive-compulsive disorder (OCD), body dysmorphic disorder,
								hoarding disorder, trichotillomania (hair-pulling disorder), and
								excoriation (skin-picking) disorder. Often called the doubting
								disease, OCD is typically characterized by the presence of
								obsessions and compulsions that the individual finds difficult to
								control.
								Some other disorders included in this category are also
								characterized by preoccupations and by repetitive behaviors or
								mental acts in response to those preoccupations. Others are
								characterized primarily by recurrent body-focused repetitive
								behavior (e.g., hair pulling, skin-picking) and repeated attempts
								to decrease or stop the behaviors.
								<a href="OCD.php"><span style = "color : blue">Read More</a>
							  </p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-7">
							<div class="img" style="background-image: url(images/personalityDisorder.jpeg);"></div>
							<h3>Personality Disorders</h3>
							<p>
								Personality is the way of thinking, feeling and behaving that makes a person different from other people.
								An individual???s personality is influenced by experiences, environment (surroundings, life situations) and 
								inherited characteristics. A person???s personality typically stays the same over time. A personality 
								disorder is a way of thinking, feeling and behaving that deviates from the expectations of the culture,
								causes distress or problems functioning, and lasts over time. There are 10 specific types of personality
								disorders. Personality disorders are long-term patterns of behavior and inner experiences that differs 
								significantly from what is expected. The pattern of experience and behavior begins by late adolescence
								or early adulthood and causes distress or problems in functioning. Without treatment, personality 
								disorders can be long-lasting. Personality disorders affect at least two of these areas: Way of 
								thinking about oneself and others , Way of responding emotionally , Way of relating to other people, 
								Way of controlling one???s behavior. 
							   <a href="Personaliy_Disorder.php"><span style = "color : blue">Read More</a>
							</p>
							</div>
							<div class="tab-pane container p-0 fade" id="services-8">
								<div class="img" style="background-image: url(images/Schizophrenic.jpg);"></div>
								<h3>Schizophrenia and Psychotic Disorders</h3>
								<p>
									Schizophrenia is a challenging brain disorder that often makes it difficult to distinguish between
									what is real and unreal, to think clearly, manage emotions, relate to others, and function normally.
									It affects the way a person behaves, thinks, and sees the world. Contrary to popular belief, 
									schizophrenia is not a split or multiple personality. Schizophrenia involves a psychosis, a type 
									of mental illness in which a person can???t tell what???s real from what???s imagined. At times, people 
									with psychotic disorders lose touch with reality. The world may seem like a jumble of confusing 
									thoughts, images, and sounds. Their behavior may be very strange and even shocking. A sudden change 
									in personality and behavior, which happens when people who have it lose touch with reality, 
									is called a psychotic episode. They may see or hear things that don???t exist, speak in confusing 
									ways, believe that others are trying to harm them, or feel like they???re being constantly watched.
									This can cause relationship problems, disrupt normal daily activities like bathing, eating, or 
									running errands, and lead to alcohol and drug abuse in an attempt to self-medicate. Many people
									with schizophrenia withdraw from the outside world, act out in confusion and fear, and are at an 
									increased risk of attempting suicide, especially during psychotic episodes, periods of depression, 
									and in the first six months after starting treatment.
								   <a href="Schizophrenia.php"><span style = "color : blue">Read More</a>
								</p>
							</div>
						<div class="tab-pane container p-0 fade" id="services-9">
							<div class="img" style="background-image: url(images/Trauma.jpg);"></div>
							<h3>Trauma and Stress Related Disorders</h3>
							<p>
								According to the American Psychological Association (APA), trauma is ???an emotional response to a 
								terrible event like an accident, rape, or natural disaster.??? However, a person may experience trauma 
								as a response to any event they find physically or emotionally threatening or harmful. A traumatized 
								person can feel a range of emotions both immediately after the event and in the long term. They may 
								feel overwhelmed, helpless, shocked, or have difficulty processing their experiences. Trauma can also 
								cause physical symptoms. Trauma can have long-term effects on the person???s well-being. If symptoms 
								persist and do not decrease in severity, it can indicate that the trauma has developed into a mental 
								health disorder called post-traumatic stress disorder (PTSD). Trauma and stressor-related disorders 
								are a group of emotional and behavioral problems that may result from childhood traumatic and stressful 
								experiences. These traumatic and stressful experiences can include exposure to physical or emotional 
								violence or pain, including abuse, neglect or family conflict. Observing a parent being treated 
								violently, for example, can be a traumatic experience, as can being the victim of violence or abuse. 
								Stressors such as parental separation or divorce or even more severe stressors such as emotional or 
								physical neglect can cause problems when they are prolonged or not addressed by caring adults. Even a 
								move or the birth of a sibling can be a stressor that can cause significant difficulties for some 
								children.
							   <a href="Trauma.php"><span style = "color : blue">Read More</a>
							</p>
						</div>
						<div class="tab-pane container p-0 fade" id="services-10">
							<div class="img" style="background-image: url(images/grief.jpg);"></div>
							<h3>Grief and loss when caring</h3>
							<p>
								When you lose someone or something dear to you, it's natural to feel pain and grief. 
								The grief process is normal, and most people go through it. But when grief takes over your life and 
								you begin to feel hopeless, helpless, and worthless, then it's time to talk to your doctor about 
								telling the difference between normal grief and depression. Grief is a natural response to death or 
								loss. The grieving process is an opportunity to appropriately mourn a loss and then heal. The process 
								is helped when you acknowledge grief, find support, and allow time for grief to work. Each year, 
								between 5% and 9% of the population loses a close family member. But that's not the only kind of 
								loss that can cause grief. People can feel loss when: 
                  <ol>
                      <li>They become separated from a loved one</li>
                      <li>They lose a job, position, or income
                    </li>
                      <li>A pet dies or runs away
                    </li>
                      <li>Kids leave home
                    </li>
                      <li>They have a major change in life such as getting a divorce, moving, or retiring
                    </li>
                  </ol>
              	While we all feel grief and loss, and each of us is unique in the ways we cope with our feelings. Some people have 
				  healthy coping skills. They're able to feel grief without losing sight of their daily responsibilities. Other people 
				  don't have the coping skills or support they need. That hinders the grieving process. We generally think of grief 
				  as a reaction to a death. But there is another grief that comes from loss while someone is still living. This grief 
				  is often experienced when caring for someone with a chronic illness. Chronic illness, and particularly any illness 
				  that impairs a person???s cognitive ability, causes caregivers and loved ones to experience grief and loss right now. 
				  In this fact sheet, we will discuss the grief related to death and dying, and grief associated with chronic illness. 
				  It is natural to grieve the death of a loved one before, during, and after the actual time of their passing. 
				  The process of accepting the unacceptable is what grieving is all about.
							   <a href="loss.php"><span style = "color : blue">Read More</a>
							</p>
						</div>
						<div class="tab-pane container p-0 fade" id="services-11">
							<div class="img" style="background-image: url(images/selfharm.jfif);"></div>
							<h3>Self Harm</h3>
							<p>
								Self-harm describes any behaviour where someone causes harm to themselves,
               usually as a way to help cope with difficult or distressing thoughts and feelings. 
               It most frequently takes the form of cutting, burning or non-lethal overdoses. 
               However, it can also be any behaviour that causes injury - no matter how minor, 
               or high-risk behaviours. Basically, any behaviour that that causes harm or injury to someone as a way to 
                deal with difficult emotions can be seen as self-harm.Self-harm usually starts as a way 
                to relieve the build-up of pressure from distressing thoughts and feelings. This might give 
                temporary relief from the emotional pain the person is feeling. It???s important to know that 
                this relief is only temporary because the underlying reasons still remain. Soon after, feelings 
                of guilt and shame might follow, which can continue the cycle. Because there may be some temporary relief at the start, self-harm can become someone???s normal 
                way of dealing with life???s difficulties. This means that it is important to talk to someone as 
                early as possible to get the right support and help. Learning new coping strategies to deal with
                 these difficulties can make it easier to break the cycle of self-harm in the long term.
							   <a href="selfharm.php"><span style = "color : blue">Read More</a>
							</p>
						</div>
						<div class="tab-pane container p-0 fade" id="services-12">
							<div class="img" style="background-image: url(images/sucidialthoughts.jfif);"></div>
							<h3>Suicidal Thoughts</h3>
							<p>
								Suicidal thoughts, or suicide ideation, refers to thinking about or planning suicide. 
              Thoughts can range from creating a detailed plan to having a fleeting consideration. It does not 
              include the final act of suicide. Suicide itself is not a mental disorder, but one of the most 
              important causes of suicide is mental illness ??? most often Depression, Bipolar Disorder (Manic Depression), 
              Schizophrenia, and Substance Use Disorders.Many people experience suicidal thoughts, especially during times 
              of stress or when they are facing mental or physical health challenges.
                Suicidal thoughts are a symptom of an underlying problem. Treatment is
                 effective in many cases, but the first step is to ask for help. If a loved one 
                 is having these thoughts or talking about suicide, it is essential to take 
                 action to help and protect them.
							   <a href="sucide.php"><span style = "color : blue">Read More</a>
							</p>
						</div>
						<div class="tab-pane container p-0 fade" id="services-13">
							<div class="img" style="background-image: url(images/dv.jfif);"></div>
							<h3>Domestic Violence</h3>
							<p>
								The Protection of Women from Domestic Violence Act (PWDVA), 2005[14] defines domestic violence as any act, omission or 
              commission or conduct of the respondent, which includes threat or actual abuse.Domestic violence against women is an 
              all-pervasive phenomenon worldwide. Declared as a ???public health epidemic??? by the World Health Organization (WHO), 
              it continues to afflict more than one-third of the women globally. It refers to ???any act of gender-based violence 
              that results in, or is likely to result in, physical, sexual or psychological harm or suffering to women.??? The act 
              of violence may occur in family, general community, or even being perpetrated and condoned by state. It has serious
               health consequences ??? not just for women and children but also for their family.
							   <a href="domesticviolence.php"><span style = "color : blue">Read More</a>
							</p>
						</div>

						</div>
						</div>
					</div>
				</div>
			</div>
		</section>

  
       <section class="ftco-section testimony-section">
    	<div class="img img-bg border"></div>
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p align = "justify" class="mb-4"> I suffer from anxiety and depression. It was then I found about this amazing site which not only provide you the exact information but also take care about your happiness and joy. </p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Aley Walker</p>
		                  </div>
	                  </div>
                  </div>

              
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p  align = "justify" class="mb-4">Due to depression I started feeling lonely then I started discussing my issues on this platform and this gave really good results and after that I don't feel lonely any more.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">John</p>
		                    
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p  align = "justify" class="mb-4">Suffering from addictive disorder I felt that I'll never be able to get rid of it but then I read inspirational stories of survivors on this site which motivated me to fight against my disorder.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Katty</p>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--
		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Price &amp; Plans</span>
            <h2>Affordable Packages</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Adults</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Individual Counseling</li>
		              <li><span class="fa fa-check mr-2"></span>Couples Therapy</li>
		              <li><span class="fa fa-check mr-2"></span>Family Therapy</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Children</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Counseling for Children</li>
		              <li><span class="fa fa-check mr-2"></span>Behavioral Management</li>
		              <li><span class="fa fa-check mr-2"></span>Educational Counseling</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mo</sub></span>
		            <span class="excerpt d-block">For Business</span>
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>Consultancy Services</li>
		              <li><span class="fa fa-check mr-2"></span>Employee Counseling</li>
		              <li><span class="fa fa-check mr-2"></span>Psychological Assessment</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

  -->
		
		<section class="ftco-appointment ftco-section img" id="send_message" >
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 half ftco-animate">
    				<h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
    				<form action="./php/submit_message.php" class="appointment" method="POST">
    					<div class="row">
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" name="email" id="email" placeholder="Email">
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="disease" id="disease" class="form-control">
	                      	<option name="disease" id="disease" value="Services">Services</option>
	                        <option name="disease" id="disease" value="Anxiety Disorders">Anxiety Disorders</option>
	                        <option name="disease" id="disease" value="Bipolar and Related Disorders">Bipolar and Related Disorders</option>
	                        <option name="disease" id="disease" value="Depressive Disorders">Depressive Disorders</option>
	                        <option name="disease" id="disease" value="Addictive Disorders">Addictive Disorders</option>
	                        <option name="disease" id="disease" value="Eating Disorders">Eating Disorders</option>
	                        <option name="disease" id="disease" value="Obsessive-Compulsive and Related Disorders">Obsessive-Compulsive and Related Disorders</option>
							<option name="disease" id="disease" value="Personality Disorders">Personality Disorders</option>
							<option name="disease" id="disease" value="Schizophrenia and Psychotic Disorders">Schizophrenia and Psychotic Disorders</option>
							<option name="disease" id="disease" value="Trauma and Stress Related Disorders">Trauma and Stress Related Disorders</option>
							<option name="disease" id="disease" value="Grief and loss when caring">Grief and loss when caring</option>
							<option name="disease" id="disease" value="Self Harm">Self Harm</option>
							<option name="disease" id="disease" value="Suicidal Thoughts">Suicidal Thoughts</option>
							<option name="disease" id="disease" value="Domestic Violence">Domestic Violence</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" id="Submit" name="Submit" value="Send message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<!-- <a href="blog.php" class="block-20 img" >
	              </a> -->
				  <img src="images/blog1.jpeg" class="block-20 img"/>
                <!--
	              <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                	<div>
                		<span class="day">18</span>
                		<span class="mos">April</span>
                		<span class="yr">2020</span>
                	</div>
                </div>
              -->
                <h3 class="heading mb-3"><a href="blog.php">Anxiety </a></h3>
                <p>6-Step Morning Routine to Reduce Anxiety</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<!-- <a href="blog-single.html" class="block-20 img" style="background-color: #cbe2b0">
                </a> -->
				<img src="images/blog2.jpeg" class="block-20 img"/>
                <!--
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                  <div>
                    <span class="day">18</span>
                    <span class="mos">April</span>
                    <span class="yr">2020</span>
                  </div>
                </div>
              -->
                <h3 class="heading mb-3"><a href="blog.php">Depression</a></h3>
                <p>Depression is a common and serious medical illness that negatively affects how you feel, the way you think and how you act. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text text-center">
              	<!-- <a href="blog-single.html" class="block-20 img" style="background-color: #fcf7bb">
                </a> -->
				<img src="images/blog3.jpeg" class="block-20 img"/>
                <!--
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                  <div>
                    <span class="day">18</span>
                    <span class="mos">April</span>
                    <span class="yr">2020</span>
                  </div>
                </div>
              -->
                <h3 class="heading mb-3"><a href="blog.php">Dealing with Depression</a></h3>
		      <p><center>5 Prayers for Depression</center></p>           
							</div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<footer class="ftco-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo"><a href="#">Head to Better Life</a></h2>
                        <p>???There is hope, even when your brain tells you there isn???t.??? ??? John Green</p>
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
                            <li><a href="about.php"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="#services"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
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