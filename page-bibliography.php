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
		<section class="section-title bg-white">
      <h2 class="-uppercase">Conheça a causa, <em>suas&nbsp;origens</em> e <em>fundamentos</em></h2>
    </section>
    <section class="bg-blackboard">
      <?php get_template_part( 'partials/slider', 'books' ); ?>
    </section>
		<section class="section-subtitle">
			<h3 class="title">Livros</h3>
			<?php get_template_part( 'partials/gallery', 'books' ); ?>
		</section>
    <section class="section-subtitle">
			<h3 class="title">Vídeos</h3>
			<?php get_template_part( 'partials/gallery', 'videos' ); ?>
		</section>
  </main>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
