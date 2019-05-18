<?php
/* Template Name: Casos Modelo */
/**
 * The template for displaying Tactis page
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

    <section>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full'); ?>
    </section>

  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
