<?php
	/* Template Name: Strona z podstronami */
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

		            <?php $child_pages = $wpdb->get_results("SELECT *    FROM $wpdb->posts WHERE post_parent = ".$post->ID."
		            AND post_type = 'page' ORDER BY menu_order", 'OBJECT');?>

					<?php if ( $child_pages ) { ?>

	              		<ul class="children-pages">

		                <?php $i = 1; ?>

		                	<?php foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>

								<li>

								<a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>">
								  <span class="page-enum"><?php if($i<10){ echo '0'; } ?><?php echo $i; echo '.'; ?></span>
								  <span class="page-name"><?php echo $pageChild->post_title; ?></span>
								</a>

								</li>

		              		<?php $i = $i+1; ?>

			            <?php endforeach; ?>

              			</ul>

					<?php } ?>


					</main>

				</div>
				<!-- END span8 main -->


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
				<!-- END span4 aside -->

			</div>

		</div>

	</section>
	<!-- END section content -->


<?php get_footer(); ?>
