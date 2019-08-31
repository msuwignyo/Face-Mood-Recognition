<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>AI Cobra</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/bootstrap.css')?>" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/owl.carousel.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/owl.theme.default.css')?>" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/magnific-popup.css')?>" />

	<!-- Font Awesome Icon -->
	<link href="<?php echo base_url('assets/template/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/style.css')?>" />

</head>

<body>

	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('<?php echo base_url('assets/')?>img/homebg.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container" >

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="<?php echo base_url('')?>">
							<img class="logo" src="<?php echo base_url('assets/logo/logo-main.PNG')?>" alt="logo">
							<img class="logo-alt" src="<?php echo base_url('assets/logo/logo-second.PNG')?>" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse" >
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="navbar-brand main-nav nav navbar-nav navbar-right ">
					<li><a href="#home">Home</a></li>
					<li><a href="#news">News</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#footer">Contact</a></li>
					<!-- <li class="has-dropdown">
						<a><i class="fa fa-bars" style="font-size: 20px"></i></a>
						<ul class="dropdown none-list">
							<li><a href="<?php echo base_url('rating')?>">Rating</a></li>
							<li><a href="blog-single.html">Partisipasi</a></li>
							<li><a href="blog-single.html">Kelas</a></li>
							<li><a href="blog-single.html">Jaringan Publikasi</a></li>
							<li><a href="<?php echo base_url('team')?>">Tim Kami</a></li>
						</ul>
					</li> -->
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Face Mood Recognition</h1>
							<a href="<?= base_url('Landing/recognize')?>" class="white-btn">RECOGNIZE NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- Blog -->
	<div id="news" class="section md-padding bg-grey">
		<div class="container">

			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">News</h2>
				</div>
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo base_url('assets/img/blog1.jpg')?>" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
							</ul>
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<div class="text-overflow">
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							</div>
							<a href="blog-single.html">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo base_url('assets/img/blog2.jpg')?>" alt="">
						</div>
						<div class="blog-content" >
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
							</ul>
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<div class="text-overflow">
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							</div>
							<a href="blog-single.html">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive"  src="<?php echo base_url('assets/img/blog3.jpg')?>" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
							</ul>
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<div class="text-overflow">
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec. Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							</div>
							<a href="blog-single.html">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="about" class="section md-padding">
		<div class="bg-img" style="background-image: url('<?php echo base_url('assets/img/')?>howtobg.jpg');">
			<div class="overlay"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title white-text">About</h2>
				</div>
				<div class="col-md-12 text-center">
					<p class="white-text">Face Mood Recognition is Face Mood Recognition. The More You Know :)</p>
						<!-- <a href="#">Read more</a> -->
				</div>
			</div>
		</div>
	</div>

<!-- 	<div id="features" class="section md-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section-header" style="margin-bottom: 30px;">
						<h2 class="title">Kriteria</h2>
					</div>
					<p>Pemberian rating berdasarkan kepada kriteria-kriteria tertentu, yaitu:</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Setting dan Infrastruktur</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Energi</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Listrik</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Air</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Sampah</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Pendidikan</p>
					</div>
				</div>
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="<?php echo base_url('assets/img/')?>infrastructure.jpg" alt="">
						<img class="img-responsive" src="<?php echo base_url('assets/img/')?>energy.jpg" alt="">
						<img class="img-responsive" src="<?php echo base_url('assets/img/')?>electricity.jpg" alt="">
						<img class="img-responsive" src="<?php echo base_url('assets/img/')?>water.jpg" alt="">
						<img class="img-responsive" src="<?php echo base_url('assets/img/')?>waste.jpg" alt="">
						<img class="img-responsive" src="<?php echo base_url('assets/img/')?>education.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div id="howto" class="section md-padding bg-grey">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">How To Use</h2>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3><span class="counter">1</span></h3>
						<span >Open Face Recog Website</span>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3><span class="counter">2</span></h3>
						<span>Click Recognize Now</span>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3><span class="counter">3</span></h3>
						<span>Click Recognize</span>
						<!-- <i class="fa fa-coffee"></i> -->
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<h3><span class="counter">4</span></h3>
						<span>Voila!</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo footer-text">
						<h4>Artifical Intelligent Project</h4>
						<p>Markus Antoni Suwignyo</p>
						<p>Jauzak Hussaini Windiatmaja</p>
						<p>Bakhtiyar Ghozi</p>
						<p>Rizki Kusuma</p>
						<p>Ilham Al Fajri</p>
					</div>
					<!-- /footer logo -->

					<div class="line-footer"></div>
					<!-- footer copyright -->
					<div class=" footer-text" >
						<a>© 2019 - Tim Kobra. All Rights Reserved.</a>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/owl.carousel.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/jquery.magnific-popup.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/style.landing.js')?>"></script>

</body>

</html>
