
	<section class="featured animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

				<?php if( have_rows('featured_boxes', 'option') ): ?>

					<?php while ( have_rows('featured_boxes', 'option') ) : the_row(); ?>

						<?php

							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$description = get_sub_field('description');

						?>

						<div class="span4">

							<div class="featured-box">

								<div class="featured-box-heading">

									<?php if( !empty($image) ): ?>

										<a href="#"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>

									<?php endif; ?>

								</div>

								<?php if( !empty($title) ): ?>

									<h2><?php echo $title; ?></h2>

								<?php endif; ?>


								<?php if( have_rows('list', 'option') ): ?>

									<ul>

										<?php while ( have_rows('list', 'option') ) : the_row();  ?>

											<?php if( have_rows('list_element', 'option') ): ?>

												<?php while ( have_rows('list_element', 'option') ) : the_row();  ?>

													<?php

														$text = get_sub_field('text');
														$url = get_sub_field('url');

													?>

													<li><a href="<?php echo $url; ?>"><?php echo $text; ?></a></li>

												<?php endwhile; ?>

											<?php endif; ?>

										<?php endwhile; ?>

									</ul>

								<?php endif; ?>


								<?php if( !empty($description) ): ?>

									<small><?php echo $description; ?></small>

								<?php endif; ?>

							</div>

						</div>
						<!-- END span4 -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

		</div>

	</section>
	<!-- END section featured -->
