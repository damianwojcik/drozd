<?php get_header(); ?>


		<section class="slider animation-element" data-anim="slide_top">

			<div class="container">

				<div class="row">

					<div class="span12">

						<h1 class="title"><?php the_title(); ?></h1>

					</div>

				</div>

			</div>

		</section>
		<!-- END section slider -->

	</header>

	<!-- =================================================
			section content
	================================================== -->
	<section class="content animation-element" data-anim="slide_top">

		<div class="container">
			
			<div class="row-tight">
				
				<div class="span8 main">

					<main>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php if ( has_post_thumbnail() ) {

							$post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
							$categories = get_the_category( $post->ID );
							$category_id = $categories[0]->term_id;
							$category_link = get_category_link( $category_id );

						}?>

						<?php 

						$is_page = is_page();

						// BEGIN post type template
						if($is_page != 1): ?>

						<article>

							<div class="article-heading">

								<div class="article-heading-img-wrap" style="background-image: url(<?php echo $post_thumbnail['0']; ?>);"></div>

								<h2><?php the_title(); ?></h2>

								<div class="article-heading-social">

									<ul>
										<li><a href="#"><img src="<?= THEME_URL; ?>/assets/img/icons/facebook-like-btn.png" alt="Like!"></a></li>
										<li><a href="#"><img src="<?= THEME_URL; ?>/assets/img/icons/facebook-share-btn.png" alt="Share on facebook"></a></li>
									</ul>
									
								</div>

							</div>

						<a href="#" class="btn btn-transparent">Wróć</a>

						</article>

						<?php endif; ?>
						<!-- END post type template -->

						<!-- BEGIN page type template -->


						<?php the_content(); ?>	


					<?php endwhile; endif; ?>

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

						<section class="related-articles animation-element" data-anim="slide_top">
							
							<h3>Powiązane artykuły</h3>

							<?php $args = array(
								'posts_per_page'   => 3,
								'category'         => $category_id,
							);
							$posts_array = get_posts( $args );

							?>

							<?php if (!empty($posts_array)){ ?>
							
							<?php foreach ($posts_array as $post) { ?>

							<?php 

							$trimmed = wp_trim_words( $post->post_content ); 
							$post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'large' );

							?>
							<article>
						
								<h4><?php echo $post->post_title; ?></h4>

								<div class="wrap">

									<div class="article-img-wrap" style="background-image: url(<?php echo $post_thumbnail[0] ?>);"></div>

									<div class="article-content-wrap">

										<p><?php echo $trimmed; ?></p>

										<a href="<?php the_permalink(); ?>" class="btn btn-green btn-small">Więcej</a>

									</div>

								</div>

							</article>

							<?php } ?>

							

							<a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-transparent">Pokaż wszystkie</a>

							<?php } ?>

						</section>
						<!-- END aside section -->

					</aside>

				</div>

			</div>

		</div>

	</section>
	<!-- END section content -->


<?php get_footer(); ?>