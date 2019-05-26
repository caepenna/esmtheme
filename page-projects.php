<?php
/* Template Name: Projetos */
/**
 * The template for displaying Projects page
 *
 * @package ESM
 */
  get_template_part( 'partials/header' );
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>

    <section class="section-title">
      <h2 class="title">Descubra projetos pela educação  sem censura <em>pelo Brasil</em></h2>
    </section>

    <section class="section-projects">
      <div class="list">
        <select>
          <option value="">Outro Preto / MG</option>
          <option value="">Campo Grande / MS</option>
        </select>
        <ul>
          <li>
            <h5>Nome do projeto</h5>
            <p><em>Responsável:</em> Nome do responsável</p>
            <p><em>Telefone:</em> 61 99298 1313</p>
            <p><em>Email:</em> contato@gmail.com</p>
          </li>
          <li>
            <h5>Nome do projeto</h5>
            <p><em>Responsável:</em> Nome do responsável</p>
            <p><em>Telefone:</em> 61 99298 1313</p>
            <p><em>Email:</em> contato@gmail.com</p>
          </li>
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
