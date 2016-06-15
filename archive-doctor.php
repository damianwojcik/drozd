<?php get_header(); ?>


	<!-- =================================================
			section content
	================================================== -->
	<section class="content animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

				<div class="span8 main">

					<main>

                        <!-- =================================================
                                section today-person
                        ================================================== -->
                        <?php if (!is_paged()): ?>

                            <?php get_template_part("partials/section", "today-person"); ?>

                        <?php endif; ?>


                            <section class="animation-element" data-anim="slide_top">


                                <h3>Wszyscy lekarze</h3>

    							<p>Godziny przyjmowania lekarzy są orientacyjne, przed wizytą prosimy o telefoniczną weryfikację z przychodnią.</p>


                                <ul class="person-tiles">

        			              <?php if ( have_posts() ) : ?>

        			                <?php while ( have_posts() ) : the_post();  ?>

        			                <?php

                                        $name = get_the_title();
                                        $photo = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
                                        $title = get_field('title');
                                        $workdays = get_field('workdays');

        			                ?>

        			                <li>

                                        <!-- <a href="<?php the_permalink(); ?>"> -->

                                            <?php if(!empty($photo)) { ?>

                                                <div class="thumb-photo-wrap b-lazy" data-src="<?php echo $photo; ?>"></div>

                                            <?php }else {?>

                                                <div class="thumb-photo-wrap b-lazy" data-src="<?= THEME_URL; ?>/assets/img/doctor-placeholder.jpg"></div>

                                            <?php } ?>

                                            <div class="thumb-item-details">

                                                <span><?php echo $name; ?></span>

                                                <h5><?php echo $title; ?></h5>

                                                <div class="inner-wrap">

                                                    <?php
                                                        for ($i=0; $i < 6 ; $i++) {
                                                            if(!empty($workdays[$i])){
                                                                echo "<span class=\"text-blue\">" . $workdays[$i]["days"] . ": ". $workdays[$i]["hours"] . "</span>";
                                                            }
                                                        }
                                                    ?>

                                                </div>
                                                <!-- END inner-wrap -->

                                            </div>

                                        <!-- </a> -->

        			                </li>

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

                            </section>

					</main>

				</div>
				<!-- END span8 main -->


				<div class="span4 aside">

					<aside class="animation-element" data-anim="slide_top">
                        <!-- =================================================
							section related-articles
						================================================== -->
						<?php get_template_part("partials/aside", "related_articles"); ?>


						<!-- =================================================
							section form-wrap
						================================================== -->
						<?php get_template_part("partials/aside", "form_wrap"); ?>


					</aside>

				</div>
				<!-- END span4 aside -->

			</div>

		</div>

	</section>
	<!-- END section content -->


<?php get_footer(); ?>
