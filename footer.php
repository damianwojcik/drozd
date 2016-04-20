	<!-- =================================================
			section info
	================================================== -->
	<section class="info animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row-tight">

			<?php

			// check if the repeater field has rows of data
			if( have_rows('info_boxes', 'option') ):

			 	// loop through the rows of data
			    while ( have_rows('info_boxes', 'option') ) : the_row(); 

					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$content = get_sub_field('content');

					?>

				<div class="span4">

					<div class="wrap">

						<div class="icon-wrap">

							<?php if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

							<?php endif; ?>

						</div>

						<div class="info-content">

							<?php if( !empty($title) ): ?>

								<h3><?php echo $title; ?></h3>

							<?php endif; ?>

							<?php if( !empty($content) ): 

								echo $content;

								endif;
							?>

						</div>

					</div>

				</div>
				<!-- END span4 -->

				<?php
					   endwhile;

					else :

					    // no rows found

					endif;

				?>

			</div>

		</div>

	</section>
	<!-- END section info -->


	<!-- =================================================
			footer
	================================================== -->
	<footer>

		<section class="footer-top animation-element" data-anim="slide_top">

			<div class="container">

				<div class="row-tight">

					<div class="span8">

						<ul>

							<li><a href="#">Poradnia Kardiologiczna</a></li>
							<li><a href="#">Poradnia Kardiochirurgiczna</a></li>
							<li><a href="#">Poradnia Chirurgii Naczyń i Angiologii</a></li>
							<li><a href="#">Poradnia Dermatologiczna</a></li>
							<li><a href="#">Poradnia Neurologiczna</a></li>
							<li><a href="#">Poradnia Nefrologiczna</a></li>
							<li><a href="#">Poradnia Pediatryczna</a></li>
							<li><a href="#">Pracownia USG</a></li>
							<li><a href="#">Pracownia Prób Wysiłkowych</a></li>
							<li><a href="#">Pracownia Holterowska</a></li>
							<li><a href="#">Pracownia Echokardiografii</a></li>
							<li><a href="#">Badania kierowców</a></li>

						</ul>

					</div>
					<!-- END span8 -->

					<div class="span4">

						<div class="module-newsletter">

							<h3>Newsletter</h3>

							<p>
								<?php $newsletter_content = get_field('newsletter_content', 'option');

								if( !empty($newsletter_content) ):

									echo $newsletter_content;

								endif;
								?>

							</p>

							<form action="">

								<div class="email-wrap">

									<input type="email" name="email" id="email" placeholder="Wpisz e-mail">

								</div>

								<div class="submit-wrap">

									<input type="submit" value="Zapisz się">

								</div>

							</form>

						</div>

					</div>
					<!-- END span4 -->

				</div>

			</div>

		</section>
		<!-- END footer-content -->

		<section class="footer-navigation">

			<div class="container">

				<div class="row-tight">

					<div class="span6">

						<nav>

							<ul>

								<li><a href="#">Strona Główna</a></li>
								<li><a href="#">O nas</a></li>
								<li><a href="#">Galeria</a></li>
								<li><a href="#">Kontakt</a></li>

							</ul>

						</nav>

					</div>

					<div class="span6">

						<p>2016 &copy; <a href="http://studionext.pl/">StudioNext.pl</a></p>

					</div>

				</div>

			</div>

		</section>
		<!-- END footer-navigation -->

	</footer>


	<!-- =================================================
			section banners
	================================================== -->
	<section class="banners">

		<?php

		// check if the repeater field has rows of data
		if( have_rows('section_banners', 'option') ):

		 	// loop through the rows of data
		    while ( have_rows('section_banners', 'option') ) : the_row(); 

				$notification = get_sub_field('notification');

		?>

		<div class="container">

			<div class="row">

				<?php

				// check if the repeater field has rows of data
				if( have_rows('single_banner', 'option') ):

				 	// loop through the rows of data
				    while ( have_rows('single_banner', 'option') ) : the_row(); 

						$image = get_sub_field('image');
						$link = get_sub_field('link');

				?>

				<div class="span4">

					<div class="wrap">

						<a href="<?php echo $link; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>

					</div>

				</div>

				<?php
					   endwhile;

					else :

					    // no rows found

					endif;

				?>
				
					
			</div>
			<!-- END row -->

			<div class="row">

				<div class="span12">

					<p>
						<?php echo $notification; ?>
					</p>

				</div>

			</div>
			<!-- END row -->

		</div>

		<?php
			   endwhile;

			else :

			    // no rows found

			endif;

		?>

	</section>
	<!-- END section banners -->

</div>
<!-- END page-wrapper -->


<!-- End Document
================================================== -->

<?php wp_footer(); ?>
</body>
</html>