<?php
/**
 * The main template file
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
    <?php the_content(); ?>
  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
