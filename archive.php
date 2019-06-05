<?php
/* Template Name: Notícias */
/**
 * The template for displaying the archive page
 *
 * @package ESM
 */
 set_query_var( 'post_type', 'post' );
 set_query_var( 'taxonomy', 'category' );

	get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>
		<section class="section-news -dark">
			<?php get_template_part( 'partials/slider', 'archive' ); ?>
    </section>
		<section class="section-posts">
      <?php get_template_part( 'partials/gallery', 'posts' ); ?>
			<?php get_template_part( 'partials/filters' ); ?>
    </section>
  </main>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
