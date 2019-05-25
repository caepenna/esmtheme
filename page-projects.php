<?php
/* Template Name: Projetos */
/**
 * The template for displaying Projects page
 *
 * @package ESM
 */
  get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>

    <section>
      <h1>Descubra projetos pela educação  sem censura pelo Brasil</h1>
    </section>
    <?php get_template_part( 'partials/project-map' ); ?>

  </main>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
