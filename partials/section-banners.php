
<section class="banners">

		<?php if( have_rows('section_banners', 'option') ): ?>

			<?php while ( have_rows('section_banners', 'option') ) : the_row(); ?>

				<?php $notification = get_sub_field('notification'); ?>

				<div class="container">

					<div class="row">

						<?php if( have_rows('single_banner', 'option') ): ?>

						    <?php while ( have_rows('single_banner', 'option') ) : the_row(); ?>

						    <?php

								$image = get_sub_field('image');
								$link = get_sub_field('link');

							?>

								<div class="span4">

									<div class="wrap">

										<a href="<?php echo $link; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>

									</div>

								</div>

							<?php endwhile; ?>

						<?php endif; ?>	
							
					</div>
					<!-- END row -->

					<div class="row">

						<div class="span12">

							<?php if( !empty($newsletter_content) ): ?>

								<p>
									<?php echo $notification; ?>
								</p>

							<?php endif; ?>

						</div>

					</div>
					<!-- END row -->

				</div>

			<?php endwhile; ?>
			   
		<?php endif; ?>

	</section>
	<!-- END section banners -->
