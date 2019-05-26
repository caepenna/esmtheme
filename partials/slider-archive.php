<?php
/**
 * Archive Slider
 *
 * @package ESM
 */
?>

<?php
    $query_args = array(
        'posts_per_page' => 6 ,
        'post_type' => 'post'
    );
    $posts_query = new WP_Query( $query_args );
    if ($posts_query -> have_posts()) :
?>

  <ul class="news-slider">
      <?php
          while ($posts_query -> have_posts()) : $posts_query -> the_post();
          $postcat = get_the_category( $post->ID );
          if ( ! empty( $postcat ) ) {
              $area_slug = $postcat[0]->slug;
              $area_name = $postcat[0]->name;
          }
          $thumbnail = get_the_post_thumbnail_url();
          $titulo = get_the_title();
          $link = get_permalink();
      ?>
        <li class="news-card">
          <a class="card" href="<?php echo $link; ?>" style="background-image: url('<?php echo $thumbnail; ?>')">
            <div class="info">
              <h4 class="tag -uppercase"><?php echo $area_name; ?></h4>
              <h3 class="title -uppercase"><?php echo $titulo; ?></h3>
            </div>
          </a>
        </li>

      <?php
        endwhile;
        wp_reset_postdata();
      ?>
  </ul>

<?php endif; ?>
