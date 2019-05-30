<?php
/* Template Name: Estratégias */
/**
 * The template for displaying Tactis page
 *
 * @package ESM
 */
  get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>

    <section class="section-board -green">
      <div class="board">
        <h3 class="title"><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <nav>
          <a href="#">Compartilhar</a>
          <a href="#">Baixar</a>
          <a href="#">Imprimir</a>
        </nav>
      </div>
    </section>

    <?php if( have_rows('estrategias') ): ?>
    	<section class="section-tactics">
      	<?php while( have_rows('estrategias') ): the_row();
      		$titulo = get_sub_field('titulo');
      		$texto = get_sub_field('texto');
      		$imagem = get_sub_field('imagem');
      	?>
      		<article class="tactic">
            <div>
              <div class="info">
                <?php if( $titulo ): ?>
          				<h2><?php echo $titulo ?></h2>
          			<?php endif; ?>

                <?php if( $texto ): ?>
          				<p><?php echo $texto ?></p>
          			<?php endif; ?>
              </div>
              <div class="illustration">
                <!-- Se precisar da url (pra usar como background-image, por exemplo) -->
                <?php //echo wp_get_attachment_url($imagem); ?>

                <!-- Se for usar um elemento img. Com essa função, o Wordpress gera uma imagem responsiva usando o atributo srcset -->
                <div class="image">
                  <?php echo wp_get_attachment_image($imagem, 'medium_large'); ?>
                </div>
              </div>
            </div>
      		</article>
      	<?php endwhile; ?>
      </section>
    <?php endif; ?>

  </main>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
