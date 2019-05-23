<?php
/* Template Name: Categoria de arquivo */
/**
 * The template for displaying the downloads category page
 *
 * @package ESM
 */
	get_template_part( 'partials/header' );
?>

<?php
  $baseurl = get_template_directory_uri();
?>

Teste

<?php while ( have_posts() ) : the_post(); ?>
  <main>
		<h1><?php //single_cat_title(); ?></h1>
		<a href="javascript:history.back()">Voltar</a>
		<?php
			$taxo = get_queried_object()->term_id;
			set_query_var( 'current_category', absint( $taxo ) );
		?>
		<section>
				<?php get_template_part( 'partials/gallery', 'archive' ); ?>
    </section>
		<section>
				<?php set_query_var( 'taxonomy', 'tipo_de_arquivo' );?>
				<?php get_template_part( 'partials/filters' ); ?>
    </section>
  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
