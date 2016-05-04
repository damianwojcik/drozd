<?php get_header(); ?>


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


						<?php endwhile; ?>

					<?php endif; ?>

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