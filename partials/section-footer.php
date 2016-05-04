
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

								<?php $newsletter_content = get_field('newsletter_content', 'option'); ?>

								<?php if( !empty($newsletter_content) ): ?>

									<?php echo $newsletter_content; ?>

								<?php endif; ?>

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

							<?php dynamic_sidebar('footer_menu'); ?>

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
