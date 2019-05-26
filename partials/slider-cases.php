<?php
/**
 *  Slider de casos modelo
 *
 * @package ESM
 */
?>

<?php
  $casos = get_posts(array(
    'numberposts'	=>     -1,
    'post_type'		=>     'caso',
    'orderby'     =>		 'rand'
  ));
?>

<?php if( $casos ): ?>
  <!-- Slide automático que mostra chamadas e links pra cada caso aleatoriamente -->
  <section class="section-cases">
    <div class="left">
      <h2 class="title">Casos modelo</h2>
      <div class="carousel owl-carousel">
        <!-- Loop que constrói slides com casos -->
        <?php  $i = 1; foreach( $casos as $post ): setup_postdata( $post ); ?>
          <?php
            //vars
            $depo = get_field('depoimento');
            $id = $post->post_name;
            $capa = get_post_thumbnail_id();
          ?>
          <article class="case">
            <?php if( $depo ): ?>
              <p><?php echo $depo ?></p>
              <a href="<?php echo get_site_url(); ?>/casos-modelo/#<?php echo $id ?>">Saiba como agir</a>
            <?php endif; ?>
          </article>
        <?php $i++; endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="right"></div>
  </section>

  <script type="text/javascript">
      var owl_cases = $('.section-cases .owl-carousel');
      owl_cases.owlCarousel({
          loop: true,
          dots: false,
          items: 1,
          margin: 0
      });
  </script>

<?php endif; ?>
