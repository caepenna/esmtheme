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

  <ul class="books-slider">

    <?php
      while ($posts_query -> have_posts()) : $posts_query -> the_post();
        $thumbnail = get_post_thumbnail_id();
        $titulo = get_the_title();
        $link = get_permalink();
    ?>

      <li>
        <?php echo wp_get_attachment_image($thumbnail, 'large'); ?>
        <article class="info">
          <h4><?php echo $titulo; ?></h4>
          <div class="excerpt">
            <p><?php the_excerpt(); ?></p>
            <div class="metainfo">
              <p>Autor: <?php the_field('autor'); ?></p>
              <p>Editora: <?php the_field('editora'); ?></p>
              <p>Ano: <?php the_field('ano'); ?></p>
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

<?php endif; ?>
