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
	<h1><?php single_term_title(); ?></h1>
	<a href="javascript:history.back()">Voltar</a>
	<section>
		<?php get_template_part( 'partials/filters' ); ?>
  </section>
	<?php get_template_part( 'partials/gallery', 'downloads' ); ?>
</main>

<?php get_template_part( 'partials/footer' ); ?>
