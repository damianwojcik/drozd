<?php get_header(); ?>


		<section class="slider animation-element" data-anim="slide_top">

			<div class="container">

				<div class="row">

					<div class="span12">

						<h1 class="title">Artykuły</h1>

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

						<article>

							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

								<?php $article_img = get_field('article-img');  ?>

								<div class="article-heading-img-wrap" style="background-image: url(<?php echo $article_img['url']; ?>);"></div>

								<h2><?= the_title(); ?></h2>

								<div class="article-heading-social">

									<ul>
										<li><a href="#"><img src="<?= THEME_URL; ?>/assets/img/icons/facebook-like-btn.png" alt="Like!"></a></li>
										<li><a href="#"><img src="<?= THEME_URL; ?>/assets/img/icons/facebook-share-btn.png" alt="Share on facebook"></a></li>
									</ul>
									
								</div>

								<p class="lead">

									<?= the_field('lead'); ?>

								</p>

								<?php the_content(); ?>								

							<?php endwhile; endif; ?>

							<a href="#" class="btn btn-transparent">Wróć</a>

						</article>

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

							<article>
						
								<h4>Nolestie altricies porta urna tibulum commodo volutpat lorem ipsum</h4>

								<div class="wrap">

									<div class="article-img-wrap" style="background-image: url(<?= THEME_URL; ?>/assets/img/articles/article3.jpg);"></div>

									<div class="article-content-wrap">

										<p>Turpis velit, rhoncus eu, luctus et interdum adipiscing wisi mauris anec malesuada fames honcus eluctus.</p>

										<a href="#" class="btn btn-green btn-small">Więcej</a>

									</div>

								</div>

							</article>

							<article>
							
								<h4>Nolestie altricies porta urna tibulum commodo volutpat lorem ipsum</h4>

								<div class="wrap">

									<div class="article-img-wrap" style="background-image: url(<?= THEME_URL; ?>/assets/img/articles/article2.jpg);"></div>

									<div class="article-content-wrap">

										<p>Turpis velit, rhoncus eu, luctus et interdum adipiscing wisi mauris anec malesuada fames honcus eluctus.</p>

										<a href="#" class="btn btn-green btn-small">Więcej</a>

									</div>

								</div>

							</article>

							<article>
							
								<h4>Nolestie altricies porta urna tibulum commodo volutpat lorem ipsum</h4>

								<div class="wrap">

									<div class="article-img-wrap" style="background-image: url(<?= THEME_URL; ?>/assets/img/articles/article2.jpg);"></div>

									<div class="article-content-wrap">

										<p>Turpis velit, rhoncus eu, luctus et interdum adipiscing wisi mauris anec malesuada fames honcus eluctus.</p>

										<a href="#" class="btn btn-green btn-small">Więcej</a>

									</div>

								</div>

							</article>

							<a href="#" class="btn btn-transparent">Pokaż wszystkie</a>

						</section>
						<!-- END aside section -->

					</aside>

				</div>

			</div>

		</div>

	</section>
	<!-- END section content -->


<?php get_footer(); ?>