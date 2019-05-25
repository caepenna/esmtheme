<?php
/* Template Name: Categoria */
/**
 * The template for displaying the category page
 *
 * @package ESM
 */
 	set_query_var( 'page_title', 'Notícias' );
  set_query_var( 'post_type', 'post' );
	set_query_var( 'taxonomy', 'category' );
	set_query_var( 'current_category', absint( $cat ) );

	get_template_part( 'partials/header' );
?>

<main>
	<h1><?php single_cat_title(); ?></h1>
	<a href="javascript:history.back()">Voltar</a>
	<section>
		<?php get_template_part( 'partials/gallery', 'posts' ); ?>
  </section>
	<section>
		<?php set_query_var( 'taxonomy', 'category' );?>
		<?php get_template_part( 'partials/filters' ); ?>
  </section>
</main>

<?php get_template_part( 'partials/footer' ); ?>
