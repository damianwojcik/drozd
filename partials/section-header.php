
		<section class="header-wrap animation-element" data-anim="slide_top">

			<section class="top-panel">

				<div class="container">

					<div class="row-tight">

						<div class="span6">

							<a href="<?= SITE_URL; ?>">www.przychodnia-drozd.pl</a>

						</div>

						<div class="span6">

							<?php

							$header_email = get_field('header_email', 'option');
							$header_phone = get_field('header_phone', 'option');

							?>

							
							<?php if( !empty($header_email) or !empty($header_phone)): ?>

							<ul>

								<?php if( !empty($header_email) ): ?>

									<li class="email"><a href="mailto:<?php echo $header_email; ?>"><?php echo $header_email; ?></a></li>

								<?php endif; ?>


								<?php if( !empty($header_phone) ): ?>

									<li class="phone"><a href="callto:0322051313"><?php echo $header_phone; ?></a></li>

								<?php endif; ?>

							</ul>

							<?php endif; ?>

						</div>

					</div>

				</div>

			</section>
			<!-- END section top-panel -->


			<section class="header-navigation">

				<div class="container">

					<div class="row-tight">

						<div class="span4">

							<div class="logo-wrapper">
								
								<a href="<?= SITE_URL; ?>">

									<?php

									$logo = get_field('logo', 'option');
									$logo_title = get_field('logo_title', 'option');

									?>

									<?php if( !empty($logo) ): ?>

										<img class="logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

									<?php endif; ?>


									<?php if( !empty($logo_title) ): ?>

										<span><?php echo $logo_title; ?></span>

									<?php endif; ?>

								</a>

							</div>
							<!-- END logo-wrapper -->

							<!-- mobile nav -->
							<div id="menu-toggle">

								<span id="menu-toggle-text">MENU</span>

								<div class="menu-bars">

									<span class="menu-bar"></span>
									<span class="menu-bar"></span>
									<span class="menu-bar"></span>

								</div>

							</div>

						</div>

						<div class="span8">

							<nav id="desktop-menu">

								<!-- <ul>

									<li><a href="#">Strona Główna</a></li>
									<li><a href="#">O nas</a></li>
									<li>

										<a href="#">Poradnie</a>

										<div class="sub-menu">

											<h3>Poradnie</h3>

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

									</li>
									<li><a href="#">Galeria</a></li>
									<li><a href="#">Kontakt</a></li>

								</ul> -->

								<?php dynamic_sidebar('main_menu'); ?>

							</nav>

						</div>

					</div>

				</div>

			</section>
			<!-- END section navigation -->

		</section>
		<!-- END section header-wrap -->
