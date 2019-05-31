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
  <section class="section-title taxonomy">
		<a href="<?php echo get_site_url(); ?>/noticias">Notícias</a>
		<h2 class="title"><?php single_cat_title(); ?></h2>
	</section>

	<section class="section-posts">
		<?php set_query_var( 'taxonomy', 'category' );?>
    <?php get_template_part( 'partials/gallery', 'posts' ); ?>
		<?php get_template_part( 'partials/filters' ); ?>
  </section>
</main>

<?php get_template_part( 'partials/footer' ); ?>
