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

	<meta property="og:url"           content="http://localhost/drozd/" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Przychodnia Drozd" />
	<meta property="og:description"   content="Prywatna Przychodnia Specjalistyczna" />
	<meta property="og:image"         content="http://localhost/drozd/assets/img/logo.png" />


	<!-- HTML 5 SUPPORT
	================================================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<!-- facebook SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.6";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
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
