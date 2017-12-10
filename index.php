<?php
	$name = "Teressa McKenzie";
	$email = "serge72mt@gmail.com";
	$phone = "+44 740 407 6019";
	$status = "Designer, Airbnb Host";
	$address = "1E welspring Crescent, London, HA9 9UW";
	$hello = "Hey, I’m Tess!";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $hello; ?></title>
	<link rel="icon" type="image/png" href="portfolio/images/user-img.png" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="portfolio/css/style.css" />
	<link rel="stylesheet" type="text/css" href="portfolio/css/responsive.css" />
	<link rel="stylesheet" href="portfolio/plugins/bootstrap/css/bootstrap.min.css">



</head>

<body>
	<!-- navigation -->
	<nav class="pages-nav">
		<div class="pages-nav__item"><a class="link link--page" href="#page-home">Home</a></div>
		<div class="pages-nav__item"><a  class="link link--page" href="#page-about">About</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-portfolio">Properties</a></div>
		<div class="pages-nav__item"><a class="link link--page" href="#page-contact">Contact</a></div>
		
		<div class="pages-nav__item pages-nav__item--social">
			<a class="link link--social link--faded" href="#Twitter"><i class="fa fa-twitter"></i><span class="text-hidden">Twitter</span></a>
			<a class="link link--social link--faded" href="#LinkedIn"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
			<a class="link link--social link--faded" href="#Facebook"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
			<a class="link link--social link--faded" href="#YouTube"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>
		</div>
	</nav>
	<!-- /navigation-->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			<div class="wrapper">
				<div class="wrapper-inner">
				<div class="container">	
					<div class="row">
						<div class="col-md-6 col-sm-9">
							<div id="profile-intro">
								<h1 class="name">
									<?php echo $hello; ?>
								</h1>
								<h3 class="status" style="font-size: 25px; text-align: left;">
									<?php echo $status; ?>
								</h3>
								<br>
								<p>
									Hello! I’m <?php echo $name; ?>.
									Originally from London and part French, I am an avid traveller, always keen to discover very different and wonderful places around the globe. 
Taking in the varied cultures, sights and food !
<br><br>

I hope to see you soon :)
								</p>
							</div>
							<ul class="profile-list">
								<li class="clearfix">
									<strong class="title">Age</strong>
									<span class="cont">29, (June)</span>
								</li>
								<li class="clearfix">
									<strong class="title">Address</strong>
									<span class="cont">1E welspring Crescent, London, Middlesex
									</span>
								</li>
								<li class="clearfix">
									<strong class="title">E-mail</strong>
									<span class="cont"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span>
								</li>
								<li class="clearfix">
									<strong class="title">Phone</strong>
									<span class="cont"><a href="tel:+447404076019">+44 740 407 6019</a></span>
								</li>
								<li class="clearfix">
									<strong class="title">Language</strong>
									<span class="cont">English, French, Spanish, Italian, German</span>
								</li>
							</ul>
							<br>
							<a class="theme-btn center block mr-btm-sm" href="#">
								<i class="fa fa-download" aria-hidden="true"></i>
							download CV</a>
						</div><!-- /col -->
						<div class="col-md-6 col-sm-3 hidden-xs">
							<div class="profile-img-1 hvr-float-shadow shdow">
								<img  class="img-responsive " src="portfolio/images/user-img.png">
							</div>
						</div><!-- /col -->
					</div><!-- /row -->
				</div><!-- /container -->
			</div>
			</div><!-- /wrapper -->
		</div>
		<!-- /page -->

		<div class="page" id="page-about">
			<div class="wrapper">
				<div class="container">
					<div class="wrapper-inner">
					<div class="row">
						<div class="col-md-9 col-sm-9 col-xs-12">
							<div id="profile-intro">
								<h1 class="name">
									<?php echo $name; ?>
								</h1>
								<h3 class="status" style="font-size: 25px; text-align: left;">
									About Me
								</h3>
								<br><br>
								<p>
									Being a jewellery designer and working in fashion means I get to travel quite a bit. 
My home is always a calming and relaxing base for me to come back to.
<br><br>
The experience of being an Airbnb host and meeting so many lovely people along the way is really something I particularly enjoy, my main aim is to create a comfortable, relaxing and "home away from home" experience for guests.
<br><br>
My priority is to always be readily available and provide as much info and assistance as possible, all the things I value when traveling somewhere new myself.
</p>
								
							</div>	
						</div><!-- /col -->
						<div class="col-md-3 col-sm-3 col-xs-3 hidden-xs">
							<div class="profile-img">
								<img class="img-responsive" src="portfolio/images/user-img.png" alt="">
							</div>	
						</div><!-- /col -->
					</div><!-- /row -->

					<section id="skills">
						<div class="row">
							<div class="col-md-12">
								<div class="title-heading">
									<h2>MY SKILLS</h2>
								</div>
							</div><!-- /col -->
						</div><!-- /row -->
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="law-skill">
									<!--Start single experience bar item-->
									<div class="progress-label">
										<h4>Airbnb Host 95%</h4>
									</div>
									<div class="progress slim progress-striped">
										<div class="progress-bar progress-bar-primary 95% animation-visible" data-appear-progress-animation="95%" style="width: 95%;">
										</div>
									</div>
									<!--End single experience bar item-->
									<!--Start single experience bar item-->
									<div class="progress-label">
										<h4>Web Design 80%</h4>
									</div>
									<div class="progress slim progress-striped ">
										<div class="progress-bar progress-bar-primary 90% animation-visible skill-color-2" data-appear-progress-animation="90%" style="width: 90%;">
										</div>
									</div>
									<!--End single experience bar item-->
									<!--Start single experience bar item-->
									<div class="progress-label">
										<h4>PHP & MySQL 100%</h4>
									</div>
									<div class="progress slim progress-striped">
										<div class="progress-bar progress-bar-primary 75% animation-visible skill-color-3" data-appear-progress-animation="75%" style="width: 75%;">
										</div>
									</div>
									<!--End single experience bar item-->
								</div>
							</div><!-- /col -->

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="law-skill">
									<!--Start single experience bar item-->
									<div class="progress-label">
										<h4>Jewellery Designer 98%</h4>
									</div>
									<div class="progress slim progress-striped">
										<div class="progress-bar progress-bar-primary 98% animation-visible skill-color-4" data-appear-progress-animation="98%" style="width: 98%;">
										</div>
									</div>
									<!--End single experience bar item-->
									<!--Start single experience bar item-->
									<div class="progress-label">
										<h4>HTML & CSS 80%</h4>
									</div>
									<div class="progress slim progress-striped">
										<div class="progress-bar progress-bar-primary 90% animation-visible skill-color-5" data-appear-progress-animation="90%" style="width: 90%;">
										</div>
									</div>
									<!--End single experience bar item-->
									<!--Start single experience bar item-->
									<div class="progress-label">
										<h4>Photoshop 100%</h4>
									</div>
									<div class="progress slim progress-striped">
										<div class="progress-bar progress-bar-primary 75% animation-visible skill-color-6" data-appear-progress-animation="75%" style="width: 75%;">
										</div>
									</div>
									<!--End single experience bar item-->

								</div>
							</div><!-- /col -->
						</div><!-- /row -->
					</section><!-- /skill -->

					<section id="hobby" class="pad-top">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="title-heading">
									<h2>MY HOBBIES</h2>
								</div>
							</div><!-- /col -->
							<div class="col-md-2 col-sm-2 col-xs-6">
								<div class="hobbyicon">
									<img src="portfolio/images/icons/cycle.png" alt="">
								</div>
								<p>
									Cycling
								</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-6">
								<div class="hobbyicon">
									<img src="portfolio/images/icons/swim.png" alt="">
								</div>
								<p>
									Swimming
								</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-6">
								<div class="hobbyicon">
									<img src="portfolio/images/icons/movie.png" alt="">
								</div>
								<p>
									Watch Movies
								</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-6">
								<div class="hobbyicon">
									<img src="portfolio/images/icons/study.png" alt="">
								</div>
								<p>
									Study
								</p>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-6">
								<div class="hobbyicon">
									<img src="portfolio/images/icons/skating.png" alt="">
								</div>
								<p>
									Skating
								</p>
							</div>	
							<div class="col-md-2 col-sm-2 col-xs-6">
								<div class="hobbyicon">
									<img src="portfolio/images/icons/tennis.png" alt="">
								</div>
								<p>
									Playing Tennis
								</p>
							</div>								
						</div><!-- /row -->
					</section><!-- /hobby -->
				</div><!-- /container -->
			</div>
			</div><!-- /wrapper -->
		</div><!-- /page -->

		

		<div class="page" id="page-portfolio">
			<div class="wrapper">
				<div class="wrapper-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div id="profile-intro">
								<h1 class="name">
									<?php echo $name; ?>
								</h1>
								<h3 class="status" style="font-size: 25px; text-align: left;">
									Airbnb Properties
								</h3>
							</div>	
						</div><!-- /col -->
						<div class="col-md-3">
							<div class="profile-img">
								<img class="img-responsive" src="portfolio/images/user-img.png" alt="">
							</div>
						</div><!-- /col -->
					</div><!-- /row -->
					<section class="latest-gallery text-center">
						<div class="container">            
							<ul class="post-filter list-inline">
								<li class="active" data-filter=".filter-item">
									<span>All</span>
								</li>
								<li data-filter=".Indoor-Services">
									<span>Studio</span>
								</li>
								<li data-filter=".Old-Wiring-Faults">
									<span>Home</span>
								</li>
								<li data-filter=".Out-door-repairing">
									<span>Apartment </span>
								</li>
								<li data-filter=".Shortcircuits">
									<span>Penthouse</span>
								</li>
							</ul>

							<div class="row masonary-layout filter-layout">
								<div class="col-md-4 col-sm-6 col-xs-12 filter-item">
									<div class="single-item">
										<div class="img-box">
											<img src="portfolio/images/gallery/060ff4af-d752-49a7-b32a-4b1138f2d079.jpg" alt="Awesome Image"/>
											
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12 filter-item Indoor-Services Out-door-repairing">
									<div class="single-item">
										<div class="img-box">
											<img src="portfolio/images/gallery/5902adf3-7fe1-492c-8385-f89456374b61.jpg" alt="Awesome Image"/>
											
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12 filter-item Shortcircuits  Old-Wiring-Faults">
									<div class="single-item">
										<div class="img-box">
											<img src="portfolio/images/gallery/1523212e-4a01-498d-ac54-577a8b900a8b.jpg" alt="Awesome Image"/>
											
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12 filter-item Indoor-Services Out-door-repairing Old-Wiring-Faults">
									<div class="single-item">
										<div class="img-box">
											<img src="portfolio/images/gallery/a0e3a2af-8356-40da-bb05-6a6c60a3c4e5.jpg" alt="Awesome Image"/>
											
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12 filter-item Shortcircuits Out-door-repairing Old-Wiring-Faults">
									<div class="single-item">
										<div class="img-box">
											<img src="portfolio/images/gallery/b131df21-2cf4-441d-9fee-fcd68c9250ff.jpg" alt="Awesome Image"/>
											
										</div>
									</div>
								</div>

								<div class="col-md-4 col-sm-6 col-xs-12 filter-item Out-door-repairing Indoor-Services video Shortcircuits Old-Wiring-Faults">
									<div class="single-item">
										<div class="img-box">
											<img src="portfolio/images/gallery/b505ef36-1911-4d45-992f-3e73f5002aa9.jpg" alt="Awesome Image"/>
											
										</div>
									</div>
								</div>
							</div><!-- /.row -->
						</div><!-- /.container -->
					</section><!-- /.latest-gallery -->
				</div><!-- /container -->
			</div>
			</div><!-- /wrapper -->
		</div><!-- /page -->

		<div class="page" id="page-contact">
			<div class="wrapper">
				<div class="wrapper-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-sm-9 col-xs-12">
							<div id="profile-intro">
								<h1 class="name">
									<?php echo $name; ?>
								</h1>
								<h3 class="status" style="font-size: 25px; text-align: left;">
									Contact Me
								</h3>
							</div>	
						</div>
						<div class="col-md-3 col-sm-3 hidden-xs">
							<div class="profile-img">
								<img class="img-responsive" src="portfolio/images/user-img.png" alt="">
							</div>
						</div>
					</div>

					<div class="contact-form-container">              
						<div class="row">
							<div class="col-md-7 col-sm-6 col-xs-12 pull-right">
								<form action="?" class="contact-form"> 
									<p><input type="text" name="name" placeholder="Name"></p>
									<p><input type="text" name="email" placeholder="Email"></p>
									<p><input type="text" name="subject" placeholder="Subject"></p>
									<p><textarea name="message" placeholder="Message"></textarea></p>
									<input type="submit" name="" value="Send Now">
								</form>
							</div>
							<div class="col-md-5 col-sm-6 col-xs-12">
								<div class="tt-contact">
									<div class="tt-contact-icon-outer">
										<div class="tt-contact-icon">
											<i class="fa fa-map-marker" aria-hidden="true"></i>
										</div> 
									</div>

									<div class="tt-contact-info">
										<div class="simple-text">
											<p>
												<?php echo $address; ?>,<br>
												Middlesex,<br>
												United Kingdom
											</p>
										</div>
									</div>
								</div>

								<div class="spacer-15"></div>
								<div class="tt-contact">
									<div class="tt-contact-icon-outer">
										<div class="tt-contact-icon">
											<i class="fa fa-phone" aria-hidden="true"></i>
										</div> 
									</div>

									<div class="tt-contact-info">
										<div class="simple-text">
											<p>
												<?php echo $phone; ?>
											</p>
										</div>
									</div>
								</div><!-- tt-contact -->
								<div class="spacer-15"></div>
								<div class="tt-contact">
									<div class="tt-contact-icon-outer">
										<div class="tt-contact-icon">
											<i class="fa fa-envelope"></i>
										</div> 
									</div>
									<div class="tt-contact-info">
										<div class="simple-text">
											<p>
												<?php echo $email; ?>
											</p>
										</div>
									</div>
								</div><!-- tt-contact -->
							</div><!-- col -->
						</div><!-- row -->
					</div>
				</div><!-- /container -->
			</div>
			</div><!--  -->
		</div>
	</div>
	<!-- /pages-stack -->

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="portfolio/js/modernizr-custom.js"></script>
	<script src="portfolio/plugins/bootstrap/js/bootstrap.min.js"></script>
	<button class="menu-button"><span>Menu</span></button>
	<script src="portfolio/js/classie.js"></script>
	<script src="portfolio/js/main.js"></script>
	
	<script src="portfolio/js/plugins.js"></script>
	<script src="portfolio/js/jquery.fancybox.pack.js"></script>
	<script src="portfolio/js/jquery.mixitup.min.js"></script>
	<script src="portfolio/js/isotope.js"></script>
	<script src="portfolio/js/gallery.js"></script>

</body>

</html>

