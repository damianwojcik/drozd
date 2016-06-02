<?php

  $featured_category = get_field('featured_articles_category', 'option');

  $posts_num = 7;

  $cat_args = array( 'posts_per_page' => $posts_num, 'category' => $featured_category );

  $posts_array = get_posts( $cat_args );

  if( $posts_array ) {

      $counter = 0;

?>

<ul class="featured-articles">

  <?php foreach ($posts_array as $post) {

      $trimmed_content = wp_trim_words( $post->post_content );
      $thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

      $counter = $counter +1;

  ?>

        <li>

            <article>

              <?php if($counter != 1){ ?>

                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

              <?php } ?>

              <div class="wrap">

                <a href="<?php the_permalink(); ?>" class="tile-img-link">

                  <div class="tile-img"<?php if( !empty($thumbnail) ){ ?> style="background-image: url(<?php echo $thumbnail; ?>)" <?php } ?>>

                    <?php if( empty($thumbnail) ){ ?>

                      <div class="image-placeholder">
                        <i class="material-icons">photo_camera</i>
                      </div>

                    <?php } ?>
                  </div>

                </a>

                <div class="article-content-wrap">

                  <?php if($counter == 1){ ?>

                      <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

                  <?php } ?>

                  <p><?php echo $trimmed_content; ?></p>

                  <a href="<?php the_permalink(); ?>" class="btn btn-green btn-small">Więcej</a>

                </div>

              </div>

            </article>

        </li>

    <?php } ?>

</ul>

  <?php
      }
  ?>

<!-- mobile only (480w) -->
<a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-mobile btn-transparent">Wszystkie newsy</a>
