<?php get_header(); ?>

<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


	<!-- =================================================
			section content
	================================================== -->
	<section class="content animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

				<div class="span8 main">

					<main>

            <h3>Strony nie znaleziono</h3>

            <p>

              Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie została odnaleziona. Sprawdź, czy adres URL nie zawiera błędów lub wróć na <a href="<?= SITE_URL; ?>">stronę główną</a>.

            </p>

					</main>

				</div>


				<div class="span4 aside">

					<aside class="animation-element" data-anim="slide_top">
						<!-- =================================================
							section thumb-listing
						================================================== -->
						<?php get_template_part("partials/aside", "thumb_listing"); ?>


						<!-- =================================================
							section form-wrap
						================================================== -->
						<?php get_template_part("partials/aside", "form_wrap"); ?>


						<!-- =================================================
							section related-articles
						================================================== -->
						<?php get_template_part("partials/aside", "related_articles"); ?>



					</aside>

				</div>

			</div>

		</div>

	</section>
	<!-- END section content -->


<?php get_footer(); ?>
