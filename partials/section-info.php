
	<section class="info animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

				<?php if( have_rows('info_boxes', 'option') ): ?>

					<?php while ( have_rows('info_boxes', 'option') ) : the_row(); ?>

						<?php

						$image = get_sub_field('image');
						$title = get_sub_field('title');
						$content = get_sub_field('content');

						?>

						<div class="span4">

							<div class="wrap">

								<div class="icon-wrap">

									<?php if( !empty($image) ): ?>

										<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

									<?php endif; ?>

								</div>

								<div class="info-content">

									<?php if( !empty($title) ): ?>

										<h3><?php echo $title; ?></h3>

									<?php endif; ?>


									<?php if( !empty($content) ): ?>

										<?php echo $content; ?>

									<?php endif; ?>

								</div>

							</div>

						</div>
						<!-- END span4 -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

		</div>

	</section>
	<!-- END section info -->
