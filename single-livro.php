<?php
	/* Template Name: Livro */
	/**
	* The template for displaying the single book post
	*
	* @package ESM
	*/
  set_query_var( 'page_title', 'Bibliografia' );
	
	get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

	<main>
	  <h1><?php the_title(); ?></h1>
		<div>
			<p>Autor: <?php the_field('autor'); ?></p>
			<p>Editora: <?php the_field('editora'); ?></p>
			<p>Ano: <?php the_field('ano'); ?></p>
		</div>
	  <div>
	  	<?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large', '', array('class' => '')); ?>
	  </div>
	  <div>
			<h2>Resenha</h2>
      <?php the_content(); ?>
	  </div>
		<div>
			<?php echo wp_get_attachment_image(get_field('foto_autor'), 'medium', '', array('class' => '')); ?>
			<h3>Sobre o autor</h3>
			<p><?php the_field('sobre_autor'); ?></p>
		</div>
		<?php get_template_part( 'partials/related', 'books' ); ?>
</main>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
