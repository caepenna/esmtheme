<?php
/**
 * Books Slider
 *
 * @package ESM
 */
?>

<?php
  $query_args = array(
    'posts_per_page'  => 6 ,
    'post_type'       => 'livro',
    'meta_key'		    => 'destaque',
    'meta_value'	    => 1
  );
  $posts_query = new WP_Query( $query_args );
  if ($posts_query -> have_posts()) :
?>

  <ul class="books-slider owl-carousel">

    <?php
      while ($posts_query -> have_posts()) : $posts_query -> the_post();
        $thumbnail = get_post_thumbnail_id();
        $titulo = get_the_title();
        $link = get_permalink();
    ?>

      <li class="book">
        <?php echo wp_get_attachment_image($thumbnail, 'large'); ?>
        <article class="info">
          <h4><?php echo $titulo; ?></h4>
          <div class="excerpt">
            <?php the_excerpt(); ?>
            <div class="metainfo">
              <p>Autor: <em><?php the_field('autor'); ?></em></p>
              <p>Editora: <em><?php the_field('editora'); ?></em></p>
              <p>Ano: <em><?php the_field('ano'); ?></em></p>
            </div>
          </div>
          <a class="link" href="<?php echo $link; ?>">Saiba mais…</a>
      </article>
      </li>

    <?php
      endwhile;
      wp_reset_postdata();
    ?>

  </ul>

  <script type="text/javascript">
      var owl_books = $('.books-slider.owl-carousel');
      owl_books.owlCarousel({
          loop: true,
          dots: false,
          items: 1,
          margin: 0,
          nav: true
      });
  </script>

<?php endif; ?>
