
					<section class="intro animation-element" data-anim="slide_top">

						<div class="wrap">

						<?php if( have_rows('section_intro', 'option') ): ?>

						    <?php while ( have_rows('section_intro', 'option') ) : the_row(); ?>

						   		<?php

								$section_title = get_sub_field('section_title');
								$section_content = get_sub_field('section_content');
								$section_image = get_sub_field('section_image');

								?>

									<?php if( !empty($section_title) ): ?>

										<h3><?php echo $section_title; ?></h3>

									<?php endif; ?>


									<?php if( !empty($section_content) ): ?>

										<p>
											<?php echo $section_content; ?>
										</p>

									<?php endif; ?>

									<a href="http://dev.time4digital.pl/drozd/wp-content/uploads/2016/06/PPS-Drozd-PCA-QMS15-001.jpg" rel="lightbox"
									class="img-intro animation-element" data-anim="scale_up">
									<img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['alt']; ?>" />
								</a>

									<a href="<?php echo get_page_link(18); ?>" class="btn btn-green btn-large">Czytaj więcej</a>

								<?php endwhile; ?>

							<?php endif; ?>

						</div>

					</section>
					<!-- END section intro -->
