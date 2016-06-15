
				<?php $category_link = get_category_link( 3 ); ?>

						<section class="related-articles animation-element" data-anim="slide_top">

							<h3>Aktualnośći</h3>

							<?php $args = array( 'posts_per_page' => 3, 'category' => $category_id, );

							$posts_array = get_posts( $args );

							if (!empty($posts_array)){

								foreach ($posts_array as $post) {

									$trimmed_content = wp_trim_words( $post->post_content );
									$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'thumbnail' );

							?>

								<article>

									<h4><a href="<?php the_permalink(); ?>"><?php echo $post->post_title; ?></a></h4>

									<div class="wrap">

										<a href="<?php the_permalink(); ?>" class="tile-img-link">

						          <div class="tile-img b-lazy"<?php if( !empty($thumbnail) ){ ?> data-src="<?php echo $thumbnail[0];?>" <?php } ?>>

						            <?php if( empty($thumbnail) ){ ?>

						              <div class="image-placeholder">
						                <i class="material-icons">photo_camera</i>
						              </div>

						            <?php } ?>
						          </div>

						        </a>

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
