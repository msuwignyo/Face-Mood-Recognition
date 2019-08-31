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

	<!-- Bootstrap CSS -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/bootstrap.css')?>" />

	<!-- Owl Carousel CSS-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/owl.carousel.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/owl.theme.default.css')?>" />

	<!-- Magnific Popup CSS-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/magnific-popup.css')?>" />

	<!-- Font Awesome Icon CSS-->
	<link href="<?php echo base_url('assets/template/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
	
	<!-- SWAL 2 CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/vendors/sweet-alert2/sweetalert2.min.css'); ?>">
	
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/css/style.css')?>" />
	
	<!-- DropZone CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/vendors/dropzone/dist/dropzone.css'); ?>" />
	
	<!-- Datatables CSS-->
    <link href="<?php echo base_url('assets/template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">
	<!-- Starrr CSS-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/template/vendors/starrr/dist/starrr.css')?>" />
	
	<!-- JS -->
	<script>function base_url(url = '') {return "<?= base_url() ?>" + url}</script>
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/angular.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/webcam.min.js')?>"></script>
	<!-- SWAL 2 JS-->
	<script type="text/javascript" src="<?php echo base_url('assets/template/vendors/sweet-alert2/sweetalert2.min.js'); ?>"></script>
	<!-- DropZone JS-->
	<script type="text/javascript" src="<?php echo base_url('assets/template/vendors/dropzone/dist/dropzone.js'); ?>"></script>
	<!-- Starrr JS-->
	<script type="text/javascript" src="<?php echo base_url('assets/template/vendors/starrr/dist/starrr.js')?>"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="font-12">

	<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar fixed-nav">
			<div class="container">

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
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="<?= base_url('/#home') ?>">Home</a></li>
					<li><a href="<?= base_url('/#news') ?>">News</a></li>
					<li><a href="<?= base_url('/#about') ?>">About</a></li>
					<li><a href="<?= base_url('/#footer') ?>">Contact</a></li>
					<!-- <li class="has-dropdown">
						<a><i class="fa fa-bars" style="font-size: 20px"></i></a>
						<ul class="dropdown none-list">
							<li><a href="<?php echo base_url('rating')?>">Rating</a></li>
							<li><a href="<?php echo base_url('')?>">Partisipasi</a></li>
							<li><a href="<?php echo base_url('')?>">Kelas</a></li>
							<li><a href="<?php echo base_url('')?>">Jaringan Publikasi</a></li>
						</ul>
					</li> -->				
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

	</header>
	<!-- /Header -->

	<!-- Blog -->
	<div style="padding-bottom: 55px"></div>
	<div id="blog" class="section sm-padding" style="padding-top: 20px">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<?php echo $contents; ?>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Footer -->
<!-- 	<footer id="footer" class="sm-padding bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-logo footer-text">
						<h4>Artifical Intelligent Project</h4>
						<p>Markus Antoni Suwignyo</p>
						<p>Jauzak Hussaini Windiatmaja</p>
						<p>Bakhtiyar Ghozi</p>
						<p>Rizki Kusuma</p>
						<p>Ilham Al Fajri</p>
					</div>
					<div class="line-footer"></div>
					<div class=" footer-text" >
						<a>© 2019 - Tim Kobra. All Rights Reserved.</a>
					</div>
				</div>
			</div>
		</div>
	</footer> -->
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<!-- <div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div> -->
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/bootstrap.min.js')?>"></script>
	<!-- Owl Carousel JS-->
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/owl.carousel.min.js')?>"></script>
	<!-- Magnific PopUp JS-->
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/jquery.magnific-popup.js')?>"></script>
	<!-- Custom Style JS-->
	<script type="text/javascript" src="<?php echo base_url('assets/template/js/style.page.js')?>"></script>

	<!-- Datatables JS-->
    <script src="<?php echo base_url('assets/template/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
    <script type="text/javascript">
    	$('#datatable').DataTable( {
		    responsive: false,
		    ordering: false,
		    pageLength: 100
		} );
		// $('#tablereview').dataTable( {
		//     "pageLength": 100
		// } );
    </script>

</body>

</html>
