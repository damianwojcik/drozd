						<?php $args = array(
							'posts_per_page'   => 3,
							'post_type'        => 'doctor',
							);

						$posts_array = get_posts( $args );

						$today = date("l");

						?>


						<section class="thumb-listing animation-element" data-anim="slide_top">

							<h3>Dzisiaj Przyjmują</h3>

							<p>Rus et interdum adipisci wisi mauris lorem nec malesuada fame:</p>

							<?php if (!empty($posts_array)){ ?>

								<ul>

								<?php foreach ($posts_array as $post) { ?>

									<?php

										$name = get_the_title();
										$photo = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
										$title = get_field('title');
										$workdays = get_field('workdays');


										//displays doctors working on current day
										foreach ($workdays as $days) {

											
											$dayAndHour = ' ' . $days['days'] . $days['hours'];

											$translate = array(
											"Poniedziałek" => "Monday",
											"Wtorek" => "Tuesday",
											"Środa" => "Wednesday",
											"Czwartek" => "Thursday",
											"Piątek" => "Friday",
											"Sobota" => "Saturday",
											"Niedziela" => "Sunday" );

											$daysOfDoctor = strtr($dayAndHour, $translate);

											$pos = strpos($daysOfDoctor, $today);

											if( $pos == 1){ ?>

												<li>

													<a href="<?php the_permalink(); ?>">

														<div class="thumb-photo-wrap" style="background-image: url(<?php echo $photo; ?>);"></div>

														<div class="thumb-item-details">

															<span><?php echo $name; ?></span>

															<h5><?php echo $title; ?></h5>

															<span class="text-blue"><?php echo str_replace($today, "", $daysOfDoctor); ?></span>

														</div>

													</a>

												</li>

											<?php }//end if ?>

										<?php }//end foreach workdays?>

									<?php } // END foreach post?>

								</ul>

							<?php } // END if !empty($posts_array) ?>

							<a href="<?php echo get_post_type_archive_link( 'doctor' ); ?>" class="btn btn-transparent">Pokaż wszystkich</a>

							</section>
							<!-- END section thumb-listing -->

