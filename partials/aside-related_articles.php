						
						<section class="related-articles animation-element" data-anim="slide_top">
							
							<h3>Powiązane artykuły</h3>

							<?php $args = array( 'posts_per_page' => 3, 'category' => $category_id, );

							$posts_array = get_posts( $args );

							if (!empty($posts_array)){ 

								foreach ($posts_array as $post) {

									$trimmed_content = wp_trim_words( $post->post_content ); 
									$post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'large' );

							?>

								<article>
							
									<h4><?php echo $post->post_title; ?></h4>

									<div class="wrap">

										<div class="article-img-wrap" style="background-image: url(<?php echo $post_thumbnail[0] ?>);"></div>

										<div class="article-content-wrap">

											<p><?php echo $trimmed_content; ?></p>

											<a href="<?php the_permalink(); ?>" class="btn btn-green btn-small">Więcej</a>

										</div>

									</div>

								</article>

								<?php }//end foreach ?>

							<a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-transparent">Pokaż wszystkie</a>

							<?php }//end if ?>

						</section>
						<!-- END section related-articles -->
