<?php
	/* Template Name: Categoria de arquivo */
	/**
	* The template for displaying the downloads category page
	*
	* @package ESM
	*/
	set_query_var( 'page_title', 'Downloads' );
	set_query_var( 'post_type', 'arquivo' );
	set_query_var( 'taxonomy', 'tipo_de_arquivo' );
	set_query_var( 'tipo_de_arquivo', get_query_var( 'term' ) );

	get_template_part( 'partials/header' );
?>

<main>
	<section class="section-title taxonomy">
		<a href="<?php echo get_site_url(); ?>/downloads">Downloads</a>
		<h2 class="title"><?php single_term_title(); ?></h2>
	</section>
	<section class="section-downloads">
		<?php get_template_part( 'partials/filters' ); ?>
		<?php get_template_part( 'partials/gallery', 'downloads' ); ?>
  </section>
</main>

<?php get_template_part( 'partials/footer' ); ?>
