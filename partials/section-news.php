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


  <!-- =================================================
          module featured_articles
  ================================================== -->
  <?php get_template_part("partials/module", "featured_articles"); ?>


</section>
