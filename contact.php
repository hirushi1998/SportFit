<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="SportFIT template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>
	
<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/about.html">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><div>Power<span>FIT</span></div></div>
						</a>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/index.html">Home</a></li>
								<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/contact.html">About us</a></li>
								<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/services.html">Classes & Services</a></li>
								<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/blog.html">Blog</a></li>
								<li class="active"><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/contact.php">JoinNow</a></li>
							</ul>
						</nav>
						<div class="phone d-flex flex-row align-items-center justify-content-start ml-auto">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<div>0115 - 44 5 000</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Hamburger -->
	
	<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
		<div class="hamburger">
			<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
				<span>menu</span>
				<div class="hamburger_container">
					<div class="menu_hamburger">
						<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
						<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
						<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->

	<div class="menu trans_800">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<ul>
			<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/index.html">Home</a></li>
								<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/contact.html">About us</a></li>
								<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/services.html">Classes & Services</a></li>
								<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/blog.html">Blog</a></li>
								<li class="active"><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/contact.php">JoinNow</a></li>
			</ul>
		</div>
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<i class="fa fa-phone" aria-hidden="true"></i>
				<span>0115 - 44 5 000</span>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/contact.jpg)"></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Content -->
				<div class="col-lg-4">
					<div class="contact_content">
						<div class="contact_logo">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><div>Power<span>FIT</span></div></div>
						</div>
						<div class="contact_text">
							<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Odio vestibulum est mattis effic iturut.</p>
						</div>
						<div class="contact_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>A: </div></div>
									<div>No.1,Park Street, DreamLand</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>P:</div></div>
									<div>0115 - 44 5 000</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>M:</div></div>
									<div>powerfit@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_title">Get in touch</div>
					<div class="contact_form_container">
					<?php 
						<form action="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/contact.php" method="post" >
							<div class="row">
								<div class="col-lg-6">
									<div class="input_item"><input type="text" class="contact_input trans_200" placeholder="Name" required="required"></div>
								</div>
								<div class="col-lg-6">
									<div class="input_item"><input type="email" class="contact_input trans_200" placeholder="E-mail" required="required"></div>
								</div>
							</div>
							<div class="input_item"><textarea class="contact_input contact_textarea trans_200" placeholder="Message" required="required"></textarea></div>
							<button class="contact_button button">Send<span></span></button>
						</form>
							include_once ("file:///C:/xampp/htdocs/sportsfit%20-%20Copy/insertdetails.php");
							?>
					</div>
				</div>
				

			</div>
			<div class="row google_map_row">
				<div class="col">
					
					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="footer_container">
						<div class="footer_content">
							<div class="footer_logo">
								<a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/about.html">
									<div class="logo d-flex flex-row align-items-center justify-content-center"><div>Power<span>FIT</span></div></div>
								</a>
							</div>
							<nav class="footer_nav">
								<ul class="d-flex flex-sm-row flex-column align-items-sm-start align-items-center justify-content-center">
									<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/index.html">Home</a></li>
									<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/about.html">About us</a></li>
									<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/services.html">Classes & Services</a></li>
									<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/blog.html">Blog</a></li>
									<li><a href="file:///C:/xampp/htdocs/sportsfit%20-%20Copy/contact.php">JoinNow</a></li>
								</ul>
							</nav>
							<div class="newsletter_container">
								<form action="#" id="newsletter_form" class="newsletter_form">
									<input type="text" class="newsletter_input" placeholder="Enter your email here" required="required">
									<button class="newsletter_button">go</button>
								</form>
							</div>
							
						</div>
						<div class="footer_image text-center"><img src="images/footer.png" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>

</body>
</html>