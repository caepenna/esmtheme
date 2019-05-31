<?php
/* Template Name: Post */
/**
 * The template for displaying the single blog post
 *
 * @package ESM
 */
	get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php
	  $postcat = get_the_category( $post->ID );
	  if ( ! empty( $postcat ) ):
	    $area_slug = $postcat[0]->slug;
	    $area_name = $postcat[0]->name;
	    $term_id = $postcat[0]->term_id;
	    $taxonomy = $postcat[0]->taxonomy;
	  endif;
	?>

  <main class="single-post">
    <section>
			<h3 class="title"><?php the_title(); ?></h3>
    	<span class="tag"><?php echo $area_name; ?></span>
    </section>
    <section class="thumb">
			<div class="image">
	  		<?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large', '', array('class' => '')); ?>
			</div>
    </section>
    <section class="content">
    	<?php the_content(); ?>
    </section>
  </main>
	<?php //get_template_part( 'partials/related-posts' ); ?>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
