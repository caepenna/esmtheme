<?php
/* Template Name: Notícias */
/**
 * The template for displaying the archive page
 *
 * @package ESM
 */
	get_template_part( 'partials/header' );
?>

<?php
  $baseurl = get_template_directory_uri();
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>
		<?php
			set_query_var( 'post_type', 'post' );
		?>
		<section>
				<?php get_template_part( 'partials/slider', 'archive' ); ?>
    </section>
		<section>
				<?php get_template_part( 'partials/gallery', 'archive' ); ?>
    </section>
		<section>
				<?php
					set_query_var( 'taxonomy', 'category' );
					get_template_part( 'partials/filters' );
				?>
    </section>
  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
