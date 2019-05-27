<?php
/* Template Name: Casos Modelo */
/**
 * The template for displaying Tactis page
 *
 * @package ESM
 */
  get_template_part( 'partials/header' );
?>

<main>

  <?php while ( have_posts() ) : the_post(); ?>

    <section class="section-board -yellow">
      <div class="board">
        <h3 class="title"><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
      <?php // echo wp_get_attachment_url(get_post_thumbnail_id(), 'full'); ?>
    </section>

  <?php endwhile; ?>

  <?php
    $casos = get_posts(array(
    	'numberposts'	=>     -1,
    	'post_type'		=>     'caso'
    ));
  ?>

  <?php if( $casos ): ?>

    <section class="section-casesnav">

      <!-- Loop que constrói menu de casos -->
      <?php  $i = 1; foreach( $casos as $post ): setup_postdata( $post ); ?>
        <?php
          //vars
          $depo = get_field('depoimento');
          $id = $post->post_name;
          $titulo = get_the_title();
        ?>

        <a class="link" href="#<?php echo $id ?>">
          <span>
            <?php if( $depo ): ?>
              <?php echo $depo ?>
            <?php else: ?>
              <?php echo $titulo; ?>
            <?php endif; ?>
          </span>
        </a>

      <?php $i++; endforeach; wp_reset_postdata(); ?>

    </section>


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
      <section class="section-case" id="<?php echo $id ?>">

        <div class="case">

          <div class="text">
            <?php if( $titulo ): ?>
              <h3 class="title -uppercase"><?php echo $titulo ?></h3>
            <?php endif; ?>

            <?php if( $intro ): ?>
              <p class="intro"><?php echo $intro ?></p>
            <?php endif; ?>

            <?php if( $detalhes ): ?>
              <!-- <a>Mais detalhes</a> -->
              <?php echo $detalhes ?>
            <?php endif; ?>
          </div>

          <div class="img"></div>

        </div>

        <?php if ($capa) : ?>
          <?php echo wp_get_attachment_image($capa, 'medium_large'); ?>
        <?php endif; ?>

        <?php if( $como_se_proteger ): ?>
          <div class="protect">
            <h3 class="title -uppercase -light">Como se proteger?</h3>
            <div class="content">
              <?php echo $como_se_proteger ?>
            </div>
          </div>
        <?php endif; ?>

      </section>

    <?php $i++; endforeach; wp_reset_postdata(); ?>

  <?php endif; ?>

</main>

<?php get_template_part( 'partials/footer' ); ?>
