
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

									<li class="phone"><a href="callto:<?php echo $header_phone; ?>">Tel. <?php echo $header_phone; ?></a></li>

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

								<?php dynamic_sidebar('main_menu'); ?>

							</nav>

						</div>

					</div>

				</div>

			</section>
			<!-- END section navigation -->

		</section>
		<!-- END section header-wrap -->
