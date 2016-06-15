<?php get_header(); ?>

<?php
	$categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	$category_link = get_category_link( $category_id );
?>


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

								<?php if( !empty($post_thumbnail) ){ ?>

									<div class="article-heading-img-wrap b-lazy" data-src="<?php echo $post_thumbnail['0']; ?>"></div>

								<?php } ?>

								<h2><?php the_title(); ?></h2>

								<div class="article-heading-social">

									<ul>
										<li><div class="fb-like" data-href="http://localhost/drozd/" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div></li>
									</ul>

								</div>

							</div>

						</article>

						<?php endif; ?>
						<!-- END post type template -->


						<!-- BEGIN page type template -->

						<?php the_content(); ?>


						<!-- Gallery -->
						<div class="gallery-wrapper">

							<?php if( have_rows('gallery_container') ): ?>

								<?php while ( have_rows('gallery_container') ) : the_row(); ?>

								<?php

									$title = get_sub_field('title');
									$images = get_sub_field('gallery');

								?>

								<!-- gallery title -->
								<?php if( !empty($title) ){ ?>
									<h4><?php echo $title; ?></h4>
								<?php } ?>

								<!-- gallery images -->
								<?php if( !empty($images) ){ ?>

									<div class="image-container">

						        <?php foreach( $images as $image ): ?>

					                <a href="<?php echo $image['url']; ?>" rel="lightbox">

				                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />

										 <div class="color-overlay">
											 <i class="material-icons">search</i>
										 </div>

					                </a>

						        <?php endforeach; ?>

						    	</div>
									<!-- END image-container -->

								<?php } ?>

								<?php endwhile; ?>

							<?php endif; ?>

						</div>
						<!-- END gallery-wrapper -->


						<?php endwhile; ?>

					<?php endif; ?>

					<?php if( is_single() ){ ?>

						<a href="<?php echo $category_link; ?>" class="btn btn-transparent btn-back">Wróć</a>

					<?php } ?>


					<!-- =================================================
				            module featured_articles
				    ================================================== -->
				    <?php get_template_part("partials/module", "featured_articles"); ?>


					</main>

				</div>


				<div class="span4 aside">

					<aside class="animation-element" data-anim="slide_top">
						<!-- =================================================
							section aside-map
						================================================== -->
						<?php get_template_part("partials/aside", "map"); ?>

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
						<?php //get_template_part("partials/aside", "related_articles"); ?>



					</aside>

				</div>

			</div>

		</div>

	</section>
	<!-- END section content -->


<?php get_footer(); ?>
