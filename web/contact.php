<?php
	session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>AdoPET</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pets Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
	    rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
</head>

<body>
	<!-- banner -->
	<div class="agileits-banner about-w3banner">
		<div class="bnr-agileinfo">
			<?=include('sections/banner_top.php')?>
			<div class="banner-w3text w3layouts">


				<h2>AdoPET</h2>
			</div>
			<!-- navigation -->
			<div class="top-nav w3-agiletop">
				<div class="agile_inner_nav_w3ls">
					<div class="navbar-header w3llogo">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>

						</button>
						<h1><img src="images/collar.svg" width="10%" alt=""><font color="#f1c40f">Adopción de Mascotas</h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-left">
							<ul class="nav navbar">
								<li><a href="index.html">Home</a></li>
								<li><a href="gallery.html">Galeria</a></li>
							</ul>
						</div>
						<div class="w3ls-bnr-icons social-icon navbar-right">
							<a href="https://twitter.com/Allegrissim" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/BGRManz" class="social-button facebook"><i class="fa fa-facebook"></i></a>
							<a href="https://aboutme.google.com/u/0/?referer=gplus" class="social-button google"><i class="fa fa-google-plus"></i></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //navigation -->
		</div>
	</div>
	<!-- //banner -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign In</h3>
						<div class="login-form">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="E-mail" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<div class="tp">
									<input type="submit" value="Sign In">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							<ul>
								<a href="https://twitter.com/Allegrissim" class="social-button twitter"><i class="fa fa-twitter"></i></a>
								<a href="https://www.facebook.com/BGRManz" class="social-button facebook"><i class="fa fa-facebook"></i></a>
								<a href="https://aboutme.google.com/u/0/?referer=gplus" class="social-button google"><i class="fa fa-google-plus"></i></a>
							</ul>
						</div>
						<p><a href="#" data-toggle="modal" data-target="#myModal3"> Aún no tienes cuenta?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<div class="login-form">
							<form action="#" method="post">
								<input type="text" name="name" placeholder="Username" required="">
								<input type="email" name="email" placeholder="Email" required="">
								<input type="password" class="password" name="Password" id="password1" placeholder="Password" required="" />
								<input type="password" class="password" name="Confirm Password" id="password2" placeholder="Confirm Password" required=""
								/>
								<input type="submit" value="Sign Up">
							</form>
						</div>
						<p><a href="#"> Al hacer click, acepto los terminos y condiciones</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->

	

	<!-- contact -->
	<div class="contact">
		<div class="container">
			<h3 class="agileits-title">Contactanos</h3>
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-right">
					<form action="mail.php" method="post">
						<input type="text" name="Name" placeholder="Name" required="" <?php if(isset($_SESSION['usuario'])){echo 'value="'.$_SESSION['usuario']->nombre.'"';}?>>
						<span id="name_validation" class="error_message"></span>
						<input type="text" class="email" name="Email" placeholder="Email" required="" <?php if(isset($_SESSION['usuario'])){echo 'value="'.$_SESSION['usuario']->correo.'"';}?>>
						<input type="text" name="Phone no" placeholder="Phone" required="" <?php if(isset($_SESSION['usuario'])){echo 'value="'.$_SESSION['usuario']->telefono.'"';}?>>
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input id="submit_button" type="submit" value="Send" />
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<div class="address">
						<h5>Dirección:</h5>
						<p><i class="glyphicon glyphicon-home"></i>Carretera Internacional Km 3, Frente al Aeropuerto.
							Campus Guaymas. </p>
					</div>
					<div class="address address-mdl">
						<h5>Phones:</h5>
					
						<p><i class="glyphicon glyphicon-phone"></i><a href="tel:+526221185883"> +52 622 1185883</a></p>
					</div>
					<div class="address">
						<h5>Email:</h5>
						<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:blancamanzanares9822@gmail.com">blancamanzanares9822@gmail.com</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19935.302435913796!2d-110.91828942126165!3d27.960318960816995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86c96545bf7add2d%3A0xa6257169f55bff76!2sInstituto%20Tecnol%C3%B3gico%20de%20Sonora%20-%20Guaymas!5e0!3m2!1ses-419!2smx!4v1575960568355!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>"
		    allowfullscreen></iframe>
	</div>
	<!-- //contact -->
	<!-- w3-agilesale -->
	<div class="w3-agilesale welcome">
		<div class="container">
			<h3 class="agileits-title two">No compres una mascota, <span>Adopta!</span></h3>
			<a href="contact.php" class="button button-isi"><span>Contactanos </span><i class="icon glyphicon glyphicon-arrow-right"></i></a>
		</div>
	</div>
	<!-- //w3-agilesale -->
	<!-- subscribe -->
	<div class="subscribe wthree-sub">
		<div class="container">
			<h4>Subscribete</h4>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="SUBSCRIBE">
				<div class="clearfix"> </div>
			</form>
			<div class="w3lsfoter-icons social-icon">
				<a href="https://twitter.com/Allegrissim" class="social-button twitter"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/BGRManz"  class="social-button facebook"><i class="fa fa-facebook"></i></a>
				<a href="https://aboutme.google.com/u/0/?referer=gplus" class="social-button google"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
	</div>
	<!-- //subscribe -->

	<!-- copy rights start here -->
	<div class="copy-w3right">
		<div class="container">
			<div class="top-nav bottom-w3lnav">
				<ul>
					<li><a href="index.html">Home</a></li>
				</ul>
			</div>
			<p>© 2019 Adopet. All Rights Reserved  </p>
		</div>
	</div>
	<!-- //copy right end here -->
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>