<?php
    $category_id = get_cat_ID( 'Aktualności' );
    $category_link = get_category_link( $category_id );
?>

<section class="news animation-element" data-anim="slide_top">

  <div class="section-headline">

    <h3>Aktualności</h3>

    <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-transparent">Wszystkie newsy</a>

  </div>
  <!-- END section-headline -->

  <?php

    $featured_category = get_field('featured_articles_category', 'option');

    $cat_args = array( 'posts_per_page' => 3, 'category' => $featured_category );

    $posts_array = get_posts( $cat_args );


    if( $posts_array ) {

      $trimmed_content = wp_trim_words( $posts_array[0]->post_content );

      $post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($posts_array[0]), 'large' );

    }

  ?>

  <article class="featured animation-element" data-anim="slide_top">

    <div class="article-img-wrap" style="background-image: url(<?php echo $post_thumbnail[0] ?>);"></div>

    <div class="article-content-wrap">

      <h4><a href="<?php the_permalink(); ?>"><?php echo $posts_array[0]->post_title; ?></a></h4>

      <p><?php echo $trimmed_content; ?></p>

      <a href="<?php the_permalink(); ?>" class="btn btn-green btn-medium">Więcej</a>

    </div>

  </article>

  <div class="row row-articles animation-element" data-anim="slide_top">

  <?php

    for ($i = 1; $i <= 2; $i++){

      $trimmed_content = wp_trim_words( $posts_array[$i]->post_content );
      $post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($posts_array[$i]), 'large' );

  ?>

    <div class="span6">

      <article>

        <h4><a href="<?php the_permalink(); ?>"><?php echo $posts_array[$i]->post_title; ?></a></h4>

        <div class="wrap">

          <div class="article-img-wrap" style="background-image: url(<?php echo $post_thumbnail[0] ?>);"></div>

          <div class="article-content-wrap">

            <p><?php echo $trimmed_content; ?></p>

            <a href="<?php the_permalink(); ?>" class="btn btn-green btn-small">Więcej</a>

          </div>

        </div>

      </article>

    </div>

  <?php } ?>

  </div>

  <!-- mobile only (480w) -->
  <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-mobile btn-transparent">Wszystkie newsy</a>

</section>
