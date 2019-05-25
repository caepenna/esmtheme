<?php
/* Template Name: Casos Modelo */
/**
 * The template for displaying Tactis page
 *
 * @package ESM
 */
  get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>

    <section>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full'); ?>
    </section>

  </main>

<?php endwhile; ?>

<?php
  $casos = get_posts(array(
  	'numberposts'	=>     -1,
  	'post_type'		=>     'caso'
  ));
?>

<?php if( $casos ): ?>

  <!-- Loop que constrói menu de casos -->
  <?php  $i = 1; foreach( $casos as $post ): setup_postdata( $post ); ?>
    <?php
      //vars
      $depo = get_field('depoimento');
      $id = $post->post_name;
      $titulo = get_the_title();
    ?>

    <div>
        <a href="#<?php echo $id ?>">
          <?php if( $depo ): ?>
            <?php echo $depo ?>
          <?php else: ?>
            <?php echo $titulo; ?>
          <?php endif; ?>
        </a>
    </div>

  <?php $i++; endforeach; wp_reset_postdata(); ?>


  <!-- Loop que constrói casos -->
  <?php  $i = 1; foreach( $casos as $post ): setup_postdata( $post ); ?>
    <?php
      //vars
      $titulo = get_the_title();
      $capa = get_post_thumbnail_id();
      $intro = get_field('intro');
      $detalhes = get_field('detalhes');
      $como_se_proteger = get_field('como_se_proteger');
      $id = $post->post_name;
    ?>
    <section id="<?php echo $id ?>">

      <?php if( $titulo ): ?>
        <h2><?php echo $titulo ?></h2>
      <?php endif; ?>

      <?php if ($capa) : ?>
        <?php echo wp_get_attachment_image($capa, 'medium_large'); ?>
      <?php endif; ?>

      <?php if( $intro ): ?>
        <p><?php echo $intro ?></p>
      <?php endif; ?>

      <?php if( $detalhes ): ?>
        <a>Mais detalhes</a>
        <p><?php echo $detalhes ?></p>
      <?php endif; ?>

      <?php if( $como_se_proteger ): ?>
        <h3>Como se proteger?</h3>
        <?php echo $como_se_proteger ?>
      <?php endif; ?>

    </section>

  <?php $i++; endforeach; wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_template_part( 'partials/footer' ); ?>
