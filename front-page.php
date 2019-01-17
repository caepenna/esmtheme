<?php
/* Template Name: Home */
/**
 * The template for displaying the home
 *
 * @package ESM
 */
	get_template_part( 'partials/header' );
?>

<?php
  $baseurl = get_template_directory_uri();
?>

<?php if ( have_posts() ) : the_post(); ?>

  <main>

  </main>

<?php endif; ?>

<?php
  get_template_part( 'partials/footer' );
?>
