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

	<main class="single-book">
    <section class="bg-blackboard">
      <div class="intro">
    	  <div class="cover">
    	  	<?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large', '', array('class' => '')); ?>
    	  </div>
    		<div class="info">
          <div class="container">
            <h1><?php the_title(); ?></h1>
            <div class="metainfo">
        			<p>Autor: <em><?php the_field('autor'); ?></em></p>
        			<p>Editora: <em><?php the_field('editora'); ?></em></p>
        			<p>Ano: <em><?php the_field('ano'); ?></em></p>
            </div>
          </div>
    		</div>
      </div>
    </section>
    <section class="book-about">
      <div class="container">
    	  <div class="resenha">
    			<h2 class="title">Resenha</h2>
          <?php the_content(); ?>
    	  </div>
    		<div class="author">
    			<?php echo wp_get_attachment_image(get_field('foto_autor'), 'medium', '', array('class' => '')); ?>
    			<h3>Sobre o autor</h3>
    			<p><?php the_field('sobre_autor'); ?></p>
    		</div>
      </div>
    </section>
		<?php //get_template_part( 'partials/related', 'books' ); ?>
</main>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
