<?php
/**
 * Related Posts
 *
 * @package ESM
 */
?>

<?php
  $related = new WP_Query(
    array(
      'category__in'   => wp_get_post_categories( $post->ID ),
      'posts_per_page' => 3,
      'post__not_in'   => array( $post->ID )
    )
  );
  if( $related->have_posts() ) :
?>

  <section>
    <h2>Relacionado</h2>
    <div>
      <?php
        while ($related -> have_posts()) : $related -> the_post();
        $postcat = get_the_category( $post->ID );
        if ( ! empty( $postcat ) ) {
          $area_slug = $postcat[0]->slug;
          $area_name = $postcat[0]->name;
          $term_id = $postcat[0]->term_id;
          $taxonomy = $postcat[0]->taxonomy;
        }
      ?>
        <a href="<?php the_permalink() ?>">
          <figure>
            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium_large'); ?>
          </figure>
          <h3><span><?php echo $area_name; ?></span><?php the_title(); ?></h3>
        </a>
      <?php
      	endwhile;
      	wp_reset_postdata();
      ?>
    </div>
  </section>

<?php endif; ?>
