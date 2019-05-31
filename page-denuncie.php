<?php
/**
 * The template for displaying denuncie page
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
    <img src="<?php echo $baseurl.'/assets/images/form_denuncia.png' ?>" style="width: 100%; height: auto;">
  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
