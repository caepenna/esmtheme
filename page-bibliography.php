<?php
/* Template Name: Bibliografia */
/**
 * The template for displaying the bibliography page
 *
 * @package ESM
 */
 set_query_var( 'post_type', 'post' );

	get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>
		<section>
      <h2>Conheça a causa, suas origens e seus fundamentos.</h2>
			<?php get_template_part( 'partials/slider', 'books' ); ?>
    </section>
		<section>
			<h2>Livros</h2>
			<?php get_template_part( 'partials/gallery', 'books' ); ?>
		</section>
  </main>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
