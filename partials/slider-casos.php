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
  <section>
    <p>Casos modelo</p>
    <div>

    <!-- Loop que constrói slides com casos -->
    <?php  $i = 1; foreach( $casos as $post ): setup_postdata( $post ); ?>
      <?php
        //vars
        $depo = get_field('depoimento');
        $id = $post->post_name;
        $capa = get_post_thumbnail_id();
      ?>

      <div>
        <?php if( $depo ): ?>
          <p><?php echo $depo ?></p>
          <a href="<?php echo get_site_url(); ?>/casos-modelo/#<?php echo $id ?>">Como agir?</a>
        <?php endif; ?>
      </div>

      <?php $i++; endforeach; wp_reset_postdata(); ?>
    </div>
  </section>

<?php endif; ?>
