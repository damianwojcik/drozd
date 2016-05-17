<?php
	$categories = get_the_category();
	$category_name = str_replace('"', "", $categories[0]->name);
?>

	<section class="slider animation-element" data-anim="slide_top">

		<div class="container">

			<div class="row">

				<div class="span12">

					<h1 class="title">

						<?php if ( is_category() ) {
							single_cat_title();
						} elseif ( is_single() ) {
							echo $category_name;
						} elseif ( is_search() ) {
							echo 'Szukaj';
						} elseif ( is_tag() ) {
							single_tag_title('Tag: ');
						} elseif ( is_404() ) {
							echo 'Nie znaleziono strony';
						} else {
							the_title();
						} ?>

					</h1>

				</div>

			</div>

		</div>

	</section>
	<!-- END section slider -->
