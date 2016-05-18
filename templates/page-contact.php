<?php
	/* Template Name: Strona Kontakt */
?>

<?php get_header(); ?>


	<!-- =================================================
			section content
	================================================== -->
	<section class="content animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

				<div class="span8 main">

					<main>

						<h4>Wyślij nam wiadomość.</h4>

						<p>
							Skontaktuj się z nami za pomocą poniższego formularza, odpowiemy najszybciej jak będzie to możliwe.
						</p>

            <!-- ninja form -->
            <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>

					</main>

				</div>


				<div class="span4 aside">

					<aside class="animation-element" data-anim="slide_top">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <section class="aside-contact animation-element" data-anim="slide_top">

                <?php the_content(); ?>

              </section>

              <?php endwhile; ?>

            <?php endif; ?>

					</aside>

				</div>

			</div>

      <div class="row-tight">

        <!-- google map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20415.782422954442!2d19.004086!3d50.236413!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716cefa79da3bd5%3A0x273565b7c2e8c923!2sDrozd%C3%B3w+26%2C+Katowice%2C+Polska!5e0!3m2!1spl!2sus!4v1463405517938" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>

		</div>

	</section>
	<!-- END section content -->


<?php get_footer(); ?>
