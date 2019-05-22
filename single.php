<?php
/* Template Name: Post */
/**
 * The template for displaying the single blog post
 *
 * @package ESM
 */
	get_template_part( 'partials/header' );
?>

<?php
  $baseurl = get_template_directory_uri();
?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php
        $postcat = get_the_category( $post->ID );
        if ( ! empty( $postcat ) ):
          $area_slug = $postcat[0]->slug;
          $area_name = $postcat[0]->name;
          $term_id = $postcat[0]->term_id;
          $taxonomy = $postcat[0]->taxonomy;
        endif;
    ?>

    <main>
        <div>
            <span><?php echo $area_name; ?></span>
        </div>
        <h1><?php the_title(); ?></h1>
        <div>
            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large', '', array('class' => '')); ?>
        </div>
        <div>
            <?php the_content(); ?>
        </div>
    </main>
		<?php get_template_part( 'partials/related-posts' ); ?>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
