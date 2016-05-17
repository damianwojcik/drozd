<?php get_header(); ?>


	<!-- =================================================
			section content
	================================================== -->
	<section class="content animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

				<div class="span8 main">

					<main>

            <ul class="article-tiles">

              <?php if ( have_posts() ) : ?>

                <?php $i = 0; ?>

                <?php while ( have_posts() ) : the_post();  ?>

                <?php

                  $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                  $title = get_the_title();
                  $content = get_the_content();
                  $trimmed_content = wp_trim_words( $content, 25 );
                ?>

                <li>

                  <?php if( !empty($thumbnail) ): ?>

                    <a href="<?php the_permalink(); ?>" class="tile-img-link">

                      <div class="tile-img" style="background-image: url(<?php echo $thumbnail[0]; ?>)"></div>

                    </a>

                  <?php endif; ?>

                  <!-- date -->
                  <?php echo '<time datetime="'.date('c').'">'.date('Y/m/d').'</time>';?>

                  <h3><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h3>

                  <p>
                    <?php echo $trimmed_content; ?>
                  </p>

                  <?php the_tags( '<ul class="article-tags"><li>', '</li><li>', '</li></ul>' ); ?>

                  <a href="<?php the_permalink(); ?>" class="btn btn-arrow-right">Więcej</a>

                </li>

                <?php $i = $i + 1; ?>

                <?php if( ($i % 2 == 0) ){ ?>
                  <hr>
                <?php } ?>

              <?php endwhile; ?>

            </ul>

            <!-- wordpress paginate_links -->
            <?php the_posts_pagination( array(
      					'mid_size'  => 2,
      					'prev_text' => __( '&lt;' ),
      					'next_text' => __( '&gt;' ),
      				) );
        		?>


            <?php else : ?>

              <p><?php _e('Przepraszamy, niestety nie znaleziono żadnych wpisów spełniających Twoje kryteria.'); ?></p>

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


					</aside>

				</div>

			</div>

		</div>

	</section>
	<!-- END section content -->


<?php get_footer(); ?>
