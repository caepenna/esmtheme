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

  <div class="news-slider owl-carousel">
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
        <div class="news-card">
          <a class="card" href="<?php echo $link; ?>" style="background-image: url('<?php echo $thumbnail; ?>')">
            <div class="info">
              <h4 class="tag -uppercase"><?php echo $area_name; ?></h4>
              <h3 class="title -uppercase"><?php echo $titulo; ?></h3>
            </div>
          </a>
        </div>

      <?php
        endwhile;
        wp_reset_postdata();
      ?>
  </div>

  <script type="text/javascript">
      var owl_news = $('.news-slider.owl-carousel');
      owl_news.owlCarousel({
          loop: true,
          dots: false,
          items: 1,
          margin: 0
      });
  </script>

<?php endif; ?>
