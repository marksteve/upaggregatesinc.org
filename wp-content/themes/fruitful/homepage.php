<?php
/*
Template Name: Home
*/

get_header("home"); ?>

<body>
<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
	<video autoplay loop poster="http://upaggregatesinc.org/wp-content/uploads/2014/12/membership.jpg" id="bgvid">
<source src="http://upaggregatesinc.org/wp-content/uploads/2015/01/aggre-blue.m4v">
</video>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>

        
        <a id="nextsection" href="#org"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo" style="background: url('http://upaggregatesinc.org/wp-content/uploads/2014/12/logo.png') no-repeat center center;">
        	<a id="goUp" href="#home-slider" title="UP Aggregates, Inc.">UP Aggregates, Inc.</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#org">Organization</a></li>
                <li><a href="#member">Membership</a></li>
                <li><a href="#events">Events</a></li>
				<li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Organization Section -->
<div id="org" class="page">
<div id="org" class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">ORGANIZATION</h2>
				<h3 class="title-description">About the organization.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    

    <div class="subtitle-page">
        <h3 class="subtitle"><a href="<?php get_home_url();?>/organization/about-us" target="_blank">ABOUT US &#65515;</a></h3>
		<p>The University of the Philippines Aggregates, Incorporated also known as UP Aggregates, Inc. or simply <i>Aggre</i> is a non-profit, academic organization of civil engineering students based in the Institute of Civil Engineering of the University of the Philippines Diliman.</p>
    </div>

    <div class="row">
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">SIEVED</span>
                </div>
                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/sieved.jpg" alt="Sieved">
            </div>
            <p class="profile-description">Through time, we become the finest individuals that we can be. We do not select the best of the best, we make them.</p>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">REINFORCED</span>
                </div>
                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/reinforced.jpg" alt="Reinforced">
            </div>
            <p class="profile-description">The organization offers a lot of opportunities for the members' holistic development through seminars and workshops.</p>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">TESTED</span>
                </div>
                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/tested.jpg" alt="Tested">
            </div>
            <p class="profile-description">The organization helps its members be the best in whatever field they choose.</p>
        </div>
        <!-- End Profile -->
    </div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('section[data-type="background"]').each(function(){
			var $bgobj = $(this); // assigning the object
		 
			$(window).scroll(function() {
				var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
				 
				// Put together our final background position
				var coords = '50% '+ yPos + 'px';
	 
				// Move the background
				$bgobj.css({ backgroundPosition: coords });
			}); 
		});    
	});
</script>

	<div id="history" class="page">
	  <div id="contain" class="container">
		<div class="row subtitle-page">
				<section id="his" data-type="background" data-speed="10" class="pages"><h3 class="subtitle"><a href="<?php get_home_url();?>/organization/history" target="_blank">OUR HISTORY &#65515;</a></h3>
				<p>The University of the Philippines Aggregates was founded by 29 Civil Engineering students on July 1985 as a response to the need of a more fulfilling student organization, an organization that would highly recognize their academic objectives as well as provide an outlet for meaningful extra-curricular participation.</p></section>	
		</div>
   	  </div>
    </div>

<div class="page">
<div class="container">
	<div id="orgstr" class="subtitle-page">
        <h3 class="subtitle"><a href="<?php get_home_url();?>/organization/structure" target="_blank">ORGANIZATIONAL STRUCTURE &#65515;</a></h3>
		<p>The 2013 constitution of UP Aggregates, Inc. highlights the structure of the organization. It is headed by the President, who is elected by all active members at-large. The organization is divided to eight standing committees, each of which has a specific function within the organization.</p>
    </div>

	<div class="row">
		<div id="accordionArea" class="accordion">
		<div class="span4">
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#oneArea" data-toggle="collapse" data-parent="#accordionArea">Board of Directors
			</a></div>
			<div id="oneArea" class="accordion-body collapse">
			<div class="accordion-inner">All committee heads, headed by the President, constitute a separate group known as the "Board of Directors" and are involved with most of the decision-making and planning within the organization.</div>
			</div>
			</div>
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#twoArea" data-toggle="collapse" data-parent="#accordionArea">Internal Affairs
			</a></div>
			<div id="twoArea" class="accordion-body collapse">
			<div class="accordion-inner">The Committee for Internal Affairs is responsible for promoting the well-being of the members of the organization, proper classification of membership and handling matters within the organization. The head of the committee takes the Vice President position in the Board of Directors.</div>
			</div>
			</div>
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#threeArea" data-toggle="collapse" data-parent="#accordionArea">Logistics and Secretarial Operations
			</a></div>
			<div id="threeArea" class="accordion-body collapse">
			<div class="accordion-inner">The Committee for Logistics and Secretarial Operations assists the Secretary in the discharge of his duties. The head of the Logistics Committee is also the executive secretary of the organization. He is responsible for taking care of all records and documents of the organization, meeting schedules, correspondences and properties of the organization.</div>
			</div>
			</div>
		</div>
		
		<div class="span4">
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#fourArea" data-toggle="collapse" data-parent="#accordionArea">External Affairs
			</a></div>
			<div id="fourArea" class="accordion-body collapse">
			<div class="accordion-inner">The Committee for External Affairs is involved with all external money generating activities of the organization such as sponsorship and marketing proposals and external activities such as partnerships. It is also responsible in updating the organization on relevant events and activities. The head of the external affairs committee is also the marketing officer of the organization and manages the corporate portfolio of UP Aggregates.</div>
			</div>
			</div>
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#fiveArea" data-toggle="collapse" data-parent="#accordionArea">Finance
			</a></div>
			<div id="fiveArea" class="accordion-body collapse">
			<div class="accordion-inner">The Committee for Finance takes charge of all finances of the organization. The head of the Finance Committee is also the executive treasurer of the organization. The treasurer keeps all financial records and assets of UP Aggregates, Inc., collects all dues from the members, prepares financial statements and acts as the handlers of all business transactions of the organization.</div>
			</div>
			</div>
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#sixArea" data-toggle="collapse" data-parent="#accordionArea">Press and Publicity
			</a></div>
			<div id="sixArea" class="accordion-body collapse">
			<div class="accordion-inner">The Committee for Press and Publicity leads all external and internal communications and publicity of all events and activities of the organization. The head of the committee is also the editor-in-chief of <i>Sieve</i>, Aggre's official paper.</div>
			</div>
			</div>
		</div>
		<div class="span4">
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#sevenArea" data-toggle="collapse" data-parent="#accordionArea">Professionals and Alumni Relations
			</a></div>
			<div id="sevenArea" class="accordion-body collapse">
			<div class="accordion-inner">The Committee for Professionals and Alumni Relations conducts activities that promote the holistic professional formation of the members, as well as activities that will further strengthen the relationship between the members and alumni of the organization.</div>
			</div>
			</div>
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#eightArea" data-toggle="collapse" data-parent="#accordionArea">Academic Affairs
			</a></div>
			<div id="eightArea" class="accordion-body collapse">
			<div class="accordion-inner">The Committee for Academic Affairs stimulates all academic activities of the organization. The head of the academic committee tracks academic performance of its members, sets review sessions and activities that boost academic welfare of the organization and organizes the Aggregates academic archives.</div>
			</div>
			</div>
			<div class="accordion-group">
			<div class="accordion-heading accordionize"><a class="accordion-toggle" href="#nineArea" data-toggle="collapse" data-parent="#accordionArea">Applications
			</a></div>
			<div id="nineArea" class="accordion-body collapse">
			<div class="accordion-inner">The Committee for Applications processes the all application for membership activities of the organization. The head of the applications committee organizes events and other things to promote bonds and companionship between applicants and members of the organization.</div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End Organization Section -->

<!-- Membership Section -->
<div id="member" class="page">
<div id="member" class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">MEMBERSHIP</h2>
		<h3 class="title-description">The life of an Aggre member.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
	<div class="row">
		<div class="span6" id="apps">
		<div class="subtitle-page">
			<h3 class="subtitle"><a href="<?php get_home_url();?>/membership/application" target="_blank">APPLICATION &#65515;</a></h3>
			<p>As set by the Committee for Applications, the application process is a semester long trek  which consists of tasks that aim to let aspiring applicants have a glimpse of what kind of organization they are about to enter and let them be immersed in the family they chose. These tasks will open opportunities that will establish bonds between the applicants and the members, familiarize the applicants on how the organization works, develop in them values that the organization promotes and help them discover their potentials that will help them not only in college but in the real life as well. </p>
		</div>
		</div>
		
		<div class="span6" id="alum">
		<div class="subtitle-page">
			<h3 class="subtitle"><a href="<?php get_home_url();?>/membership/alumni-relations" target="_blank">ALUMNI RELATIONS &#65515;</a></h3>
			<p>Professionals and Alumni Relations Committee is the committee in charge of conducting activities that promote the holistic professional formation of the members and in conducting activities that will further strengthen the relationship between the members and alumni of the Organization.</p>
		</div>
		</div>
	</div>
	
	
	<div class="subtitle-page">
        <h3 class="subtitle"><a href="<?php get_home_url();?>/membership/members" target="_blank">MEMBERS &#65515;</a></h3>
		<p>UP Aggregates, Inc. has one hundred-two (102) members for the First Semester of AY 2014-2015.</p>
    </div>
			<div class="span12">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="President" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/PRES_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">President</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/pres.jpg" alt="President: Jayson Silang">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Internal Affairs" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/INTE_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">Internal Affairs</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/inte.jpg" alt="Director for Internal Affairs: Monica Ledesma">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Logistics" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/LOG_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">Logistics</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/log.jpg" alt="Director for Logistics and Secretarial Operations: Angeline Vergara">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="External Affairs" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/EXTE_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">External Affairs</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/exte.jpg" alt="Director for External Affairs: Monikka Tadeo">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Finance" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/FIN_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">Finance</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/fin.jpg" alt="Director for Finance: Eartha Becoñado">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Publicity" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/PUB_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">Publicity</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/pub.jpg" alt="Director for Press and Publicity: Maria Cristelle San Antonio">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Alumni Relations" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/PAR_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">Alumni Relations</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/par.jpg" alt="Director for Professionals and Alumni Relations: Frances Marie Yanos">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Academic Affairs" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/ACAD_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">Academic Affairs</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/acad.jpg" alt="Director for Academic Affairs: Aloysius Kristoffer Alipio">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span4">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Applications" href="http://upaggregatesinc.org/wp-content/uploads/2014/12/APP_2-01.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-text-thumb">Applications</span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/app.jpg" alt="Director for Applications: Abegail Santos">
                            </li>
                        	<!-- End Item Project -->
                        </ul>
                    </section>

            </div>
		</div>	

</div>
</div>
<!-- End Membership Section -->

<!-- Events Section -->
<div id="events" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                    <h2 class="title">EVENTS</h2>
                    <h3 class="title-description">Events held by the organization.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->

 
    <div class="row">
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="<?php get_home_url();?>/cetalk" target="_blank"><span class="overlay-img"></span></a>
                    <a href="<?php get_home_url();?>/cetalk" target="_blank"><span class="overlay-text-thumb">CE Talk</span></a>
                </div>
                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/cetalk.jpg" alt="CE Talk">
            </div>
        </div>

    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="<?php get_home_url();?>/photofest" target="_blank"><span class="overlay-img"></span></a>
                    <a href="<?php get_home_url();?>/photofest" target="_blank"><span class="overlay-text-thumb">Photofest</span></a>
                </div>
                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/pf.jpg" alt="Photofest">
            </div>
        </div>

    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="<?php get_home_url();?>/aggregatesquiz" target="_blank"><span class="overlay-img"></span></a>
                    <a href="<?php get_home_url();?>/aggregatesquiz" target="_blank"><span class="overlay-text-thumb">AggregatES Quiz</span></a>
                </div>
                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/esq.jpg" alt="ES Quiz">
            </div>
        </div>
		
    	<div class="span3 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="<?php get_home_url();?>/enggweek" target="_blank"><span class="overlay-img"></span></a>
                    <a href="<?php get_home_url();?>/enggweek" target="_blank"><span class="overlay-text-thumb">Engineering Week</span></a>
                </div>
                <img src="http://upaggregatesinc.org/wp-content/uploads/2014/12/enggweek.jpg" alt="Engg Week">
            </div>
        </div>
		
    </div>

</div>
</div>
<!-- End Events Section -->


<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">CONTACT US</h2>
                <h3 class="title-description">Drop us a message.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">
        
        	<form id="contact-form" class="contact-form" action="<?php bloginfo('template_directory');?>/contact.php">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Message" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                	<input type="submit" class="submit_btn" name="submit" id="submit" value="Send" /><!--<a id="contact-submit" class="submit" href="#">Submit</a>-->
                </p>
                
                <div id="response">
                
                </div>
            </form>
         
        </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3>Contact Details</h3>
                <ul>
                    <li><a href="#">upaggregatesinc@gmail.com</a></li>
                    <li>
                        1/F Melchor Hall
						<br />Institute of Civil Engineering
                        <br />University of the Philippines
                        <br />Diliman, Quezon City
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->

<!-- Socialize -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/upaggregatesinc" title="Follow us on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/UP.Aggregates" title="Like us on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
						<li><a href="https://youtube.com/user/upaggregatesinc" title="Subscribe to our YouTube channel" target="_blank"><span class="font-icon-social-youtube"></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->				

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php bloginfo('template_directory');?>/_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="<?php bloginfo('template_directory');?>/_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="<?php bloginfo('template_directory');?>/_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="<?php bloginfo('template_directory');?>/_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="<?php bloginfo('template_directory');?>/_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="<?php bloginfo('template_directory');?>/_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="<?php bloginfo('template_directory');?>/_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="<?php bloginfo('template_directory');?>/_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="<?php bloginfo('template_directory');?>/_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php bloginfo('template_directory');?>/_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

<?php get_footer("home"); ?>