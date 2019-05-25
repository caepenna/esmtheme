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

  <ul>
      <?php
          while ($posts_query -> have_posts()) : $posts_query -> the_post();
          $postcat = get_the_category( $post->ID );
          if ( ! empty( $postcat ) ) {
              $area_slug = $postcat[0]->slug;
              $area_name = $postcat[0]->name;
          }
          $thumbnail = get_post_thumbnail_id();
          $titulo = get_the_title();
          $link = get_permalink();
      ?>
        <li>
          <a href="<?php echo $link; ?>">
              <article class="post-thumb slide card visible">
                  <figure>
                      <?php echo wp_get_attachment_image($thumbnail, 'large'); ?>
                  </figure>
                  <div class="post-info">
                      <h4><?php echo $area_name; ?></h4>
                      <h3><?php echo $titulo; ?></h3>
                  </div>
              </article>
            </a>
          </li>

      <?php
        endwhile;
        wp_reset_postdata();
      ?>
  </ul>

<?php endif; ?>
