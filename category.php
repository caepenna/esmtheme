<?php
/* Template Name: Categoria */
/**
 * The template for displaying the category page
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
		<h1><?php single_cat_title(); ?></h1>
		<a href="javascript:history.back()">Voltar</a>
		<?php set_query_var( 'current_category', absint( $cat ) );?>
		<section>
				<?php get_template_part( 'partials/gallery', 'archive' ); ?>
    </section>
		<section>
				<?php get_template_part( 'partials/filters' ); ?>
    </section>
  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
