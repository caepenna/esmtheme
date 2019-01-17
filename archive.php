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

  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
