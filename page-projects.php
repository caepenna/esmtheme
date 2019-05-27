<?php
/* Template Name: Projetos */
/**
 * The template for displaying Projects page
 *
 * @package ESM
 */
  get_template_part( 'partials/header' );
?>

<?php
  $projetos = get_posts(array(
  	'numberposts'	=>     -1,
  	'post_type'		=>     'projeto'
  ));
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>

    <section class="section-title">
      <h2 class="title">Descubra projetos pela educação  sem censura <em>pelo Brasil</em></h2>
    </section>

    <section class="section-projects">
      <div class="list">

        <!-- Estado -->
        <select>
          <option value="">MG</option>
          <option value="">MS</option>
        </select>

        <!-- Município -->
        <select>
          <option value="">Outro Preto</option>
          <option value="">Campo Grande</option>
        </select>

        <!-- Tipo de projeto, "Tipo" -->
        <select>
          <option value="">Escola sem Partido</option>
          <option value="">Antigênero</option>
          <option value="">Antipornografia</option>
        </select>

        <!-- Status do projeto, "Status" -->
        <!-- <select>
          <option value="">Em Vigor</option>
          <option value="">Sancionado</option>
          <option value="">Retirado</option>
        </select> -->

        <ul>
          <!-- Loop que constrói lista de projetos -->
          <?php  $i = 1; foreach( $projetos as $post ): setup_postdata( $post ); ?>
            <?php
              //vars
              $titulo = get_the_title();
              $responsavel = get_field('responsavel');
              $telefone = get_field('telefone');
              $email = get_field('email');
              $municipio = get_field('municipio');
              $coordenadas = get_field('coordenadas');
              $status = get_field('status');
              $id = $post->post_name;
            ?>
            <li>

              <?php if( $titulo ): ?>
                <h5><?php echo $titulo ?></h5>
              <?php endif; ?>

              <?php if( $responsavel ): ?>
                <p><em>Responsável: </em><?php echo $responsavel ?></p>
              <?php endif; ?>

              <?php if( $telefone ): ?>
                <p><em>Telefone: </em><?php echo $telefone ?></p>
              <?php endif; ?>

              <?php if( $email ): ?>
                <p><em>Email: </em><?php echo $email ?></p>
              <?php endif; ?>


            </li>

          <?php $i++; endforeach; wp_reset_postdata(); ?>

        </ul>

      </div>
      <div class="map">
        <div id="map"></div>
        <h6>Ouro Preto / MG</h6>
      </div>
    </section>

  </main>

  <script type="text/javascript">
    window.onload = function () {
      mapboxgl.accessToken = 'pk.eyJ1IjoibGFib3VsYW5nZXJpZSIsImEiOiJjamZtcTVwMnUxM2JtMzBwbzhxaDE0MzRvIn0.IR-XQlIH_92_ZhqwsFwDhw';
      const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/laboulangerie/cjrkwgeqh0qs32sob15q8sc1g',
        center: [-47.938,-15.796],
        zoom: 11
      });
    };
  </script>

<?php endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
