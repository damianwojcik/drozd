
		<section class="slider animation-element" data-anim="slide_top">

			<div class="owl-carousel">

				<?php if( have_rows('slides', 'option') ): ?>

					<?php while ( have_rows('slides', 'option') ) : the_row(); ?>

					<?php

						$slide_heading = get_sub_field('slide_heading');
						$slide_heading_strong = get_sub_field('slide_heading_strong');
						$slide_description = get_sub_field('slide_description');
						$slide_image = get_sub_field('slide_image');

					?>

					<!-- BEGIN slide -->
					<div class="item">

						<div class="container">

							<div class="row-tight">

								<div class="span6">

									<div class="slide-wrap">

										<?php if( !empty($slide_heading) or !empty($slide_heading_strong) ): ?>

											<h1>

												<?php if( !empty($slide_heading) ): ?>

													<?php echo $slide_heading; ?> <br />

												<?php endif; ?>

												<?php if( !empty($slide_heading_strong) ): ?>

													<strong><?php echo $slide_heading_strong; ?></strong>

												<?php endif; ?>

											</h1>

										<?php endif; ?>


										<?php if( !empty($slide_description) ): ?>

											<small><?php echo $slide_description; ?></small>

										<?php endif; ?>

									</div>
									<!-- END slide-wrap -->

								</div>
								<!-- END span6 -->


								<div class="span6" style="background-image: url('<?php echo $slide_image['url']; ?>');"></div>
								<!-- END span6 -->

							</div>
							<!-- END row-tight -->

						</div>
						<!-- END container -->

					</div>
					<!-- END slide -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div>
			<!-- END owl-carousel -->

		</section>
		<!-- END section slider -->
