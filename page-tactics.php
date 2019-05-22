<?php
/* Template Name: Estratégias */
/**
 * The template for displaying Tactis page
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

    <section>
        <div class="board">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
        <nav>
          <a href="#">Compartilhar</a>
          <a href="#">Baixar</a>
          <a href="#">Imprimir</a>
        </nav>
    </section>

    <?php if( have_rows('estrategias') ): ?>
    	<section class="estrategias">
      	<?php while( have_rows('estrategias') ): the_row();
      		$titulo = get_sub_field('titulo');
      		$texto = get_sub_field('texto');
      		$imagem = get_sub_field('imagem');
      	?>
        		<article class="estrategia">

        			<?php if( $titulo ): ?>
        				<h2><?php echo $titulo ?></h2>
        			<?php endif; ?>

              <?php if( $texto ): ?>
        				<p><?php echo $texto ?></p>
        			<?php endif; ?>

              <!-- Se precisar da url (pra usar como background-image, por exemplo) -->
              <?php echo wp_get_attachment_url($imagem); ?>

              <!-- Se for usar um elemento img. Com essa função, o Wordpress gera uma imagem responsiva usando o atributo srcset -->
              <?php echo wp_get_attachment_image($imagem, 'medium_large'); ?>

        		</article>
      	<?php endwhile; ?>
      </section>
    <?php endif; ?>

  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>