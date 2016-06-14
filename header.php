<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />


	<!-- HTML 5 SUPPORT
	================================================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<!-- Google analytics -->
<script>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-59785261-16', 'auto');
	ga('send', 'pageview');

</script>


<!-- =================================================
		sidebar-menu MOBILE NAV
================================================== -->
<?php get_template_part("partials/section", "mobile_nav"); ?>


<!-- =================================================
		page-wrapper
================================================== -->
<div class="page--wrapper">


	<!-- =================================================
			header
	================================================== -->
	<header>

		<?php get_template_part("partials/section", "header"); ?>


		<?php if( is_home() ){ ?>

			<!-- =================================================
				section slider
			================================================== -->
			<?php get_template_part("partials/section", "slider"); ?>


		<?php }else{ ?>

			<!-- =================================================
				section title
			================================================== -->
			<?php get_template_part("partials/section", "title"); ?>


		<?php } ?>

	</header>
