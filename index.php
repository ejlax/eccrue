<!DOCTYPE html>
<html>
	<head>
		<title>Eccrue.com</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Styles   -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		<link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />

		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection">

		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]  -->
	</head>
	<body class="pull_top">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						 <span class="icon-arrow-down icon-white"></span>
					</a>
					<a class="brand" href="index.php">
						Eccrue.com </a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right">
							<li>
								<a href="about-us.html">About Us</a>
							</li>
							<li>
								<a href="coming-soon.html">Coming Soon</a>
							</li>
							<li>
								<a href="#feature_set">Features</a>
							</li>
							<!--  <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Coming Soon </a>
							<ul class="dropdown-menu">
							<li><a href="features.html">Features</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="portfolio-item.html">Portfolio Item</a></li>
							<li><a href="coming-soon.html">Coming Soon</a></li>
							<li><a href="sign-in.html">Sign in</a></li>
							<li><a href="sign-up.html">Sign up</a></li>
							<li><a href="backgrounds.html">Backgrounds</a></li>
							</ul>
							</li>  -->
							<li>
								<a href="#in_pricing">Pricing</a>
							</li>
							<li>
								<a href="#in_contact">Contact Us</a>
							</li>
							<!-- <li><a hrief="blog.html">BLOG</a></li> -->
							<!--  <li><a class="btn-header" href="sign-up.html">Sign up</a></li>
							<li><a class="btn-header" href="sign-in.html">Sign in</a></li>  -->
							<li>
								<a href="sign-up.php">Sign Up</a>
							</li>
														<li>
								<a id='test' href="#">Login</a>
							</li>
							<li>
								<a class='hidden-desktop hidden-tablet' href='#stack1' data-toggle='modal'>Login</a>
							</li>
     				<li class='dropdown hidden-phone'>
            		<a href='#' class='dropdown-toggle' data-toggle='dropdown'><b class='icon-user'></b>Login<b class='caret'></b></a>
              			<div class='dropdown-menu' style='padding: 15px; padding-bottom: 0px; backgroun-color: #999; color: #fff;'>
									<form id='form' class='form' method='post' action='login-beta.php'>
										<fieldset>
												<input type='email' id='Form_Email' name='email' value='' class='InputBox' placeholder="Email">
												<input type='password' id='Form_Password' name='password' value='' class='InputBox Password' placeholder="Password">
												<input type='hidden' name'file' value=''>
											<input type='submit' id='Form_SignIn' name='Form/Sign_In' value='Sign In' class='btn btn-primary'>
										</fieldset>
									</form>
						</div>
          		</li>
						</ul>
					</div>
				</div>
			</div>
		</div>  -->

		<section id="feature_slider" class="">
			<!--
			Each slide is composed by <img> and .info
			- .info's position is customized with css in index.css
			- each <img> parallax effect is declared by the following params inside its class:

			example: class="asset left-472 sp600 t120 z3"
			left-472 means left: -472px from the center
			sp600 is speed transition
			t120 is top to 120px
			z3 is z-index to 3
			Note: Maintain this order of params

			For the backgrounds, you can combine from the bgs folder :D
			-->
			<article class="slide" id="showcasing" style="background: url('img/backgrounds/water.jpg') repeat-x top center;">
				<img class="asset left-30 sp600 t120 z1" src="img/slides/scene1/macbook.png" />
				<div class="info">
					<h2>Beautiful theme for showcasing your works.</h2>
				</div>
			</article>
			<article class="slide" id="ideas" style="background: url('img/backgrounds/water.jpg') repeat-x top center;">
				<div class="info">
					<h2 style='color:#444;'>We love to turn ideas into beautiful things.</h2>
				</div>
				<img class="asset left-480 sp600 t260 z1" src="img/slides/scene2/left.png" />
				<img class="asset left-210 sp600 t213 z2" src="img/slides/scene2/middle.png" />
				<img class="asset left60 sp600 t260 z1" src="img/slides/scene2/right.png" />
			</article>
			<article class="slide" id="tour" style="background: url('img/backgrounds/water.jpg') repeat-x top center;">
				<img class="asset left-472 sp650 t210 z3" src="img/slides/scene3/ipad.png" />
				<img class="asset left-365 sp600 t270 z4" src="img/slides/scene3/iphone.png" />
				<img class="asset left-350 sp450 t135 z2" src="img/slides/scene3/desktop.png" />
				<img class="asset left-185 sp550 t220 z1" src="img/slides/scene3/macbook.png" />
				<div class="info">
					<h2>Fully Responsive theme</h2>
					<button class='btn btn-info btn-large' href="features.html">
						TOUR THE PRODUCT</a>
				</div>
			</article>
			<article class="slide" id="responsive" style="background: url('img/backgrounds/water.jpg') repeat-x top center;">
				<img class="asset left-472 sp600 t120 z3" src="img/slides/scene4/html5.png" />
				<img class="asset left-190 sp500 t120 z2" src="img/slides/scene4/css3.png" />
				<div class="info">
					<h2> Responsive <strong>HTML5 & CSS3</strong> Theme </h2>
				</div>
			</article>
		</section>

		<div id="showcase">
			<div class="container">
				<div class="section_header">
					<h3>Our Services</h3>
				</div>
				<div class="row feature_wrapper">
					<!-- Features Row -->
					<div class="features_op1_row">
						<!-- Feature -->
						<div class="span4 feature first">
							<div class="img_box">
								<a href="services.html"> <img src="img/service1.png"> <span class="circle"> <span class="plus">&#43;</span> </span> </a>
							</div>
							<div class="text">
								<h6>Responsive theme</h6>
								<p>
									There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
								</p>
							</div>
						</div>
						<!-- Feature -->
						<div class="span4 feature">
							<div class="img_box">
								<a href="services.html"> <img src="img/service2.png"> <span class="circle"> <span class="plus">&#43;</span> </span> </a>
							</div>
							<div class="text">
								<h6>Easy customization</h6>
								<p>
									There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
								</p>
							</div>
						</div>
						<!-- Feature -->
						<div class="span4 feature last">
							<div class="img_box">
								<a href="services.html"> <img src="img/service3.png"> <span class="circle"> <span class="plus">&#43;</span> </span> </a>
							</div>
							<div class="text">
								<h6>Made with love</h6>
								<p>
									There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="features">
			<div class="container">
				<div class="section_header" id="feature_set">
					<h3>Features</h3>
				</div>
				<div class="row feature">
					<div class="span6">
						<img src="img/showcase1.png" />
					</div>
					<div class="span6 info">
						<h3><img src="img/features-ico1.png" /> Beautiful on all devices </h3>
						<p>
							There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
						</p>
					</div>
				</div>
				<div class="row feature ss">
					<div class="span6 info">
						<h3><img src="img/features-ico2.png" /> Blog page included </h3>
						<p>
							There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
						</p>
					</div>
					<div class="span6">
						<img src="img/showcase2.png" class="pull-right" />
					</div>
				</div>
				<div class="row feature ss">
					<div class="span6">
						<img src="img/showcase3.png" />
					</div>
					<div class="span6 info">
						<h3><img src="img/features-ico3.png" /> Simple and clean coming soon page </h3>
						<p>
							There are many variations of passages of Lorem Ipsum available, but the randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Pricing Option -->
		<div id="in_pricing">
			<div class="container">
				<div class="section_header">
					<h3>Pricing</h3>
				</div>

				<div class="row charts_wrapp">
					<!-- Plan Box -->
					<div class="span4">
						<div class="plan">
							<div class="wrapper">
								<h3>Lite</h3>
								<div class="price">
									<span class="dollar">$</span>
									<span class="qty">35</span>
									<span class="month">/month</span>
								</div>
								<div class="features">
									<p>
										<strong>10</strong>
										Shared Projects
									</p>
									<p>
										<strong>4</strong>
										Team Members
									</p>
									<p>
										<strong>10</strong>
										Storage
									</p>
								</div>
								<a class="order" href="pricing.html">ORDER NOW</a>
							</div>
						</div>
					</div>
					<!-- Plan Box -->
					<div class="span4 pro">
						<div class="plan">
							<div class="wrapper">
								<img class="ribbon" src="img/badge.png">
								<h3>Pro</h3>
								<div class="price">
									<span class="dollar">$</span>
									<span class="qty">99</span>
									<span class="month">/month</span>
								</div>
								<div class="features">
									<p>
										<strong>10</strong>
										Shared Projects
									</p>
									<p>
										<strong>25</strong>
										Team Members
									</p>
									<p>
										<strong>Unlimited</strong>
										Storage
									</p>
									<p>
										<strong>Plus </strong>
										Phone Support
									</p>
								</div>
								<a class="order" href="pricing.html">ORDER NOW</a>
							</div>
						</div>
					</div>
					<!-- Plan Box -->
					<div class="span4 standar">
						<div class="plan">
							<div class="wrapper">
								<h3>Standard</h3>
								<div class="price">
									<span class="dollar">$</span>
									<span class="qty">65</span>
									<span class="month">/month</span>
								</div>
								<div class="features">
									<p>
										<strong>10</strong>
										Shared Projects
									</p>
									<p>
										<strong>4</strong>
										Team Members
									</p>
									<p>
										<strong>10</strong>
										Storage
									</p>
								</div>
								<a class="order" href="pricing.html">ORDER NOW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="start">
					<p>
						Start your free, no-risk, 14 day trial!
					</p>
					<a href="pricing.html">Start Now!</a>
				</div>
			</div>
		</div>
		<div id="contact">
			<div class="container" id='in_contact'>
				<div class="section_header">
					<h3>Get in touch</h3>
				</div>
				<div class="row contact">
					<p>
						We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
					</p>

					<form>
						<div class="row form">
							<div class="span6 box">
								<input class="name" type="text" placeholder="Name">
								<input class="mail" type="text" placeholder="Email">
								<input class="phone" type="text" placeholder="Phone">
							</div>
							<div class="span6 box box_r">
								<textarea placeholder="Type a message here..."></textarea>
							</div>
						</div>

						<div class="row submit">
							<div class="span5 box">
								<label class="checkbox">
									<input type="checkbox">
									Sign up for newsletter </label>
							</div>
							<div class="span3 right">
								<input type="submit" value="Send your message">
							</div>
						</div>
					</form>
				</div>
			</div>

			<!-- signup -->
			<div id="signup">
				<div class="container" id='in_signup'>
					<div class="section_header">
						<h3>Sign Up</h3>
					</div>

					<div id='signup_init' class="row contact">
						<p>
							We can't wait to start working for you. So do your self a favor and sign up!
						</p>

						<form id='signup_form' class='form' method='post' action=''>
							<div class="row form">
								<div class="span6 box">
									<input class="name" name='firstName' type="text" placeholder="First Name" required>
									<input class="name" name='lastName'type="text" placeholder="Last Name" required>
									<input class="mail" name='email1'type="text" placeholder="Email" required>
									<input class="mail" name='email2'type="text" placeholder="Confirm Email" required>
									<input class="password" name='password1' type="password" placeholder="Password" required>
									<input class='password' name='password2' type="password" placeholder="Confirm Password" required>
								</div>
							</div>

							<div class="row submit"></div>
							<div class="span6 right">
								<input type="submit" value='Sign Up'>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="co_info">
				<div class="container" id='co_signup'>
					<div class="section_header">
						<h3>Company Info</h3>
					</div>
					<div id='signup_final' class="row contact">
						<p>
						<div id='register_response'>	
						</div>	
						</p>
						<form id='company_info' class='form' method='post' action=''>
							<div class="row form">
								<div class="span6 box">
									<input class="name" name='company_name' type="text" placeholder="Company Name" required>
									<input class="name" name='company_id'type="text" placeholder="EIN / SSN" required>
									<!--  <input class="mail" name='email1'type="text" placeholder="Email" required>
									<input class="mail" name='email2'type="text" placeholder="Confirm Email" required>
									<input class="password" name='password1' type="password" placeholder="Password" required>
									<input class='password' name='password2' type="password" placeholder="Confirm Password" required>  -->
								</div>
							</div>

							<div class="row submit"></div>
							<div class="span6 right">
								<input type="submit" value='Next'>
							</div>
						</form>
					</div>
				</div>
			</div>
				<div id="clients">
					<div class="container">
						<div class="section_header">
							<h3>Clients</h3>
						</div>
						<div class="row">
							<div class="span2 client">
								<div class="img client1"></div>
							</div>
							<div class="span2 client">
								<div class="img client2"></div>
							</div>
							<div class="span2 client">
								<div class="img client3"></div>
							</div>
							<div class="span2 client">
								<div class="img client1"></div>
							</div>
							<div class="span2 client">
								<div class="img client2"></div>
							</div>
							<div class="span2 client">
								<div class="img client3"></div>
							</div>
						</div>
					</div>
				</div>
				<!--  Start Modal Pop-ups -->
			<!--	<div class='modal hide fade' id='sign-up'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>
							&times;
						</button>
						<p align='center'>
							<h2>Sign Up</h2>
						</p>
					</div>
					<div class='modal-body'>
						<form method='post' action='sign-up.php' id='register'>
							<fieldset id='inputs'>
								<input id='firstName' name='firstName' type='text' placeholder='First Name' autofocus required>
								<input id='lastName' name='lastName' type='text' placeholder='Last Name' required>
								<input id='email1' name='email1' type='email' placeholder='Email' required>
								<input id='email2' name='email2' type='email' placeholder='Verify Email' required>
								<input id='employeeId' name='employeeId' type='text' placeholder='Employee ID' required>
								<input id='password' autocomplete='off' name='password' type='password' placeholder='Password' required>
							</fieldset>
						</form>
					</div>
				</div>
				<div class='modal hide fade' id='stack1'>
					<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>
							&times;
						</button>
						<p>
							<h2>Login</h2>
						</p>
					</div>-->
					<div class='modal-body'>
						<form id='loginForm' class='form' method='post' action='login-beta.php'>
							<fieldset>
								<label class='UsernameLabel'>Email</label>
								<input type='email' id='Form_Email' name='email' value='' class='InputBox' required>
								<label class='PasswordLabel'>Password</label>
								<input type='password' id='Form_Password' name='password' value='' class='InputBox Password' required>
								<input type='hidden' name'file' value='<?if(isset($_GET['file'])){echo $_GET['file'];} ?>'>
								<input type='submit' id='Form_SignIn' name='Form/Sign_In' value='Sign In' class='btn btn-primary'>
							</fieldset>
							<p class='CreateAccount'>
								<a align='left' href='#stack2' data-toggle='modal'>Forgot password?</a>
							</p>
						</form>
					</div>
				</div>  -->

				<!-- starts footer -->
				<footer id="footer">
					<div class="container">
						<div class="row sections">
							<div class="span4 recent_posts">
								<h3 class="footer_header"> Recent Posts </h3>
								<div class="post">
									<a href="blogpost.html"> <img src="img/recent_post1.png" class="img-circle" /> </a>
									<div class="date">
										Wed, 12 Dec
									</div>
									<a href="blogpost.html" class="title"> Randomised words which don't look embarrasing hidden. </a>
								</div>
								<div class="post">
									<a href="blogpost.html"> <img src="img/recent_post2.png" class="img-circle" /> </a>
									<div class="date">
										Mon, 12 Dec
									</div>
									<a href="blogpost.html" class="title"> Randomised words which don't look embarrasing hidden. </a>
								</div>
							</div>
							<div class="span4 testimonials">
								<h3 class="footer_header"> Testimonials </h3>
								<div class="wrapper">
									<div class="quote">
										<span>“</span>
										There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
										<span></span>
									</div>
									<div class="author">
										<img src="img/user-display.png" />
										<div class="name">
											Alejandra Galvan Castillo
										</div>
										<div class="info">
											Details Canvas
										</div>
									</div>
								</div>
							</div>
							<div class="span4 contact">
								<h3 class="footer_header"> Contact </h3>
								<form action="#" method="post">
									<input type="text" placeholder="Your name" />
									<input type="text" placeholder="Your email" />
									<textarea rows="3" placeholder="Message"></textarea>
									<input type="submit" value="Send" />
								</form>
							</div>
						</div>
						<div class="row credits">
							<div class="span12">
								<div class="row social">
									<div class="span12">
										<a href="#" class="facebook"> <span class="socialicons ico1"></span> <span class="socialicons_h ico1h"></span> </a>
										<a href="#" class="twitter"> <span class="socialicons ico2"></span> <span class="socialicons_h ico2h"></span> </a>
										<a href="#" class="gplus"> <span class="socialicons ico3"></span> <span class="socialicons_h ico3h"></span> </a>
										<a href="#" class="flickr"> <span class="socialicons ico4"></span> <span class="socialicons_h ico4h"></span> </a>
										<a href="#" class="pinterest"> <span class="socialicons ico5"></span> <span class="socialicons_h ico5h"></span> </a>
										<a href="#" class="dribble"> <span class="socialicons ico6"></span> <span class="socialicons_h ico6h"></span> </a>
										<a href="#" class="behance"> <span class="socialicons ico7"></span> <span class="socialicons_h ico7h"></span> </a>
									</div>
								</div>
								<div class="row copyright">
									<div class="span12">
										© 2013 Clean Canvas. All rights reserved. Theme by Detail Canvas.
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>

				<!-- Scripts -->
				<script src="js/jquery.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/theme.js"></script>
				<script type="text/javascript" src="js/index-slider.js"></script>
				<!--  <script>
					$(document).ready(function(){
						$('#co_info').hide();
					});
				</script>
				<script>
					$("#signup_form").submit(function() {
							$('#signup').fadeOut(500);
						// Intercept the form submission
						var formdata = $(this).serialize();
						// Serialize all form data
						// Post data to your PHP processing script
						$.post("reg-beta.php", formdata, function(data) {
							// Act upon the data returned, setting it to #success <div>
							//$("#instances").html ( data ).fadeIn("slow");
							$('#co_info').fadeIn(3000);
							$('#register_response').html(data).fadeIn(3500);
						});

						return false;
						// Prevent the form from actually submitting
					});
				</script>  -->

	</body>
</html>