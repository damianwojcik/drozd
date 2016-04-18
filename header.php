<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">


	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/base.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/gridset.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/animations.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/style.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/responsive.css">


	<!-- JS
	================================================== -->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script src="<?= THEME_URL; ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?= THEME_URL; ?>/assets/js/scripts.js"></script>


	<!-- HTML 5 SUPPORT
	================================================== -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


</head>
<body <?php body_class(); ?>>


<!-- =================================================
		sidebar-menu
================================================== -->
<aside class="sidebar-menu">

	<a href="#" class="btn sidebar-btn">WRÓĆ</a>

	<nav id="mobile-menu">

		<ul>

			<li><a href="#">Strona Główna</a></li>
			<li><a href="#">O nas</a></li>
			<li>

				<span class="nav-more">+</span>

				<a href="#">Poradnie</a>


				<ul class="sub-menu">
					
					<li><a href="#">Poradnia Kardiologiczna</a></li>
					<li><a href="#">Poradnia Kardiochirurgiczna</a></li>
					<li><a href="#">Poradnia Chirurgii Naczyń i Angiologii</a></li>
					<li><a href="#">Poradnia Dermatologiczna</a></li>
					<li><a href="#">Poradnia Neurologiczna</a></li>
					<li><a href="#">Poradnia Nefrologiczna</a></li>
					<li><a href="#">Poradnia Pediatryczna</a></li>
					<li><a href="#">Pracownia USG</a></li>
					<li><a href="#">Pracownia Prób Wysiłkowych</a></li>
					<li><a href="#">Pracownia Holterowska</a></li>
					<li><a href="#">Pracownia Echokardiografii</a></li>
					<li><a href="#">Badania kierowców</a></li>

				</ul>


			</li>
			<li><a href="#">Galeria</a></li>
			<li><a href="#">Kontakt</a></li>

		</ul>

	</nav>

</aside>
<!-- END mobile nav -->


<div class="page--wrapper">


	<!-- =================================================
			header
	================================================== -->
	<header>

		<section class="header-wrap animation-element" data-anim="slide_top">

			<section class="top-panel">

				<div class="container">

					<div class="row-tight">

						<div class="span6">

							<a href="#">www.przychodnia-drozd.pl</a>

						</div>

						<div class="span6">

							<ul>

								<li class="email"><a href="mailto:kontakt@przychodnia-drozd.pl">kontakt@przychodnia-drozd.pl</a></li>
								<li class="phone"><a href="callto:0322051313">Tel. 32 205 13 13</a></li>

							</ul>

						</div>

					</div>

				</div>

			</section>
			<!-- END section top-panel -->

			<section class="header-navigation">

				<div class="container">

					<div class="row-tight">

						<div class="span4">

							<div class="logo-wrapper">
								
								<a href="<?= SITE_URL; ?>">

									<img class="logo" src="<?= THEME_URL; ?>/assets/img/logo.png" alt="Drozd Logo">

									<span>Prywatna Przychodnia Specjalistyczna</span>

								</a>

							</div>
							<!-- END logo-wrapper -->

							<!-- mobile nav -->
							<div id="menu-toggle">

								<span id="menu-toggle-text">MENU</span>

								<div class="menu-bars">

									<span class="menu-bar"></span>
									<span class="menu-bar"></span>
									<span class="menu-bar"></span>

								</div>

							</div>

						</div>

						<div class="span8">

							<nav id="desktop-menu">

								<ul>

									<li><a href="#">Strona Główna</a></li>
									<li><a href="#">O nas</a></li>
									<li>

										<a href="#">Poradnie</a>

										<div class="sub-menu">

											<h3>Poradnie</h3>

											<ul>
												
												<li><a href="#">Poradnia Kardiologiczna</a></li>
												<li><a href="#">Poradnia Kardiochirurgiczna</a></li>
												<li><a href="#">Poradnia Chirurgii Naczyń i Angiologii</a></li>
												<li><a href="#">Poradnia Dermatologiczna</a></li>
												<li><a href="#">Poradnia Neurologiczna</a></li>
												<li><a href="#">Poradnia Nefrologiczna</a></li>
												<li><a href="#">Poradnia Pediatryczna</a></li>
												<li><a href="#">Pracownia USG</a></li>
												<li><a href="#">Pracownia Prób Wysiłkowych</a></li>
												<li><a href="#">Pracownia Holterowska</a></li>
												<li><a href="#">Pracownia Echokardiografii</a></li>
												<li><a href="#">Badania kierowców</a></li>

											</ul>

										</div>

									</li>
									<li><a href="#">Galeria</a></li>
									<li><a href="#">Kontakt</a></li>

								</ul>

							</nav>

						</div>

					</div>

				</div>

			</section>
			<!-- END section navigation -->

		</section>
		<!-- END section header-wrap -->


		