<?php get_header(); ?>

	<!-- =================================================
			section featured
	================================================== -->
	<?php get_template_part("partials/section", "featured"); ?>


	<!-- =================================================
			section content
	================================================== -->
	<section class="content animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

				<div class="span8 main">

					<!-- =================================================
							section intro
					================================================== -->
					<?php get_template_part("partials/section", "mobile-map"); ?>


					<!-- =================================================
							section intro
					================================================== -->
					<?php get_template_part("partials/section", "intro"); ?>


					<main>

						<!-- =================================================
								section news
						================================================== -->
						<?php get_template_part("partials/section", "news"); ?>


					</main>

				</div>
				<!-- END span8 main -->


				<div class="span4 aside">

					<aside class="animation-element" data-anim="slide_top">
						<!-- =================================================
							section aside-map
						================================================== -->
						<?php get_template_part("partials/aside", "map"); ?>


						<!-- =================================================
							section thumb-listing
						================================================== -->
						<?php get_template_part("partials/aside", "thumb_listing"); ?>


						<!-- =================================================
							section form-wrap
						================================================== -->
						<?php get_template_part("partials/aside", "form_wrap"); ?>


					</aside>

				</div>
				<!-- END span4 aside -->

			</div>

		</div>

	</section>
	<!-- END section content -->

<?php get_footer(); ?>
