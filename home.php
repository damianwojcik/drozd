<?php get_header(); ?>


		<section class="slider animation-element" data-anim="slide_top">

			<div class="owl-carousel">

				<?php

					// check if the repeater field has rows of data
					if( have_rows('slides', 'option') ):

					 	// loop through the rows of data
					    while ( have_rows('slides', 'option') ) : the_row();


							$slide_heading = get_sub_field('slide_heading');
							$slide_heading_strong = get_sub_field('slide_heading_strong');
							$slide_description = get_sub_field('slide_description');
							$slide_image = get_sub_field('slide_image');
				?>

				<!-- BEGIN slide -->
				<div class="item">



					<div class="container" style="background-image: url('<?php echo $slide_image['url']; ?>');">

						<div class="row-tight">

							<div class="span7">

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

							</div>

						</div>

					</div>

				</div>
				<!-- END slide -->

				<?php
				   endwhile;

				else :

				    // no rows found

				endif;

				?>

			</div>
			<!-- END owl-carousel -->

		</section>
		<!-- END section slider -->

	</header>

	<!-- =================================================
			section featured
	================================================== -->
	<section class="featured animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

				<?php

				// check if the repeater field has rows of data
				if( have_rows('featured_boxes', 'option') ):

				 	// loop through the rows of data
				    while ( have_rows('featured_boxes', 'option') ) : the_row(); 

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


							<?php

							// check if the repeater field has rows of data
							if( have_rows('list', 'option') ):

							 	?>

									<ul>

									<?php
								    while ( have_rows('list', 'option') ) : the_row(); 

										$list_element = get_sub_field('list_element');
										
										?>

										<li><?php echo $list_element; ?></li>

										<?php

											endwhile; ?>

									</ul>

									<?php
									else :

								    // no rows found

										endif;

									?>

							<?php if( !empty($description) ): ?>

								<small><?php echo $description; ?></small>

							<?php endif; ?>

						</div>

					</div>
					<!-- END span4 -->


				<?php
				   endwhile;

				else :

				    // no rows found

				endif;

			?>

			</div>

		</div>

	</section>
	<!-- END section featured -->


	<!-- =================================================
			section content
	================================================== -->
	<section class="content animation-element" data-anim="slide_top">

		<div class="container">
			
			<div class="row-tight">
				
				<div class="span8 main">

					<section class="intro animation-element" data-anim="slide_top">

						<div class="wrap">

						<?php

						// check if the repeater field has rows of data
						if( have_rows('section_intro', 'option') ):

						 	// loop through the rows of data
						    while ( have_rows('section_intro', 'option') ) : the_row(); 

								$section_title = get_sub_field('section_title');
								$section_content = get_sub_field('section_content');
								$section_image = get_sub_field('section_image');

								?>

							<h3><?php echo $section_title; ?></h3>

							<p>
								<?php echo $section_content; ?>
							</p>

							<img class="img-intro animation-element" data-anim="scale_up" src="<?php echo $section_image['url']; ?>" alt="<?php echo $section_image['alt']; ?>">

							<a href="#" class="btn btn-green btn-large">Czytaj więcej</a>

							<?php
								   endwhile;

								else :

								    // no rows found

								endif;

							?>

						</div>

					</section>
						<!-- END section intro -->


					<main>

						<section class="news animation-element" data-anim="slide_top">

							<div class="section-headline">

								<h3>Aktualności</h3>

								<a href="#" class="btn btn-transparent">Wszystkie newsy</a>

							</div>
							<!-- END section-headline -->

							<?php $featured_category = get_field('featured_articles_category', 'option'); ?>
							<?php $args = array(
								'posts_per_page'   => 3,
								'category'         => $featured_category
							);
							$posts_array = get_posts( $args );

							?>

							<?php if( !empty($posts_array) ): ?>

							<?php 

							$trimmed = wp_trim_words( $posts_array[0]->post_content ); 
							$post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($posts_array[0]), 'large' );
							?>

							<article class="featured animation-element" data-anim="slide_top">
								
								<div class="article-img-wrap" style="background-image: url(<?php echo $post_thumbnail[0] ?>);"></div>

								<div class="article-content-wrap">

									<h4><?php echo $posts_array[0]->post_title; ?></h4>
									<p><?php echo $trimmed; ?></p>

									<a href="<?php the_permalink(); ?>" class="btn btn-green btn-medium">Więcej</a>

								</div>

							</article>

							<div class="row row-articles animation-element" data-anim="slide_top">


							<?php

								for ($i = 1; $i <= 2; $i++){

									$trimmed = wp_trim_words( $posts_array[$i]->post_content );
									$post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($posts_array[$i]), 'large' );
									?>


									<div class="span6">

									<article>
									
										<h4><?php echo $posts_array[$i]->post_title; ?></h4>

										<div class="wrap">

											<div class="article-img-wrap" style="background-image: url(<?php echo $post_thumbnail[0] ?>);"></div>

											<div class="article-content-wrap">

												<p><?php echo $trimmed; ?></p>

												<a href="<?php the_permalink(); ?>" class="btn btn-green btn-small">Więcej</a>

											</div>

										</div>

									</article>

								</div>

							<?php

								}
								?>
							
							<?php endif; ?>
							<!-- ENDif !empty posts_array -->


							</div>

							<!-- mobile only (480w) -->
							<a href="#" class="btn btn-mobile btn-transparent">Wszystkie newsy</a>

						</section>

					</main>
					
				</div>


				<div class="span4 aside">
					
					<aside class="animation-element" data-anim="slide_top">

						<section class="thumb-listing animation-element" data-anim="slide_top">

							<h3>Dzisiaj Przyjmują</h3>

							<p>Rus et interdum adipisci wisi mauris lorem nec malesuada fame:</p>

							<ul>

								<li>

									<a href="#">

										<div class="thumb-photo-wrap" style="background-image: url(<?= THEME_URL; ?>/assets/img/people/wojciechceglarski.jpg);"></div>

										<div class="thumb-item-details">
											<span>dr Wojciech Ceglarski</span>
											<h5>Kardiochirurg</h5>
											<span class="text-blue">10.00 - 14.00</span>
										</div>

									</a>

								</li>

								<li>

									<a href="#">

										<div class="thumb-photo-wrap" style="background-image: url(<?= THEME_URL; ?>/assets/img/people/malgorzatapuzio.jpg);"></div>

										<div class="thumb-item-details">
											<span>Małgorzata Puzio</span>
											<h5>Medycyna rodzinna</h5>
											<span class="text-blue">12.00 - 20.00</span>
										</div>

									</a>

								</li>

								<li>

									<a href="#">

										<div class="thumb-photo-wrap" style="background-image: url(<?= THEME_URL; ?>/assets/img/people/ligiabrzezinska.jpg);"></div>

										<div class="thumb-item-details">
											<span>prof. Ligia Brzezińska-Wcisło</span>
											<h5>Dermatolog, Wenerolog</h5>
											<span class="text-blue">14.00 - 18.00</span>
										</div>

									</a>

								</li>

							</ul>

							<a href="#" class="btn btn-transparent">Pokaż wszystkich</a>

						</section>
						<!-- END aside section -->

						<section class="form-wrap animation-element" data-anim="slide_top">
							
							<h3>Umów się na wizytę</h3>

							<p>Hasellus fermentum in, dolor pellentesque facilisi nulla malesuada fames  luctus et</p>

							<form action="">

								<input type="text" name="name" id="name" placeholder="Imię i nazwisko">

								<input type="text" name="contact" id="contact" placeholder="Email lub telefon">

								<textarea cols="1" rows="1" name="msg" id="msg" placeholder="Treść wiadomości">
									
								</textarea>

								<div class="submit-wrap">

									<input type="submit" value="Wyślij zapytanie">

								</div>

							</form>

						</section>
						<!-- END aside section -->

					</aside>

				</div>

			</div>

		</div>

	</section>
	<!-- END section content -->

<?php get_footer(); ?>