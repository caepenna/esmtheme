<?php
/* Template Name: Vídeos */
/**
 * The template for displaying the videos page
 *
 * @package ESM
 */
 set_query_var( 'post_type', 'post' );

	get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>
		<section class="section-title bg-white">
      <h2 class="-uppercase">Vídeos</h2>
    </section>
    <section class="videos-section">
			<?php get_template_part( 'partials/gallery', 'videos' ); ?>
		</section>
  </main>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
