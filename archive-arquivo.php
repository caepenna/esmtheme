<?php
	/* Template Name: Downloads */
	/**
	 * The template for displaying the archive page
	 *
	 * @package ESM
	 */
	 set_query_var( 'post_type', 'arquivo' );
	 set_query_var( 'taxonomy', 'tipo_de_arquivo' );

	 get_template_part( 'partials/header' );
?>

<?php
  $baseurl = get_template_directory_uri();
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>

    <section class="section-title">
      <h2 class="title">Leia e compartilhe<br>materiais <em>livremente.</em></h2>
    </section>

    <section class="section-downloads">
      <?php get_template_part( 'partials/filters' ); ?>
    	<?php get_template_part( 'partials/gallery', 'downloads' ); ?>
		</section>

  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
